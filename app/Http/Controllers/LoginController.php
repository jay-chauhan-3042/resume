<?php

namespace App\Http\Controllers;

use App\Models\Bruteforce;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent as Agent;

class LoginController extends BaseController
{
    public function view()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input("username");
        $password = $request->input("password");

        $data = User::select("userPassword")->where("userName", $username)->get();
        if (isset($data[0])) {
            if ($data[0]->userPassword == hash("sha512", $password)) {
                session()->put('user', 'Admin@Elevate360');
                return redirect()->route('index');
            } else {
                $passwordError = true;
                $agent = new Agent();
                // Update or insert the record
                Bruteforce::updateOrInsert(
                    [
                        'bfIP' => $request->ip(),
                        'bfBrowserInfo' => $request->userAgent(),
                        'bfOperatingSystem' => $agent->platform(),
                        'bfDeviceType' => $agent->device(),
                    ],
                    [
                        'bfCount' => DB::raw('IFNULL(bfCount, 0) + 1'),
                    ]
                );
                return redirect()->route('login', compact('passwordError'));
            }
        } else {
            $userError = true;
            return redirect()->route('login', compact('userError'));
        }
    }

    public function apiLogin(Request $request) {
        $username = $request->input("username");
        $password = $request->input("password");

        $data = User::select("userPassword")->where("userName", $username)->get();
        if (isset($data[0])) {
            if ($data[0]->userPassword == hash("sha512", $password)) {
                return response()->json(["status" => "200", "token" => $data[0]->userPassword]);
            } else {
                $agent = new Agent();
                // Update or insert the record
                Bruteforce::updateOrInsert(
                    [
                        'bfIP' => $request->ip(),
                        'bfBrowserInfo' => $request->userAgent(),
                        'bfOperatingSystem' => $agent->platform(),
                        'bfDeviceType' => $agent->device(),
                    ],
                    [
                        'bfCount' => DB::raw('IFNULL(bfCount, 0) + 1'),
                    ]
                );
                return response()->json(["status" => "403", "message" => "Invalid Password"]);
            }
        } else {
            return response()->json(["status" => "403", "message" => "Invalid Username"]);
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('index')->header('Cache-Control', 'no-cache, no-store, must-revalidate');
    }
}
