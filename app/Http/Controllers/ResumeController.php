<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Facts;
use App\Models\Images;
use App\Models\Links;
use App\Models\PersonalDetails;
use App\Models\Skills;
use App\Models\Testimonial;
use App\Models\Visitor;
use App\Services\TwilioService;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent as Agent;
use Illuminate\Routing\Controller as BaseController;

class ResumeController extends BaseController
{
    public function index(Request $request)
    {
        $agent = new Agent();
        $insert = array(
            "ip" => $request->ip(),
            "browser" => $request->userAgent(),
            "os" => $agent->platform(),
            "device" => $agent->device(),
        );
        Visitor::createIfNotExists($insert);
        $personalDetails = PersonalDetails::where("pdStatus", "!=", "0")->pluck("pdValue", "pdTitle")->all();
        $images = Images::where("imgStatus", "!=", "0")->pluck("imgFile", "imgTitle")->all();
        $links = Links::where("linkStatus", "!=", "0")->orderBy("linkDownload", "asc")->get();
        $facts = Facts::all();
        $skills = Skills::all();
        $education = Education::orderBy("eduEndDate", "desc")->get();
        $experience = Experience::orderBy("expEndDate", "desc")->get();
        $testimonials = Testimonial::all();
        return view('resume-new', compact('personalDetails', 'images', 'links', 'facts', 'skills', 'education', 'experience', 'testimonials'));
    }
}
