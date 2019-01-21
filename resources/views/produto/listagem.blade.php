@extends('layout.principal') 
@section('conteudo')


@if(empty($produtos))
	<div class="alert alert-danger">
		Você não tem nenhum produto cadastrado.
	</div>
	
@else

    <div class="container">
    	<h1>Listagem de produtos</h1>
    
    	<table class="table table-striped table-bordered table-hover">
    	
        <?php //foreach ($produtos as $p): ?>    
        @foreach($produtos as $p)
        
        	<tr class="{{$p->quantidade<=1 ? 'danger' : '' }}">
        	
    			<td>{{$p->nome}}</td>
    			<td>{{$p->valor}}</td>
    
    			<td><?= $p->descricao ?> </td>
    			<td><?= $p->quantidade ?> </td>
    
    			<td><a href="/produtos/mostra/<?= $p->id ?>"> <span
    					class="glyphicon glyphicon-search"></span></a></td>
    
    		</tr>
    			
        <?php //endforeach ?>    
        @endforeach
        
        </table>
    
    </div>

@endif

<h4>
	<span class="label label-danger pull-right">
		Um ou menos itens no estoque
	</span>
</h4>


@if(old('nome'))
<div class="alert alert-success">
	<strong>Sucesso!</strong> O produto {{ old('nome') }} foi adicionado.
</div>
@endif @stop
