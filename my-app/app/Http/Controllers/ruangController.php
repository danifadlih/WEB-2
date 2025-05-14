<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\ruang;

class ruangController extends Controller
{
    public function index()

    {

        $ruangs = ruang::all();
        return view('ruang.index', compact('ruangs'));
    }
}
