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

		return view('single', ['meuPost' => $meuPost, 'title' => $meuPost[0]->title]);
	}
    
    public function criar(Posts $tabela){
    	
    	$res = $tabela->insert([
    		'slug' => 'segundo_post',
    		'title' => 'Segunda postagem',
    		'content' => 'essa é a descrição da segunda postagem',
    	]);

    	if($res){
    		return 'cadastrado';
    	}else{
    		return 'erro ao cadastrar';
    	}
    }
    public function atualizar(){
    	$tabela = new Posts;
    	$tabela->find(2);
    	$res = $tabela->update([
    		'slug' => 'segundo_post',
    		'title' => 'Atualização postagem',
    		'content' => 'essa é a descrição da segunda postagem',
    	]);
    	if($res){
    		return 'atualizado';
    	}
    }
}
