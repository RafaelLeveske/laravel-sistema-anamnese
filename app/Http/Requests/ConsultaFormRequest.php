<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class ConsultaFormRequest extends FormRequest
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
            'nameDataHora'=>'required',
            'nameEvolucao'=>'required',
            'nameIdPaciente'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'nameDataHora.required'=>'O campo "Data e Hora de Entrada e Saída do Paciente" é obrigatório.',

            'nameEvolucao.required'=>'O campo "Evolução" é obrigatório.',

            'nameIdPaciente.required'=>'O campo "ID Paciente" é obrigatório.',

        ];
    }
}
