<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pr_producers;

class Pr_ProducersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return $PK_pr_producers
     */

    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show','edit','update','store']]);
        //$this->middleware('auth');

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
     $pr_producers = pr_producers::orderBy('PK_pr_producers')->paginate(3);
        return view('gebinfo.index')->with('pr_producers',$pr_producers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gebinfo.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       // $pr_producers = new pr_producers;
        $pr_producers = new Pr_producers;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $PK_pr_producers
     * @return \Illuminate\Http\Response
     */
    public function show($PK_pr_producers)
    {
        //
        //select * from `pr_producers` where `pr_producers`.`$PK_pr_producers` = 15TGA16BR020
        $pr_producers = pr_producers::find($PK_pr_producers);
        return view('gebinfo.show')->with('pr_producers',$pr_producers);
        //return view('gebinfo.show');
        //return pr_producers::find($PK_pr_producers);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $PK_pr_producers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $pr_producers = pr_producers::find($id);
        return view('gebinfo.edit')->with('pr_producers',$pr_producers);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $PK_pr_producers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'firstname'=>'required',
            'lastname' => 'required',

        ]);
        $pr_producers = pr_producers::find($id);
        $pr_producers->firstname = $request->input('firstname');
        $pr_producers->lastname = $request->input('lastname');


        $pr_producers->save();

        return redirect('/gebinfo')->with('success','Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $PK_pr_producers
     * @return \Illuminate\Http\Response
     */
    public function destroy($PK_pr_producers)
    {
        //
//        $post = Post::find($id);
//
//        //Check for correct user
//
//        if(auth()->user()->id !== $post->user_id){
//            return redirect('/posts')->with('error','Unauthorized page');
//        }
//        if($post->cover_image != 'noimage.jpg'){
//            // delete image
//            Storage::delete('public/cover_image/'.$post->cover_image);
//        }
//        $post->delete();
//        return redirect('/posts')->with('success','Post Deleted');



    }
}
