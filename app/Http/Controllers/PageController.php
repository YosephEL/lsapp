<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
/*
    public function welcome(){
        return view ('welcome');
    }
    */
    public function index(){
        $title = 'Home page';
        //return view ('pages.index');
        return view ('pages.index')->with('title',$title);
    }
    public function about(){
        $title = 'About Page';
        return view ('pages.about')->with('title',$title);
    }
    public function services(){
        $data = array(
            'title'=> 'Services Provider',
            'services'=> array(
                ('ICT' )=> 'Programming',
                ('Database' )=> 'Database Management'

            )
        );

        return view ('pages.services')->with($data);

   }
    public function contact(){
        $title = 'Contact Page';
        return view ('pages.contact')->with('title',$title);
    }
//    public function post(){
//        $title = 'post Page';
//        return view ('posts.index')->with('title',$title);
//
//    }
}
