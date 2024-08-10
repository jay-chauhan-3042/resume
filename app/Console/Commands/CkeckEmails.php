<?php

namespace App\Console\Commands;

use App\Models\Inbox;
use Illuminate\Console\Command;
use Webklex\IMAP\Facades\Client;

class CheckEmails extends Command
{
    protected $signature = 'email:check';
    protected $description = 'Check for new emails';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
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
                "fromName" => $message->getFrom()[0]->personal,
                "fromEmail" => $message->getFrom()[0]->mail,
                "toEmail" => $message->getTo(),
                "subject" => $message->getSubject(),
                "body" => $message->getHTMLBody(),
                "date" => $message->getdate()[0]->format('Y-m-d H:i:s')
            );
            Inbox::insert($details);
            $message->setFlag('SEEN');
        }
        $client->disconnect();
    }
}
