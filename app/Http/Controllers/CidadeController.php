<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Cidade;
use resources\views;

class CidadeController extends Controller
{
    public function show(){
        $cidades = Cidade::get();
        return  view('cidade',['cidade'=>$cidades]);
    }
    public function index(){
        return  view('cadastro-cidade');
    }
    public function edit($id){
        $cidade = Cidade::find($id);
        return view('cadastro-cidade',['cidade'=>$cidade]);

    }
    public function update(Request $request,$id){ 
        $request->validate(['nome'=>'required']);
        $cidade = Cidade::find($id);
        $cidade ->name = $request->input('nome');
        $cidade -> save();
        return redirect()->route('cidade.lista');

    }
    public function delete($id){ 
        $cidade = Cidade::find($id);
        $cidade -> delete();
        return redirect()->route('cidade.lista');

    }

    public function create(Request $request){
        $request->validate(['nome'=>'required']);
        $cidade = new Cidade();
        $cidade ->name = $request->input('nome');
        $cidade -> save();
        return redirect()->route('cidade.lista');
    }

}
