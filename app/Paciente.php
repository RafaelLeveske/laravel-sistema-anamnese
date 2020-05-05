<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'paciente';
    public $timestamps = false;
    protected $fillable = [
        'nome',
        'cpf',
        'nome_pai',
        'nome_mae',
        'data_nascimento',
        'cep',
        'endereco',
        'telefone',
        'uf',
        'estado_civil',
        'psicologo_id',
        'queixa_principal',
        'caracteristicas_infancia',
        'caracteristicas_adolescencia',
        'caracteristicas_adulta',
        'relacoes_sociais'
    ];

    public function psicologo()
    {
       return $this->belongsTo(Psicologo::class);
    }

    public function consultas()
    {
        return $this->hasMany(Consulta::class);
    }

}
