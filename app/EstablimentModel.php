<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstablimentModel extends Model
{
    protected $table = 'establiments';
    protected $fillable = ['id', 'nom', 'descripcio_cat', 'descripcio_esp', 'poblacio', 'adreca', 'telefon', 'web', 'preu', 'tipus_cuina'];
    protected $visible = ['nom', 'descripcio_cat', 'descripcio_esp', 'poblacio', 'adreca', 'telefon', 'web', 'preu', 'tipus_cuina'];
    public $timestamps = FALSE;
}
