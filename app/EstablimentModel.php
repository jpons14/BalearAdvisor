<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstablimentModel extends Model
{
    protected $table = 'establiments';
    protected $fillable = ['id', 'nom', 'descripcio_cat', 'descripcio_esp', 'horari_cat', 'horar    i_esp', 'poblacio', 'adreca', 'telefon', 'web', 'preu', 'tipus_cuina', 'foto'];
    protected $visible = ['nom', 'descripcio_cat', 'descripcio_esp', 'horari_cat', 'horari_esp', 'poblacio', 'adreca', 'telefon', 'web', 'preu', 'tipus_cuina', 'foto'];
    public $timestamps = FALSE;
}
