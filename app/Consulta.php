<?php


namespace App;

use Illuminate\Database\Eloquent\Model;


class Consulta extends Model
{
    protected $table = 'consulta';
    public $timestamps = false;
    protected $fillable = [
        'data_hora',
        'evolucao',
        'psicologo_id',
        'paciente_id'

    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

}
