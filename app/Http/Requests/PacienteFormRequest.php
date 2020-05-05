<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'namePaciente' => 'required|min:5',
            'nameCpfPaciente' => 'required|min:11',
            'nameNomePaiPaciente'=>'required|min:5',
            'nameNomeMaePaciente'=>'required|min:5',
            'nameDataNascimentoPaciente'=>'required',
            'nameCepPaciente'=>'required|min:8',
            'nameEnderecoPaciente'=>'required|min:4',
            'nameTelefonePaciente'=>'required|min:10',
            'nameUfPaciente'=>'required',
            'nameEstadoCivilPaciente'=>'required',
            'namePsicologoIdPaciente'=>'required',
            'nameQueixaAnamnese'=>'required',
            'nameInfanciaAnamnese'=>'required',
            'nameAdolescenciaAnamnese'=>'required',
            'nameAdultaAnamnese'=>'required',
            'nameRelacoesAnamnese'=>'required'
        ];
    }

    public function messages()
    {
       return [
           'namePaciente.required'=>'O campo "Nome" é obrigatório.',
           'namePaciente.min'=>'O campo "Nome" precisa ter pelo menos 5 caracteres.',

           'nameCpfPaciente.required'=>'O campo "CPF" é obrigatório.',
           'nameCpfPaciente.min'=>'O campo "CPF" precisa ter pelo menos 11 caracteres.',

           'nameNomePaiPaciente.required'=>'O campo "Nome do Pai" é obrigatório.',
           'nameNomePaiPaciente.min'=>'O campo "Nome do Pai" precisa ter pelo menos 5 caracteres.',

           'nameNomeMaePaciente.required'=>'O campo "Nome da Mãe" é obrigatório.',
           'nameNomeMaePaciente.min'=>'O campo "Nome da Mãe" precisa ter pelo menos 5 caracteres.',

           'nameDataNascimentoPaciente.required'=>'O campo "Data de Nascimento" é obrigatório.',

           'nameCepPaciente.required'=>'O campo "CEP" é obrigatório.',
           'nameCepPaciente.min'=>'O campo "CEP" precisa ter pelo menos 8 caracteres.',

           'nameEnderecoPaciente.required'=>'O campo "Endereço" é obrigatório.',
           'nameEnderecoPaciente.min'=>'O campo "Endereço" precisa ter pelo menos 4 caracteres.',

           'nameTelefonePaciente.required'=>'O campo "Telefone" é obrigatório.',
           'nameTelefonePaciente.min'=>'O campo "Telefone" precisa ter pelo menos 10 caracteres.',

           'nameUfPaciente.required'=>'O campo "UF" é obrigatório.',

           'nameEstadoCivilPaciente.required'=>'O campo "Estado Civil" é obrigatório.',

           'namePsicologoIdPaciente.required'=>'O campo "ID Psicologo" é obrigatório.',

           'nameQueixaAnamnese.required'=>'O campo "Queixa Principal" é obrigatório.',

           'nameInfanciaAnamnese.required'=>'O campo "Características da Infância" é obrigatório.',

           'nameAdolescenciaAnamnese.required'=>'O campo "Características da Adolescência" é obrigatório.',

           'nameAdultaAnamnese.required'=>'O campo "Características da Vida Adulta" é obrigatório.',

           'nameRelacoesAnamnese.required'=>'O campo "Relações Sociais" é obrigatório.',
       ];
    }
}
