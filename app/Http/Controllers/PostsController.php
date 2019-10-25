<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Posts;

class PostsController extends BaseController
{
	public function index(){
		$tabela = Posts::all();
		return view('index',['postagens' => $tabela]);
	}

	public function post($postSlug){
		$meuPost = Posts::select('slug','title','content')->where('slug',$postSlug)->get();

		return view('single', ['meuPost' => $meuPost]);
	}
    
    public function createPost(){

    }
}
