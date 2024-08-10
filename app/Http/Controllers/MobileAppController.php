<?php

namespace App\Http\Controllers;

use App\Models\Headers;
use App\Models\Inbox;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class MobileAppController extends BaseController
{
    public function getEmails(Request $request)
    {
        $headers = $request->headers->all();

        $headerId = Headers::where("headerApiKey", $headers["x-api-key"])->where("headerApiSecret", $headers["x-api-secret"])->where("apiHost", $headers["x-api-host"])->first();

        if ($headerId) {
            $emails = Inbox::orderBy("date", "desc")->select("fromName", "fromEmail", "toEmail", "subject", "id", "date")->get();
            return response()->json($emails);
        } else {
            return response()->json(["status" => 302, "msg" => "Unauthenticated user"]);
        }
    }
}
