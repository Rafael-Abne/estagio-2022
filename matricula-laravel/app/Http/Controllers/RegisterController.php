<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
       return view('matricula.matricula');
    }
}
