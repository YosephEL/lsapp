<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Add_Prproducer;
class Add_PrproducerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return $PK_pr_producers
     */

    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show','edit','update','store','createProducer']]);
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
        $Add_Prproducer = Add_Prproducer::orderBy('PK_pr_producers')->paginate(3);
        return view('infogebanabenin.index')->with('Add_Prproducer',$Add_Prproducer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view('infogebanabenin.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


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
//



    }
    public function search(Request $request)
    {
        // Gets the query string from our form submission
        $query = Request::input('search');
        // Returns an array of articles that have the query string located somewhere within
        // our articles titles. Paginates them so we can break up lots of search results.
        $articles = DB::table('articles')->where('title', 'LIKE', '%' . $query . '%')->paginate(10);

        // returns a view and passes the view the list of articles and the original query.
        return view('page.search', compact('articles', 'query'));
    }
}
