<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103119178,
            'Name' => 'Satyo Baskoro',
            'Gender' => 'Male',
            'Phone' => '085641520039',
            'Class' => 'XII RPL 6'
        ];
    }
}
