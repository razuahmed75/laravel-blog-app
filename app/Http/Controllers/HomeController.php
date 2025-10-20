<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Home(){
        return view('home');
    }
    
    function About(){
        return view('about');
    }

    function Contact(){
        return view('contact');
    }
}
