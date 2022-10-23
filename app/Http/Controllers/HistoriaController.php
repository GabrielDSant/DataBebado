<?php

namespace App\Http\Controllers;

use App\Models\Historia;

use Illuminate\Http\Request;

class HistoriaController extends Controller
{
    public function index(Request $request){
        $InputHistoria = new Historia;
        $InputHistoria->Nome = $request->NomeInput;
        $InputHistoria->Titulo = $request->TituloInput;
        $InputHistoria->TextoHistoria = $request->HistoriaInput;
        $InputHistoria->Cidade = $request ->CidadeInput;
        $InputHistoria->save();

        return redirect('/');

    }

    public function randomHist(){
        $HistRandom = Historia::inRandomOrder()->limit(1)->get()->toJson(JSON_PRETTY_PRINT);
        return response($HistRandom, 200);
    }

    public function deleteHist($id){
        $historia = Historia::findOrfail($id);
        $historia->delete();

        return "História excluida com sucesso !";
    }
}
