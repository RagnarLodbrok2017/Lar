<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Page;

class Pagecontroller extends Controller
{
	public function show()
	{
		$pages = DB::table('pages')->get();
		return view('pages.show', compact('pages'));
	}
	public function store(Request $request)
	{
		$page = new Page();
		$page->title = $request->title;
		$page->save();
		return back();
	}
	public function delete(Page $page)
	{
		$page->delete();
		return back();
	}
	public function showOnePage(Page $page)
	{
		return View('pages.onepage', compact('page'));
	}
}
