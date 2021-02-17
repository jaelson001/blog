<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class ApiController extends Controller
{
    public static function posts(){
    	$posts = Posts::all();
    	return \Response::json($posts);
    }
    public static function single($id){
    	$single = Posts::find($id);
    	return \Response::json($single);
    }
}
