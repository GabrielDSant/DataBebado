<?php

namespace App\Http\Controllers;

use App\Models\Historia;

use Illuminate\Http\Request;

class HistoriaController extends Controller
{
    public function CriaHist(Request $request){

        if($request->input('_token') != '') {
            //validação dos inputs

            //O Indice é o nome do input

            $regras = [
                'NomeInput' => 'required|min:3|max:40',
                'TituloInput' => 'required|min:5',
                'HistoriaInput' => 'required|min:10',
                'CidadeInput' => 'required'
            ];

                //O :attribute é substituido pelo atributo que conteve um erro de 'required' 
                //Em cima é comporto por atributo e 'condições' se alguma ocorrencia com required der ruim
                //Ele vai buscar o atributo que não respeitou a condição

            $feedback = [
                'required' => 'O campo :attribute deve ser prenchido',
                'NomeInput.min' => 'O campo nome não pode ter menos que 3 caracteres',
                'NomeInput.max' => 'O campo nome não pode conter mais que 40 caracteres',
                'TituloInput.min' => 'O campo titulo não pode conter menos que 5 caracteres',
                'HistoriaInput.min' => 'O campo Historia não pode conter menos que 10 caracteres',
            ];

            $request->validate($regras, $feedback);

            $InputHistoria = new Historia;
            $InputHistoria->Nome = $request->NomeInput;
            $InputHistoria->Titulo = $request->TituloInput;
            $InputHistoria->TextoHistoria = $request->HistoriaInput;
            $InputHistoria->Cidade = $request ->CidadeInput;
            $InputHistoria->save();
        }

        return redirect('/#Form-Hist')->with('envio', 'Envio Feito!');

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
