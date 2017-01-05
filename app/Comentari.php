<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentari extends Model
{
    protected $table = 'comentaris';
    protected $fillable = ['id', 'usuari', 'establiment', 'text', 'data', 'hora'];
    protected $visible = ['usuari', 'establiment', 'text', 'data', 'hora'];
    public $timestamps = false;
}
