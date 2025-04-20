<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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

    public function postcontact(Request $request){

        $request->validate([
            'name'=>'required|string|min:2|max:25',
            'phone'=>'required',
            'email'=>'required',
            'msg'=>'required',

        ]);
        Contact::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'msg'=>$request->msg,
            'image'=>$request->image,
        ]);

        return redirect()->route('viewcontact');

    }



        public function viewcontact(){
            $contacts = Contact::all();
            return view('siteOne.view_contact' , compact('contacts'));
        }

    }
