<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Facts;
use App\Models\Images;
use App\Models\Links;
use App\Models\PersonalDetails;
use App\Models\Skills;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class UpdateController extends BaseController
{
    public function index()
    {
        if (session()->has("user")) {
            $personalDetails = PersonalDetails::all();
            $images = Images::where("imgStatus", "!=", "0")->pluck("imgFile", "imgTitle")->all();
            $links = Links::orderBy("linkDownload", "asc")->get();
            $facts = Facts::all();
            $skills = Skills::all();
            $education = Education::orderBy("eduEndDate", "desc")->get();
            $experience = Experience::orderBy("expEndDate", "desc")->get();
            return view('update', compact('personalDetails', 'images', 'links', 'facts', 'skills', 'education', 'experience'));
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

    public function viewTestimonialForm(Request $request) {
        if (session()->has("user")) {
            return view('testimonial');
        } else {
            return redirect()->route('login');
        }
    }

    public function addTestimonial(Request $request) {
        $name = $request->input("name");
        $descreption = $request->input("descreption");
        $imagePath = $request->input("image");

        $insertDetails = array(
            "testimonialName" => $name,
            "testimonialDescription" => $descreption,
            "testimonialImage" => $imagePath
        );
        Testimonial::insert($insertDetails);
        return redirect()->route('details');
    }
}
