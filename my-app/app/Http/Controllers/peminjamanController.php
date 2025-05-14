<?php

namespace App\Http\Controllers;
use App\Models\peminjaman;
use Illuminate\Http\Request;

class peminjamanController extends Controller
{
    public function index()
       
{
   
$peminjamans = peminjaman::all();
return view('peminjaman.index', compact('peminjamans'));
}
}
