<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Query;
use DB;



class QueryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','search']]);

    }
    public function search()
    {
        // Gets the query string from our form submission
        //$query = Query::input('search');
        // Returns an array of articles that have the query string located somewhere within
        // our articles titles. Paginates them so we can break up lots of search results.
        // $pr_producers = DB::table('pr_producers')->where('title', 'LIKE', '%' . $query . '%')->paginate(10);

        // returns a view and passes the view the list of articles and the original query.
        return view('gebinfo.search');
    }
}
