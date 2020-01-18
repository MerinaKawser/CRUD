<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormPageController extends Controller
{
    //
	public function viewFormPage(Request $request) {
		$showData['fullName'] = $request->fullName;
		$showData['email'] = $request->email;
		$showData['address'] = $request->address;
		return view ('formPage', $showData);
	}
}
