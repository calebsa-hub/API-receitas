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
        <a href="{{ url('receitas')}}">Receitas</a>
    </header>

    <section id="corpo-full">
        <article id="noticia-principal">
            <header id="cabecalho-artigo">
                <hgroup>
                    <h1>Editar receita</h1>
                    
                </hgroup>
            </header>
        </article>
    </section>

    <form action="{{ route('editar_receita', ['id' => $receita->id]) }}" method="POST" id="fContato" enctype="multipart/form-data">
        {!!csrf_field()!!}


        <fieldset id="receita">
            <legend>Receita</legend>
            
            <p><label for="cNome">Nome:</label><input type="text" name="nome" id="cNome" size="20" maxlength="30" value="{{$receita->nome}}"></p>
            
            <p><label for="cDescricao">Descrição:</label><input type="text" name="descricao" id="cDescricao" value="{{$receita->descricao}}"></p>
            
            <fieldset id="etapasReceita">
                <legend>Etapas da receita</legend>
                <p><textarea name="etapas" id="cEtapa" cols="35" rows="5">{{$receita->etapas}}</textarea></p>
            </fieldset>
            
            <p><label for="cNivelDif">Nível de Dificuldade: </label><input type="number" name="nivelDif" id="cNivelDif" min="0" max="5" value="{{$receita->nivelDeDificuldade}}"></p>
            <p><label for="cNivelQuali">Nível de Qualidade: </label><input type="number" name="nivelQuali" id="cNivelQuali" min="0" max="5" value="{{$receita->nivelDeQualidade}}"></p>

            <label>Categoria Registrada: </label>
            <input type="text" value="{{$receita->categoria}}" disabled>
                    
            </input>
            <p><label for="cCat">Categoria: </label>
            <select name="categoria" id="cCat">
                <optgroup>
                    <option value="bolo">Bolos e Tortas Doces</option>
                    <option value="bebida">Bebidas</option>
                    <option value="salgado">Salgados</option>
                    <option value="carne">Carnes</option>
                    <option value="salada">Saladas</option>
                    <option value="sopa">Sopas</option>
                </optgroup>
            </select></p>

        
            <fieldset>
                <legend>Alterar imagem</legend>
                <img style="width: 50%; height: 50%;" src="/receitasImages/{{$receita->foto}}"/>
                <input type="file" name="foto">
            </fieldset>
            
        </fieldset>
        <input type="image" src="<?php echo asset('images/botao-enviar.png')?>" name="tEnviar">
    </form>
</body>
</html>
