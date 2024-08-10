<?php

namespace App\Services;

use App\Models\WhatsappClient;

class AisensyService
{
    protected $client;
    private static $baseUrl;
    private static $accountSid;
    private static $authToken;

    public function __construct()
    {
        $WhatsappCredentials = WhatsappClient::where("accountIsActive", "1")->where("accountIsDeleted", "0")->where("whatsappProviderName", "Aisensy")->limit(1)->first();
        self::$baseUrl = $WhatsappCredentials->whatsappBaseUrl;
        self::$authToken = $WhatsappCredentials->whatsappAuthToken;
    }

    private static function sendCurlRequest($apiEndPoint, $method, $postData, $urlParams = null) {
        // Set url parameters
        $queryString = "";
        if ($urlParams) {
            $queryString = "?" . http_build_query($urlParams);
        }

        // Initialize cURL session
        $ch = curl_init();

        // Set filnal url
        $url = self::$baseUrl . $apiEndPoint . $queryString;

        // Set the cURL options
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: Basic '. base64_encode(self::$accountSid . ':' . self::$authToken)
        ));

        // Execute the cURL request
        $response = curl_exec($ch);
        $curlError = curl_error($ch);

        // Close cURL session
        curl_close($ch);

        // Return response
        if(curl_error($ch)) {
            $return = array(
                "status" => 500,
                "error" => $curlError
            );
            return $return;
        } else {
            $return = array(
                "status" => 200,
                "response" => json_decode($response)
            );
            return $return;
        }
    }

    public function sendQuickMessage($countryCode, $whatsappNumber, $templateName, $fullName, $subject)
    {
        // Set post data
        $postData = array(
            "apiKey" => self::$authToken,
            "campaignName" => $templateName,
            "destination" => $countryCode . $whatsappNumber,
            "userName" => $fullName,
            "templateParams" => array(
                $fullName, // {{1}}
                $subject // {{2}}
            )
        );
        // Api End point
        $url = "campaign/t1/api/v2";

        $response = self::sendCurlRequest($url, "POST", $postData);
        if ($response["status"] == 200) {
            return $response;
        }
        return json_encode(["status" => "201", "data" => "Something went wrong!"]);
    }
}