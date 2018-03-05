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
        //$this->middleware('auth',['except'=>['index','show']]);
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
     $pr_producers = pr_producers::orderBy('PK_pr_producers','asc')->paginate(3);
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
        $pr_producers = pr_producers::find($PK_pr_producers);
        return view('gebinfo.show')->with('pr_producers',$pr_producers);
        //return view('gebinfo.show');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $PK_pr_producers
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
     * @param  int  $PK_pr_producers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $PK_pr_producers)
    {
        //
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

    }
}
