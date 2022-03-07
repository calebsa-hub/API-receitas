<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Receitas</title>
    <link rel="stylesheet" href="<?php echo asset('css/estilo.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/form.css')?>" type="text/css">
    
    
</head>

<body>
 
        
    <fieldset>
        <legend>Alterar imagem</legend>
            <a href="{{ url('editarImagem')}}">Editar</a>
            <!--<input type="file" name="foto" value="receitasImages/{{$receita->foto}}">-->
    </fieldset>
        
    
</body>
</html>
