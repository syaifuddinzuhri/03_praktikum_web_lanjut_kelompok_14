<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $title = 'Program';
        return view('program', compact('title'));
    }
}