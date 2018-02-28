<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pr_producers;
use DB;

class Pr_ProducersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth',['except'=>['index','show']]);
        $this->middleware('auth');

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$post = DB::select('SELECT * FROM pr_producers');
        //$title = 'Post page';
       $pr_producers = pr_producers::orderBy('firstname','asc')->paginate(10);
        return view('gebinfo.index')->with('pr_producers',$pr_producers);
       // return view ('gebinfo.index')->with('title',$title);




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($PK_pr_producers)
    {
        //
        $pr_producers = pr_producers::find($PK_pr_producers);
        return view('gebinfo.index')->with('pr_producers',$pr_producers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($PK_pr_producers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($PK_pr_producers)
    {
        //

    }
}
