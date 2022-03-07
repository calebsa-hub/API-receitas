<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Excluir receita</title>
</head>
<body>  
    <form action="{{ route('excluir_receita', ['id' => $receita->id]) }}" method="POST">
        {!!csrf_field()!!}
        <label for="">Tem certeza que deseja excluir esta receita?</label> <br>
        <input type="text" name="nome" value="{{ $receita->nome }}"><br>
        <button>Sim</button>
    </form>
</body>
</html>
