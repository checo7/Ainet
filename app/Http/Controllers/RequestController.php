<?php

namespace App\Http\Controllers;

use App\Models\Request;
use App\RequestPrint;
use DB;

class RequestController extends Controller
{
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = RequestPrint::all();

        return view('requests/dashboardRequests', compact('requests'));
    }

    public function create(){
            return view('requests/dashboardRequests', compact('requests'));
    }
}