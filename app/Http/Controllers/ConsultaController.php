<?php


namespace App\Http\Controllers;

use App\Http\Requests\ConsultaFormRequest;
use App\Consulta;
use App\Paciente;
use Illuminate\Http\Request;


class ConsultaController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $consultas = Consulta::query()->orderBy('id')->paginate(2);


        $mensagem = $request->session()->get ('mensagem');

        return view('consulta.index', compact('consultas', 'mensagem'));
    }

    public function profile(int $pacienteId)
    {
        $consultas = Paciente::find($pacienteId)->consultas;


        return view('consulta.profile', compact('consultas'));
    }

    public function create(){

        return view('consulta.create');
    }

   public function store(ConsultaFormRequest $request)
    {
        $data_hora = $request->nameDataHora;
        $evolucao = $request->nameEvolucao;
        $paciente_id = $request->nameIdPaciente;

        $consulta = Paciente::find($request->id);

        $consulta->consultas()->create([
            'data_hora' => $data_hora,
            'evolucao' => $evolucao,
            'paciente_id'=>$paciente_id
        ]);

        $request->session()->flash('mensagem', "Consulta do paciente ID:{$consulta->id} nome: {$consulta->nome} incluido com sucesso.");


        return redirect ('/psicologo/index');
    }
}
