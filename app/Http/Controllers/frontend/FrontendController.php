<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //home page
    public function home(){
        return view('frontend.index');
    }

    //about page
    public function about(){
        return view('frontend.about');
    }

    //blog-single page
    public function blog_single(){

        return view('frontend.blog-single');
    }


    //blog page
    public function blog(){
        return view('frontend.blog');
    }


    //casespage
    public function cases(){
        return view('frontend.cases');
    }


    //contact page
    public function contact(){
         return view('frontend.contact');
    }
    //services page
    public function services(){

        return view('frontend.services');
    }

}
