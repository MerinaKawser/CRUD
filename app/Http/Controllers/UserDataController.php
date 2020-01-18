<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserDataController extends Controller

{
    //
	public function index(){
		$fetch = DB::table('human')->get();
		$data['showData'] = $fetch ;
		return view('post.index', $data);
	}
	public function insertData(){
		return view('post.insert');
	}
}