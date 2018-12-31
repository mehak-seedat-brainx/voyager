<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Project;
use App\ClientLogo;
use App\ClientReview;
use App\Job;
use App\WebsiteMenuItem;

class PagesController extends Controller
{
    public function index() {

       $projects = Project::all();
       $logos = ClientLogo::where('ShowHomePage', 1)->get();
       $reviews = ClientReview::where('ShowHomePage', 1)->get();



        return view('index', compact('projects','logos', 'reviews'));

    }

    public function services() {

        return view ('services');
    }

    public function bread($id) {
        return redirect('/admins/'.$id);
    }
    public function solutions ()
    {
        return view('solution');
    }
    public function company() {
        $jobs = Job::where('show',1)->get();
        return view('company')->with('jobs', $jobs);
    }
    public function contact() {
        return view('contact-us');
    }
    public function policy() {
        return view('privacy-policy');
    }
    public function terms() {
        return view('term-of-services');
    }
}
