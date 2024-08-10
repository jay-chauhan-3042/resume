<?php

namespace App\Http\Controllers;

use App\Mail\ReplyMessage;
use App\Models\Contact;
use App\Models\Inbox;
use App\Models\Links;
use App\Models\Mails;
use App\Models\PersonalDetails;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use Webklex\IMAP\Facades\Client;


class MailsController extends BaseController
{
    public function getOutboundMails()
    {
        if (session()->has("user")) {
            $personalData = PersonalDetails::where("pdStatus", "!=", "0")->pluck("pdValue", "pdTitle")->all();
            $links = Links::select("linkAddress", "linkName")->pluck("linkAddress", "linkName")->all();
            $data = Mails::orderBy("mailDate", "desc")->get();
            $count = 0;
            return view('mails', compact('data', 'count', 'personalData', 'links'));
        } else {
            return redirect()->route('login');
        }
    }

    public function getInboundMail()
    {
        if (session()->has("user")) {
            $data = Inbox::orderBy("date", "desc")->get();
            $count = 0;
            return view('inbox', compact('data', 'count'));
        } else {
            return redirect()->route('login');
        }
    }

    public function getMail()
    {
        return view('email.reply', ["data" => json_decode($_GET["data"], true)]);
    }

    public function getMailInbox($id) {
        $body = Inbox::select("body")->where("id", $id)->get();
        return view('inboxMail', compact('body'));
    }

    public function renderMail() {
        $personalData = PersonalDetails::where("pdStatus", "!=", "0")->pluck("pdValue", "pdTitle")->all();
        $links = Links::select("linkAddress", "linkName")->pluck("linkAddress", "linkName")->all();
        $data = Mails::where("mailId", $_GET["id"])->get();

        $customData = [
            'subject' => $data[0]->mailSubject,
            'message' => $data[0]->mailContent,
            'name' => $data[0]->mailToName,
            'address1' => $personalData['address-apt'],
            'address2' => $personalData['address-area'] . ', ' . $personalData['address-city'],
            'address3' => $personalData['address-state'] . ', ' . $personalData['address-country-short'] . ' - ' . $personalData['address-pin'] . '.',
            'phone' => $personalData['phone1'],
            'linkedinLink' => $links['Linkedin'],
            'twitterLink' => $links['Twitter'],
            'whatsappLink' => $links['Whatsapp'],
            'instagramLink' => $links['Instagram'],
            'email' => $personalData['email'],
        ];

        return view('email.reply', ["data" => $customData]);
    }

    public function getInboundMails() {
        $client = Client::make([
            'host'          => config('imap.accounts.default.host'),
            'port'          => config('imap.accounts.default.port'),
            'encryption'    => config('imap.accounts.default.encryption'),
            'validate_cert' => config('imap.accounts.default.validate_cert'),
            'username'      => config('imap.accounts.default.username'),
            'password'      => config('imap.accounts.default.password'),
            'protocol'      => config('imap.accounts.default.protocol'),
        ]);

        $client->connect();
        $folder = $client->getFolder('INBOX');
        $messages = $folder->query()->unseen()->get();

        foreach ($messages as $message) {
            $details = array(
                "toEmail" => $message->getTo()[0]->mail,
                "fromEmail" => $message->getFrom()[0]->mail,
                "fromName" => $message->getFrom()[0]->personal,
                "subject" => $message->getSubject(),
                "body" => $message->getHTMLBody(),
                "date" => $message->getdate()[0]->format("Y-m-d H:i:s"),
            );
            Inbox::insert($details);
            $message->setFlag('SEEN');
        }
        $client->disconnect();

        return response()->json(['message' => 'Emails retrieved successfully.']);
    }
}
