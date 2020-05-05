<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Psicologo extends Model
{
    protected $table = 'psicologo';
    public $timestamps = false;
    protected $fillable = [
        'nome',
        'crp',
        'cep',
        'endereco',
        'uf',
        'estado_civil'
    ];

    public function pacientes()
    {
        return $this->hasMany(Paciente::class);
    }

}
