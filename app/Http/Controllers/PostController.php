<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
	public function index(){
		$post = DB::table('human')->get();
		$data['post'] = $post;
		return view('post.index', $data);
	}
}
