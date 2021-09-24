<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'nis'=>3103119174,
            'name'=>'Satyo Baskoro',
            'phone'=>'085641520039',
            'class'=>'6281770680555'
        ];
    }
}