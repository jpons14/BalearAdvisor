<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipusCuinaModel extends Model
{
    protected $table = 'tipus_cuina';
    protected $fillable = ['id', 'nom'];
    protected $visible = ['nom'];
    public $timestamps = FALSE;
}
