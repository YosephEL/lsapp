<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //orderBy('created_at','desc')->paginate(3);
        $user_id =auth()->user()->id;
        $user = User::find($user_id);
        return view('home')->with('posts',$user->posts);

    }
}
