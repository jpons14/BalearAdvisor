<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class Functions
{
    public function isLogged(Request $request){
        $value = $request->session()->all();
        if (isset($value['login']) && $value['login'])
            return true;
        else
            return false;
    }
}