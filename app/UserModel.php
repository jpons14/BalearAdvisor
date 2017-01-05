<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'usuaris';
    protected $fillable = ['id', 'nom', 'email', 'password'];
    protected $visible = ['nom', 'email', 'password'];
    public $timestamps = FALSE;
}
