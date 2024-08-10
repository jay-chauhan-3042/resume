<?php

namespace App\Http\Controllers;

use App\Models\Bruteforce;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Facts;
use App\Models\Images;
use App\Models\Links;
use App\Models\PersonalDetails;
use App\Models\Skills;
use App\Models\Testimonial;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class DetailsController extends BaseController
{
    public function index()
    {
        if (session()->has("user")) {
            $personalDetails = PersonalDetails::all();
            $images = Images::all();
            $links = Links::all();
            $facts = Facts::all();
            $skills = Skills::all();
            $education = Education::all();
            $experience = Experience::all();
            $bruteforce = Bruteforce::all();
            $visitors = Visitor::orderBy("visitedDate", "desc")->select()->get();
            $testimonials = Testimonial::all();
            return view('details', compact('personalDetails', 'images', 'links', 'facts', 'skills', 'education', 'experience', 'bruteforce', 'visitors', 'testimonials'));
        } else {
            return redirect()->route('login');
        }
    }

    public function data()
    {
        return view('data');
    }

    public function updateData(Request $request)
    {
        $data = $request->all();
        $status = $data["status"];
        unset($data["status"]);
        foreach ($data as $key => $value) {
            PersonalDetails::where("pdTitle", "=", $key)->update(["pdValue" => $value]);
        }
        PersonalDetails::where('pdStatus', '=', "1")->update(['pdStatus' => '0']);
        PersonalDetails::whereIn('pdId', $status)->update(['pdStatus' => '1']);
        return redirect('/index');
    }
}
