<?php

namespace App\Http\Controllers;

use App\Psicologo;
use App\Paciente;
use App\Http\Requests\PsicologoFormRequest;
use Illuminate\Http\Request;

class PsicologoController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $psicologos = Psicologo::query()->orderBy('nome')->paginate(5);


        $mensagem = $request->session()->get ('mensagem');


        return view('psicologo.index', compact('psicologos', 'mensagem'));
    }

    public function profile(Request $request)
    {
        $psicologo = Psicologo::find($request->id);

        return view('psicologo.profile', compact('psicologo'));
    }


    public function create(){

        return view('psicologo.create');
    }

    public function store(PsicologoFormRequest $request)
    {
        $nome = $request->namePsicologo;
        $senha = $request->nameSenhaPsicologo;
        $crp = $request->nameCrpPsicologo;
        $cep = $request->nameCepPsicologo;
        $endereco = $request->nameEnderecoPsicologo;
        $uf = $request->nameUfPsicologo;
        $estado_civil = $request->nameEstadoCivilPsicologo;

        $psicologo = Psicologo::create([
            'nome'=>$nome,
            'crp'=>$crp,
            'cep'=>$cep,
            'endereco'=>$endereco,
            'uf'=>$uf,
            'estado_civil'=>$estado_civil
        ]);

        $request->session()->flash('mensagem', "Psicologo {$psicologo->nome} ID:{$psicologo->id} incluido com sucesso.");

        return redirect ('/psicologo/index');
    }

    public function getUpdate(Request $request){

        return view('psicologo.update');
    }

    public function update(Request $request)
    {

        $updateCep = $request->cep;
        $updateEndereco = $request->endereco;
        $updateUf = $request->uf;
        $updateEstadoCivil = $request->estado_civil;


        $psicologo = Psicologo::find($request->id);



        $psicologo -> cep = $updateCep;
        $psicologo -> endereco = $updateEndereco;
        $psicologo -> uf = $updateUf;
        $psicologo -> estado_civil = $updateEstadoCivil;



        $psicologo->save();

        $request->session()->flash('mensagem', "Dados pessoais do psicologo {$psicologo->nome} ID:{$psicologo->id} foram atualizados com sucesso.");

        return redirect ('/psicologo/index');

    }

};
