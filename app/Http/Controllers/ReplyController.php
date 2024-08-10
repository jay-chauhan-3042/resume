<?php

namespace App\Http\Controllers;

use App\Mail\ReplyMessage;
use App\Models\Contact;
use App\Models\Links;
use App\Models\PersonalDetails;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class ReplyController extends BaseController
{
    public function view()
    {
        $email = $_GET["email"];
        $name = $_GET["name"];
        return view('reply', compact('email', 'name'));
    }

    public function reply(Request $request)
    {
        $emails = explode(",", str_replace(" ", "", $request->input("email")));
        $name = $request->input("name");
        $personalData = PersonalDetails::where("pdStatus", "!=", "0")->pluck("pdValue", "pdTitle")->all();
        $links = Links::select("linkAddress", "linkName")->pluck("linkAddress", "linkName")->all();
        $customData = array(
            "subject" => $request->input("subject"),
            "name" => $name,
            "to" => $request->input("email"),
            "message" => $request->input("message"),
            "address1" => $personalData["address-apt"],
            "address2" => $personalData["address-area"] . ", " . $personalData["address-city"],
            "address3" => $personalData["address-state"] . ", " . $personalData["address-country-short"] . " - " . $personalData["address-pin"] . ".",
            "phone" => $personalData["phone1"],
            "instagramLink" => $links["Instagram"],
            "linkedinLink" => $links["Linkedin"],
            "twitterLink" => $links["Twitter"],
            "whatsappLink" => $links["Whatsapp"],
            "email" => $personalData["email"]
        );
        Mail::to($emails)->send(new ReplyMessage($customData));

        return redirect()->route('index')->header('Cache-Control', 'no-cache, no-store, must-revalidate');
    }
}
