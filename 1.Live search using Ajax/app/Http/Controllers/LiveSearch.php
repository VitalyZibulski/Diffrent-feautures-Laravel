<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class LiveSearch extends Controller
{
    function index()
	{
		return view('live_search');
	}

	function getData(Request $request)
	{

	}
}
