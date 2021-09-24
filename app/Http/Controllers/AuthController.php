<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'nis'=>3103119174,
            'name'=>'Satyo Baskoro',
            'phone'=>'6281770680555',
            'class'=>'085641520039'
        ];
    }
}