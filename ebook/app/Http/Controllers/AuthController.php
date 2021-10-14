<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
        return['NIS' => 3103119144,
        'name'      => 'Peter Nathanael Munandar',
        'gender'    => 'Male',
        'phone'     => '081226045131',
        'class'     => 'XII RPL 5'];
    }
}
