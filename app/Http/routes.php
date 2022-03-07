<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('inicio');
});

Route::get('cadastro', 'ReceitasController@create');
Route::post('cadastro', 'ReceitasController@store')->name('registrar_receita');
Route::post('editarImagem/{id}', 'ReceitasController@show')->name('editar_imagem');
Route::get('editar/{id}', 'ReceitasController@edit');
Route::post('editar/{id}', 'ReceitasController@update')->name('editar_receita');
Route::get('excluir/{id}', 'ReceitasController@destroy')->name('excluir_receita');
//Route::post('excluir/{id}', 'ReceitasController@destroy')->name('excluir_receita');
Route::get('receitas', 'ReceitasController@index')->name('listar_receitas');

/*
//rota de cadastro da receita
Route::post('/cadastrarReceita', function (Request $request) {
    
	//cadastro de nova receita da vovó
    Receita::create([
    	'nome' => $request->nome,
    	'descricao' => $request->descricao,
    	'etapas' => $request->etapas,
    	'nivelDeDificuldade' => $request->nivelDif,
    	'nivelDeQualidade' => $request->nivelQuali,
    	'categoria' => $request->categoria
    ]);

    echo "Receita cadastrada com sucesso!";
});

//rota de leitura da receita
Route::get('/verReceita/{id}', function ($id) {
    
    $receita = Receita::find($id);
    return view('ver', ['receita' => $receita]);
	
});

//rota de atualização da receita
Route::get('/editarReceita/{id}', function ($id) {
    
    $receita = Receita::find($id);
    return view('editar', ['receita' => $receita]);
	
});
Route::post('/editarReceita', function (Request $request, $id) {
    

    $receita = Receita::find($id);
	//cadastro de nova receita da vovó
    $receita->update([
    	'nome' => $request->nome,
    	'descricao' => $request->descricao,
    	'etapas' => $request->etapas,
    	'nivelDeDificuldade' => $request->nivelDif,
    	'nivelDeQualidade' => $request->nivelQuali,
    	'categoria' => $request->categoria
    ]);

    echo "Receita atualizada com sucesso!";
});


//exclui receita
Route::get('/excluirReceita', function ($id) {
    

    $receita = Receita::find($id);
	$receita->delete();

    echo "Receita excluída do banco de dados!";
});*/