<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class PsicologoFormRequest extends FormRequest
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
            'namePsicologo'=>'required|min:5',
            'nameCrpPsicologo'=>'required|min:6',
            'nameCepPsicologo'=>'required|min:8',
            'nameEnderecoPsicologo'=>'required|min:4',
            'nameUfPsicologo'=>'required',
            'nameEstadoCivilPsicologo'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'namePsicologo.required'=>'O campo "Nome" é obrigatório.',
            'namePsicologo.min'=>'O campo "Nome" precisa ter pelo menos 5 caracteres.',

            'nameCrpPsicologo.required'=>'O campo "CRP" é obrigatório.',
            'nameCpfPsicologo.min'=>'O campo "CRP" precisa ter pelo menos 6 caracteres.',


            'nameCepPsicologo.required'=>'O campo "CEP" é obrigatório.',
            'nameCepPsicologo.min'=>'O campo "CEP" precisa ter pelo menos 8 caracteres.',

            'nameEnderecoPsicologo.required'=>'O campo "Endereço" é obrigatório.',
            'nameEnderecoPsicologo.min'=>'O campo "Endereço" precisa ter pelo menos 4 caracteres.',

            'nameUfPsicologo.required'=>'O campo "UF" é obrigatório.',

            'nameEstadoCivilPsicologo.required'=>'O campo "Estado Civil" é obrigatório.',

        ];
    }
}
