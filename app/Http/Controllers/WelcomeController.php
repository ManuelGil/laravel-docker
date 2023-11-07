<?php

namespace App\Http\Controllers;

use App\Models\Directorio;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
