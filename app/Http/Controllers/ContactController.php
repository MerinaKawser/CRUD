<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
	public function viewContactFile(){
		$data['heading']= '<h1 style="text-align:center; color:green;">Contact Us</h1>';
		$data['main']= '<p style="text-align:center;">this is main page</p>';
		$data['footer']= '<h4 style="text-align:center;">this is footer</h4>';
		
		return view('contactUs', $data);
	}
}
