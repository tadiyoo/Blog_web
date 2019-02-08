<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller 
{    
    public function index(){  
         $title = 'Welcome to Tadiyo Blog Pages'; 
    return view('pages.index')->with('title',$title); 
}

    public function about(){ 
      $title = 'About Us';
      return view('pages.about')->with('title',$title); 

    }

    public function services(){  
        $data = array(    
            'title' => 'Services Page',
            'services' => ['Web Developing', 'Programming', 'Back-end Developer','Teachers Assistant','Ethical Hacking']   //this one is a regular array
        );
        return view('pages.services')->with($data); 
    }
}
