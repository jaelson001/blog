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
    //HOME PAGE
	public function index(){
		$tabela = Posts::all();
		return view('index',['postagens' => $tabela]);
	}

    //EXIBIR POSTS
	public function post($postSlug){
		$meuPost = Posts::select('slug','title','content')->where('slug',$postSlug)->get();
		return view('single', ['meuPost' => $meuPost, 'title' => $meuPost[0]->title]);
	}

    //PAINEL DE CONTROLE
    public function exibir(){
    	$tabela = Posts::all();
        return view('admin.inicio', ['postagens' => $tabela]);
    }

    //EDITAR
	public function editar($slugPost){
		$postagem = Posts::where('slug', $slugPost)->get();
        // return dd($postagem);
        return view('admin.criar',['postagem' => $postagem[0]]);
	}

    // CRIAR
    public function criar(){
    	return view('admin.criar');
    }

    //DELETAR
    public function destroy(Request $dados){
        $slug = $dados->slug;
        $linha = Posts::where('slug', $dados->slug);
        $res = $linha->delete();

        return redirect()->route('admin');
    }

    //SALVAR
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

    //ATUALISAR
    public function atualisar(Request $dados){
        $tabela = Posts::find($dados->id);
        $novo_slug = strtolower(str_replace(' ','_',$dados->title));
        $tabela->slug = $novo_slug;
        $tabela->title = $dados->title;
        $tabela->content = $dados->content;
        $res = $tabela->save();
        if($res){
            return redirect()->route('admin');
        }else{
            return redirect()->back();
        }
    }
}
