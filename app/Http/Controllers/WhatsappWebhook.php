<?php

namespace App\Http\Controllers;

use App\Models\WhatsappContact;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;

class WhatsappWebhook extends BaseController
{
    public function getIncommingMessage(Request $request)
    {
        $messageDetails = $request->all();
        $whatsappContact = WhatsappContact::createIfNotExists(str_replace("whatsapp:+91", "", $messageDetails["From"]), $messageDetails["ProfileName"]);

        if ($whatsappContact) {
            $whatsappMessage = $whatsappContact->messages()->create([
                'whatsappMessage' => $messageDetails["Body"],
                'whatsappMessageSid' => $messageDetails["MessageSid"],
                'whatsappMessageType' => '0',
                'whatsappMessageDate' => date("Y-m-d H:i:s"),
            ]);

            if ($whatsappMessage) {
                if ($messageDetails["NumMedia"] != 0) {
                    for ($i = 0; $i < $messageDetails["NumMedia"]; $i++) {
                        $whatsappMessage->media()->create([
                            'whatsappId' => $whatsappMessage->whatsappId,
                            'mediaType' => $messageDetails["MessageType"],
                            'mediaContentType' => $messageDetails["MediaContentType" . $i],
                            'mediaUrl' => $messageDetails["MediaUrl" . $i],
                        ]);
                    }
                }
            } else {
                Log::channel("whatsapp")->info("Unable to insert message details!:: Webhook Data: " . json_encode($request->all()));
            }
        } else {
            Log::channel("whatsapp")->info("Unable to insert contact details!:: Webhook Data: " . json_encode($request->all()));
        }
    }

    public function getFallbackDetails(Request $request)
    {
        $details = json_encode($request->all());
        Log::channel("whatsapp")->info("Fallback Details: " . $details);
    }
}
