<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
	public function viewAboutFile() {
		$show['heading'] = '<h1 style="text-align: center;">this is about page</h1>';
		return view('aboutUs', $show);
	}
}
