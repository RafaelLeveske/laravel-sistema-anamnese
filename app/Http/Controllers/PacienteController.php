<?php

namespace App\Http\Controllers;

use App\Consulta;
use App\Http\Requests\PacienteFormRequest;
use App\Paciente;
use App\Psicologo;
use Illuminate\Http\Request;

class PacienteController extends Controller
{

    public function  __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request){
        $pacientes = Paciente::query()->orderBy('namePaciente')->paginate(2);
        $mensagem = $request->session()->get('mensagem');

        return view('paciente.index', compact('pacientes', 'mensagem'));
    }



    public function profile(int $psicologoId, Psicologo $paciente)
    {
        $pacientes = Psicologo::find($psicologoId)->pacientes;
        //$pages = Paciente::paginate(2);
        $cpf = $paciente->pacientes();

        return view('paciente.profile', compact('pacientes', 'cpf'));
    }

    public function create(Request $request){

        return view('paciente.create');
    }

    public function store(PacienteFormRequest $request)
    {
        $nome = $request->namePaciente;
        $cpf = $request->nameCpfPaciente;
        $nome_pai = $request->nameNomePaiPaciente;
        $nome_mae = $request->nameNomeMaePaciente;
        $data_nascimento = $request->nameDataNascimentoPaciente;
        $cep = $request->nameCepPaciente;
        $endereco = $request->nameEnderecoPaciente;
        $telefone = $request->nameTelefonePaciente;
        $uf = $request->nameUfPaciente;
        $estado_civil = $request->nameEstadoCivilPaciente;
        $psicologo_id = $request->namePsicologoIdPaciente;
        $queixa_principal = $request->nameQueixaAnamnese;
        $caracteristicas_infancia = $request->nameInfanciaAnamnese;
        $caracteristicas_adolescencia = $request->nameAdolescenciaAnamnese;
        $caracteristicas_adulta = $request->nameAdultaAnamnese;
        $relacoes_sociais = $request->nameRelacoesAnamnese;



        //$paciente = Paciente::create
        $paciente = Psicologo::find($request->id);

        $paciente->pacientes()->create

        ([
            'nome' => $nome,
            'cpf' => $cpf,
            'nome_pai' => $nome_pai,
            'nome_mae' => $nome_mae,
            'data_nascimento' => $data_nascimento,
            'cep' => $cep,
            'endereco' => $endereco,
            'telefone' => $telefone,
            'uf' => $uf,
            'estado_civil' => $estado_civil,
            'psicologo_id' => $psicologo_id,
            'queixa_principal'=>$queixa_principal,
            'caracteristicas_infancia'=>$caracteristicas_infancia,
            'caracteristicas_adolescencia'=>$caracteristicas_adolescencia,
            'caracteristicas_adulta'=>$caracteristicas_adulta,
            'relacoes_sociais'=>$relacoes_sociais,
        ]);

        $request->session()->flash('mensagem', "Paciente incluido com sucesso.");


        return redirect ('/psicologo/index');
    }


    public function getUpdate(Request $request){

    return view('paciente.update');
}

    public function update(Request $request)
    {
        $updateNome = $request->nome;
        $updateCpf = $request->cpf;
        $updateNomePai = $request->nome_pai;
        $updateNomeMae = $request->nome_mae;
        $updateDataNascimento = $request->data_nascimento;
        $updateCep = $request->cep;
        $updateEndereco = $request->endereco;
        $updateTelefone = $request->telefone;
        $updateUf = $request->uf;
        $updateEstadoCivil = $request->estado_civil;
        $updateQueixaPrincipal = $request->queixa_principal;
        $updateCaracteristicasInfancia = $request->caracteristicas_infancia;
        $updateCaracteristicasAdolescencia = $request->caracteristicas_adolescencia;
        $updateCaracteristicasAdulta = $request->caracteristicas_adulta;
        $updateRelacoesSociais = $request->relacoes_sociais;

        $paciente = Paciente::find($request->id);


        /*$paciente -> nome = $updateNome;
        $paciente -> cpf = $updateCpf;
        $paciente -> nome_pai = $updateNomePai;
        $paciente -> nome_mae = $updateNomeMae;
        $paciente -> data_nascimento = $updateDataNascimento;*/
        $paciente -> cep = $updateCep;
        $paciente -> endereco = $updateEndereco;
        $paciente -> telefone = $updateTelefone;
        $paciente -> uf = $updateUf;
        $paciente -> estado_civil = $updateEstadoCivil;
        /* $paciente -> queixa_principal = $updateQueixaPrincipal;
         $paciente -> caracteristicas_infancia = $updateCaracteristicasInfancia;
         $paciente -> caracteristicas_adolescencia = $updateCaracteristicasAdolescencia;
         $paciente -> caracteristicas_adulta = $updateCaracteristicasAdulta;
         $paciente -> relacoes_sociais = $updateRelacoesSociais;*/


        $paciente->save();

        $request->session()->flash('mensagem', "Dados pessoais do paciente {$paciente->nome} ID:{$paciente->id} foram atualizados com sucesso.");

        return redirect ('/paciente/index');

    }



    public function delete(Request $request)
    {
        $paciente = Paciente::find($request->id);
        $paciente->consultas->each(function (Consulta $consulta){
           $consulta->delete();
        });

        $paciente->delete();
        //Paciente::destroy($request->id);

        $request->session()->flash('mensagem', "Paciente excluido com sucesso.");
        return redirect ('/paciente/index');
    }

};
