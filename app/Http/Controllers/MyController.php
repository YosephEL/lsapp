<?php

namespace App\Http\Controllers;

use App\Jobs\MyQueueHandler;

class MyController extends Controller
{
    //
    public function myFunction()
    {
        $this->dispatch(new MyQueueHandler(['foo' => 'bar']));
    }
}
