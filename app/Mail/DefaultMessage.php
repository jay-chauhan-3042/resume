<?php

namespace App\Mail;

use App\Models\Mails;
use Illuminate\Mail\Mailable;

class DefaultMessage extends Mailable
{
    public $data;

    public function __construct($customData)
    {
        $this->data = $customData;
        $this->data["message"] = '<div><span style="font-size: 1rem;">Thank you for your message regarding the <b>"' . $this->data["message"] . '"</b>. I acknowledge receipt and assure you that I will respond promptly. Your communication is valued, and I will be in touch at the earliest convenience. If you have any further questions or concerns, please feel free to reach out.</span><br></div>';
    }

    public function build()
    {
        $insertData = array(
            "mailToEmail" => $this->data["to"],
            "mailToName" => $this->data["name"],
            "mailSubject" => $this->data["subject"],
            "mailContent" => $this->data["message"]
        );
        Mails::insert($insertData);
        return $this->subject($this->data["subject"])
            ->view('email.reply');
    }
}
