<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function About(){
        return view("frontend.pages.about");
    }

    public function Activity(){
        return view("frontend.pages.activity");
    }

    public function Blog(){
        return view("frontend.pages.blog");
    }

    public function Contact(){
        return view("frontend.pages.contact");
    }

}
