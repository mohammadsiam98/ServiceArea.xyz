<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
// use App\Portfolio;
// use App\About;
// use App\Skill;
// use App\Award;
// use App\Education;
// use App\Experience;
// use App\Client;

class PagesController extends Controller
{
    //

    // public function blog()
    // {      
    //     $recentposts=  Blog::latest()->limit(2)->get();
    //     $blogs = Blog::paginate(2);
    //     $categories = Blog::orderBy('category','desc')->get();
    //     return view('pages.blog',compact('recentposts','blogs','categories'));
    // }

    public function index()
    {
        
        $abouts = About::first();
        // $portfolios = Portfolio::all();
        // $skills = Skill::all();
        // $abouts = About::all();
        // $awards = Award::all();
        // $experiences = Experience::all();
        // $educations = Education::all();
        
        return view('pages.index',compact('abouts'));
    }


}
