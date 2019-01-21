<?php

namespace estoque\Http\Controllers;

//use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;


class ProdutoController extends Controller {    
    
    public function lista(){    
        
        $produtos = DB::select("select * from produtos");        
        
        if(view()->exists('produto.listagem'))
        {        
            return view('produto.listagem')->with('produtos', $produtos);
            //return view('listagem')->with('produtos', array());
        }
        
        //ou...
        //return view('listagem')->withProdutos($produtos);
        
        /*        
        $html = "<h1>Listagem de produtos com Laravel</h1>";
        $html .= "<ul>";        
        $produtos = DB::select("select * from produtos");        
        foreach ($produtos as $p) {
            
            $html .= "<li> Nome: ". $p->nome ." Descrição: ". $p->descricao ."</li>";
        }       
        $html .= "</ul>";
        return $html;
        */
        
    }

    public function mostra()
    {        
        
        //if (Request::has(’id’))
        
        //$id = Request::input('id', '0');
        
        $id = Request::route('id');        
        
        $resposta = DB::select('select * from produtos where id = ?', [$id]);
        if(empty($resposta)) {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $resposta[0]);
        
    }
    
    
    public function novo()
    {        
        return view('produto.formulario');        
    }
    
    
    public function adiciona()
    {
        $nome = Request::input('nome');
        $descricao = Request::input('descricao');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');
        
        //return implode( ',', array($nome, $descricao, $valor, $quantidade));
       
        
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?,?,?,?)',
        array($nome, $quantidade, $valor, $descricao));
        
        //return view('produto.adicionado');
        //return view('produto.adicionado')->with('nome', $nome);
        
        //$produtos = DB::select('select * from produtos');
        //return view(’produtos.listagem’)->with('produtos', $produtos);
        
        //return redirect('/produtos');
        
        //return redirect('/produtos')->withInput();
        
        return redirect('/produtos')->withInput(Request::only('nome'));
        
        
        
    }   
    
    
    
}
