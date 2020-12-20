<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function __invoke()
    {
        return view('auth.password');
    }
}
