<?php

namespace App\Mail;

use App\Models\Mails;
use Illuminate\Mail\Mailable;

class ReplyMessage extends Mailable
{
    public $data;
    public $fromEmail = "contact@dj-jay.in";
    public $fromName = "Jay Chauhan";

    public function __construct($customData)
    {
        $this->data = $customData;
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
        return $this->from($this->fromEmail, $this->fromName)->subject($this->data["subject"])
            ->view('email.reply');
    }
}
