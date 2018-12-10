<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Project;

class PagesController extends Controller
{
    public function index() {
        $title='Home!';
       $projects = Project::all();
            return view('index')->with('projects',$projects);

    }
    public function about() {
        $title='About!';
        return view ('pages.about')->with('title', $title);
    }
    public function services() {

        return view ('services');
    }
    public function solutions ()
    {
        return view('solution');
    }
    public function company() {
        return view('company');
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
