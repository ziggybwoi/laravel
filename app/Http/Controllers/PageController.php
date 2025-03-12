<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class PageController extends Controller
{
    //
   // public function home() {
    //    $home = Home::all();
    //    return view('pages/home', compact('home'));
   // }
    public function skills() {
        $skills = Skill::all();
        return view('pages/skills', compact('skills'));
    }
    public function gallery() {
        return view('pages/gallery');
    }
}
