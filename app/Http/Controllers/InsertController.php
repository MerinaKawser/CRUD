<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertController extends Controller
{
    //
	public function insertData(){
		$data['insert']='merina';
		return view('post.insert', $data);
	}
}
