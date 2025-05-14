<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\pegawai;

class pegawaiController extends Controller
{
   public function index()
       
{
   
$pegawaish = pegawai::all();
return view('pegawai.index', compact('pegawaish'));
}
}
