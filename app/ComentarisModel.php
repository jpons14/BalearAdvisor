<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComentarisModel extends Model
{
    protected $table = 'comentaris';
    protected $fillable = ['id', 'usuari', 'establiment', 'text', 'data', 'hora'];
    protected $visible = ['id', 'usuari', 'establiment', 'text', 'data', 'hora'];
    public $timestamps = FALSE;
}
