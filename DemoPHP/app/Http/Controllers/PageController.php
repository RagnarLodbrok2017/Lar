<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function ShowName()
    {
    	$name = "Ahmed R. Mohamed";
    	return view('pages.page1', compact('name'));
    }
}
