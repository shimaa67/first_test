<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteOneController extends Controller
{


    public function contact(){
        return view('siteOne.contact');
    }

    public function about(){
        return view('siteOne.about');
    }

    public function home(){
        return view('siteOne.home');
    }
    public function portfolio(){
        return view('siteOne.portfolio');
    }

    public function service(){
        return view('siteOne.service');
    }

    public function postcontact(){
        return "hello";

}}
