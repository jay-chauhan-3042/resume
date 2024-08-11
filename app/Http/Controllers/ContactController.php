<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class ContactController extends BaseController
{
    public function contact(Request $request)
    {
        $name = $request->input("name");
        $email = $request->input("email");
        $mobileNumber = $request->input("contact-phone");
        $subject = $request->input("subject");
        $message = $request->input("message");

        $whatsappResponse = Http::withHeaders([
            'authorization' => 'Bearer 76ae62e5e0587463000ec1613174c82d39b6b34303e446e013547baa47011cb99308692840de5b06e3444c777fa767419f5287665b9869b49dbd87379b854a3b',
            'Accept' => 'application/json',
        ])->post('https://api.dj-jay.in/v1/whatsapp/send', [
            'whatsappNumber' => $mobileNumber,
            'name' => $name,
            'templateName' => "quick_reply",
            'templateData' => [$name, $subject],
        ]);
        Log::channel("whatsapp")->info("Fallback Details: " . json_encode($whatsappResponse));

        $mailContent = "<p>Thank you for reaching out and for your message regarding the <strong>\"" . $subject . "\"</strong>. I wanted to let you know that I have received your communication and am currently reviewing the details.</p><p>Your message is important to me, and I will make it a priority to respond as soon as possible. Please rest assured that I will address your query with the attention it deserves and get back to you at my earliest convenience.</p><p>In the meantime, if you have any additional questions or need further assistance, do not hesitate to get in touch. Your satisfaction is important, and I’m here to help with any concerns you may have.</p><p>Thank you once again for contacting me. I look forward to connecting with you soon.</p>";

        $whatsappResponse = Http::withHeaders([
            'authorization' => 'Bearer 76ae62e5e0587463000ec1613174c82d39b6b34303e446e013547baa47011cb99308692840de5b06e3444c777fa767419f5287665b9869b49dbd87379b854a3b',
            'Accept' => 'application/json',
        ])->post('https://api.dj-jay.in/v1/email/sendEmail', [
            'name' => $name,
            'to' => $email,
            'subject' => "Acknowledgment of Your Message Regarding the \"" . $subject . "\" – We'll Be in Touch Soon",
            'title' => "Thank you!",
            'content' => $mailContent,
        ]);

        $insert = array(
            "name" => $name,
            "email" => $email,
            "contactNumber" => $mobileNumber,
            "subject" => $subject,
            "message" => $message,
            "mailSent" => "1"
        );
        Contact::insert($insert);
        return response()->json(["status" => "200"]);
    }
}
