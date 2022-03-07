<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Receita;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ReceitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $receitas = Receita::all();
        return view('receitas', compact('receitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inicio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        if($request->hasFile('foto') && $request->file('foto')->isValid()){
            
            
            $extension = $request->foto->getClientOriginalExtension();
            $nameFoto = $request->nome . '.' . $extension;
            $request->file('foto')->move(public_path('receitasImages'), $nameFoto);
            
        }
        //cadastro de nova receita da vovó
        Receita::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'etapas' => $request->etapas,
            'nivelDeDificuldade' => $request->nivelDif,
            'nivelDeQualidade' => $request->nivelQuali,
            'categoria' => $request->categoria,
            'foto' => $nameFoto
            
        ]);
        //dd($request->file('foto'));
        echo '<script>alert("A receita foi cadastrada com sucesso!"); </script>';
        return view('inicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function editarImagem($id)
    {
        $receita = Receita::findOrFail($id);
        return view('editarImagem', ['receita' => $receita]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $receita = Receita::findOrFail($id);
        return view('editar', ['receita' => $receita]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $receita = Receita::findOrFail($id);
        


        if($request->hasFile('foto')){

            //if(File::exists(public_path('receitasImages'), $receita->nome)){
            //    File::delete(public_path('receitasImages').$receita->nome);
            //}

            $extension = $request->foto->getClientOriginalExtension();
            $nameFoto = $request->nome . '.' . $extension;
            $request->file('foto')->move(public_path('receitasImages'), $nameFoto);
            
        }
        /*
        if(File::exists(public_path('receitasImages'), $receita->nome)){
            File::delete(public_path('receitasImages').$receita->nome);
        }
        //$destino = public_path('receitasImages');
        //if($request->hasFile('foto')){
            
        //    if(File::exists($destino)){
        //        File::delete($destino);
            //}
        $file = $request->foto;
        $extension = $file->getClientOriginalExtension();
        $nameFoto = $request->nome . '.' . $extension;
        $request->file('foto')->move(public_path('receitasImages'), $nameFoto);
            
        //}*/


        //edição receita da vovó
        $receita->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'etapas' => $request->etapas,
            'nivelDeDificuldade' => $request->nivelDif,
            'nivelDeQualidade' => $request->nivelQuali,
            'categoria' => $request->categoria,
            'foto' => $nameFoto
        ]);
        echo '<script>alert("A receita foi atualizada com sucesso!"); </script>';
        return view('editar', ['receita' => $receita]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function delete($id)
    {
        $receita = Receita::findOrFail($id);
        return view('delete', ['receita' => $receita]);
    }*/

    public function destroy($id)
    {
        $receita = Receita::findOrFail($id);
        $receita->delete();
        //$destino = public_path('receitasImages').$receita->foto;

        
        File::delete('receitasImages/'.$receita->foto);
        

        echo '<script>alert("A receita foi excluida com sucesso!"); </script>';
        return redirect()->back()->with('status','Deletado com sucesso!');
    }
}
