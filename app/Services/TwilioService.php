<?php

namespace App\Services;

use App\Models\WhatsappClient;
use Twilio\Rest\Client;

class TwilioService
{
    protected $client;
    private static $baseUrl;
    private static $accountSid;
    private static $authToken;

    public function __construct()
    {
        $WhatsappCredentials = WhatsappClient::where("accountIsActive", "1")->where("accountIsDeleted", "0")->limit(1)->first();
        self::$baseUrl = $WhatsappCredentials->whatsappBaseUrl;
        self::$accountSid = $WhatsappCredentials->whatsappAccountSid;
        self::$authToken = $WhatsappCredentials->whatsappAuthToken;
        $this->client = new Client($WhatsappCredentials->whatsappAccountSid, $WhatsappCredentials->whatsappAuthToken);
    }

    private static function sendCurlRequest($apiEndPoint, $method, $postData, $urlParams = null) {
        // Set url parameters
        $queryString = "";
        if ($urlParams) {
            foreach ($urlParams as $key => $value) {
                $queryString = "&" . $key . "=" . $value;
            }
            $queryString = preg_replace('/^&/', '?', $queryString);
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

        // Set the cURL options
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: Basic ' . base64_encode(self::$accountSid . ':' . self::$authToken)
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

    public function sendMessage($countryCode, $whatsappNumber)
    {
        $message = $this->client->messages
            ->create(
                "whatsapp:+" . $countryCode . $whatsappNumber,
                // [
                //     "from" => "whatsapp:+919313440532",
                //     "body" => "*Hello Jay Chauhan*👋\n\n🙏Thank you for your message regarding the *\"Testing The Template Message\"*.\n\nI acknowledge receipt and assure you that I will respond promptly.\n\nYour communication is valued, and I will be in touch at the earliest convenience.☺️\n\nIf you have any further questions or concerns, please feel free to reach out.👇",
                //     "provideFeedback" => true
                // ]
                [
                    "contentSid" => "HX33d7c4188716234b64f46900bbfde199",
                    "from" => "whatsapp:+919313440532",
                    "contentVariables" => json_encode([
                        "1" => "Jay Chauhan",
                        "2" => "Testing the whatsapp template"
                    ]),
                    "messagingServiceSid" => "MGfaba6282d0abd870ed442587cf5310d6"
                ]
            );  

            return ($message);
    }

    public function sendTemplateMessage() {
        // Set api end point
        $url = "v1/Content";

        // Set Post Data
        $postData = array(
            "friendly_name" => "thank_you",
            "language" => "en",
            "variables" => array(
                "1" => "Jay Chauhan",
                "2" => "Testing the whatsapp template"
            ),
            "types" => array(
                "twilio/call-to-action" => array(
                    "body" => "*Hello {{1}}*👋\n\n🙏Thank you for your message regarding the *\"{{2}}\"*.\n\nI acknowledge receipt and assure you that I will respond promptly.\n\nYour communication is valued, and I will be in touch at the earliest convenience.☺️\n\nIf you have any further questions or concerns, please feel free to reach out.👇",
                    "actions" => array(
                        array(
                            "type" => "URL",
                            "title" => "Visit Website",
                            "url" => "https://www.dj-jay.in"
                        ),
                        array(
                            "type" => "PHONE_NUMBER",
                            "title" => "Call",
                            "phone" => "+919313440532"
                        )
                    )
                )
            )
        );

        // Send Request
        $response = self::sendCurlRequest($url, "POST", $postData);
        dd($response);
    }

    public function saveWhatsappMessage($data) {
        log($data);
    }
}