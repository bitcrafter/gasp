<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'curso';

    public function grade()
    {
        return $this->belongsTo('App\Grade');
    }

    public function local()
    {
        return $this->belongsTo('App\Local');
    }

 	public function distrito()
    {
        return $this->belongsTo('App\Distrito');
    }
    
    public function equipe()
    {
        return $this->hasMany('App\CursoEquipe', 'curso_id');
    }

    public function diretor()
    {
        return $this->belongsTo('App\Associado', 'diretor_associado_id');
    }

    public function criador()
    {
        return $this->belongsTo('App\Users');
    }

    public function modulos()
    {
        return $this->hasMany('App\CursoModulo', 'curso_id');
    }

}
