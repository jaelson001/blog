<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
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
    

    public function login(){
        return view('login');
    }
    public function exibir(){
    	$tabela = Posts::all();
        return view('admin.inicio', ['postagens' => $tabela]);
    }
	public function editar($slugPost){
		$postagem = Posts::where('slug', $slugPost)->get();
		return view('admin.editar',['postagem' => $postagem]);
	}
    public function criar(){
    	return view('admin.criar');
    }
    public function excluir($slugPost){
    	$res = Posts::where('slug', $slugPost)->destroy();
    	if($res){
    		return redirect()->route('admin');
    	}else{
    		return redirect()->back(); 
    	}
    }
	public function salvar(Request $dados, Posts $tabela){
    	$res = $tabela->create([
    		'slug' => strtolower(str_replace(' ','_',$dados->title)),
    		'title' => $dados->title,
    		'content' => $dados->content
    	]);
    	if($res){
    		return redirect()->route('admin');
    	}else{
    		return redirect()->back();
    	}
    }
}
