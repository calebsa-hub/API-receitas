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
                    <h1>Cadastrar nova receita</h1>
                    
                </hgroup>
            </header>
        </article>
    </section>

    <form method="POST" id="fContato" action="{{ route('registrar_receita') }}" enctype="multipart/form-data">
        {!!csrf_field()!!}
        <fieldset id="receita">
            <legend>Receita</legend>
            
            <p><label for="cNome">Nome:</label><input type="text" name="nome" id="cNome" size="20" maxlength="30" placeholder="Ex: Bolo de caco"></p>
            
            <p><label for="cDescricao">Descrição:</label><input type="text" name="descricao" id="cDescricao" placeholder=""></p>
            
            <fieldset id="etapasReceita">
                <legend>Etapas da receita</legend>
                <p><textarea name="etapas" id="cEtapa" cols="35" rows="5" placeholder="Escreva as etapas da receita"></textarea></p>
            </fieldset>
            
            <p><label for="cNivelDif">Nível de Dificuldade: </label><input type="number" name="nivelDif" id="cNivelDif" min="0" max="5" value="0"></p>
            <p><label for="cNivelQuali">Nível de Qualidade: </label><input type="number" name="nivelQuali" id="cNivelQuali" min="0" max="5" value="0"></p>

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
            
        </fieldset>

        

        
        
        <fieldset>
            <legend>Upload de foto</legend>
            <input type="file" name="foto">
        </fieldset>


        <input type="image" src="<?php echo asset('images/botao-enviar.png')?>" name="tEnviar">
    </form>



<footer id="rodape">
    <p>Copyright 2022 - by Caleb Ferreira</p><br/>
</footer>
</div>
    
</body>
</html>