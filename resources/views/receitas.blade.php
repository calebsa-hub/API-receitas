<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Receitas</title>
    <link rel="stylesheet" href="<?php echo asset('css/estilo.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/form.css')?>" type="text/css">
    
    
</head>

<body>
<div id="interface">
    <header id="cabecalho">
        <hgroup>
            <h1>Receitas da Vovó Odete</h1>
            <h2>Uma tradição de sabores</h2>
        </hgroup>
        
        <a href="{{ url('/') }}">Início</a>
        <a href="{{ url('receitas') }}">Receitas</a>
    </header>

    <section id="corpo-full">
        <article id="noticia-principal">
            <header id="cabecalho-artigo">
                <hgroup>
                    <h1>Receitas cadastradas</h1>
                    
                </hgroup>
            </header>
        </article>
    </section>

    
    
    <div>
    	<table>
    		<tr>
    			<th>Imagem</th>
    			<th>Nome</th>
    			<th>Descrição</th>
    			<th>Etapas</th>
    			<th>Dificuldade</th>
    			<th>Qualidade</th>
    			<th>Categoria</th>
    			<th>Ação</th>
    		</tr>
    		<tbody>
				@foreach ($receitas as $receita)
					<tr>
					<td><img src="receitasImages/{{ $receita->foto }}"></td>
					<td>{{ $receita->nome }}</td>
					<td>{{ $receita->descricao }}</td>
					<td>{{ $receita->etapas }}</td>
					<td>{{ $receita->nivelDeDificuldade }}</td>
					<td>{{ $receita->nivelDeQualidade }}</td>
					<td>{{ $receita->categoria }}</td>
					<td>
						<a href="{{ route('editar_receita', ['id' => $receita->id]) }}">Editar</a>
						<a href="{{ route('excluir_receita', ['id' => $receita->id]) }}">Excluir</a>
					</td>
					</tr>
				@endforeach
    		</tbody>
    	</table>
    </div>
    
</div>
</body>
</html>