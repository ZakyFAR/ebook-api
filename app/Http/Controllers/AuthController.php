<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return ([
            '3103119200',
            'Zaky Fathin Abdur Razaq',
            'Laki-laki',
            '+62 822-2358-4010',
            'XII RPL 6'
        ]);
    }
}
