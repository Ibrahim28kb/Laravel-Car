<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage(){
        $projectname = 'ACT Project';
        $year = date('Y');
        $name = 'ibrahim';
        return view('home.welcome',compact('projectname','year','name'));
    }

    public function setName($name ){
        $projectname = 'ACT Project';
        $year = date('Y');
       
        return view('home.welcome',compact('projectname','year','name'));

    }

   






//     $projectName = 'ACT Project';
//     $year = date('Y');
//     $name = 'Islam';
//     return view('home.welcome',compact('projectName','year'));
//     return view('home.welcome',compact('projectName','year','nam'));
// }
// public function welcome($name = 'islam'){

    
}
