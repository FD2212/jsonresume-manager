<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    //


   public function __construct()
  {

     $this->middleware('auth');
   }

public function create(){
    return view('resume.create');

}

public function store(Request $request){


 }
}
