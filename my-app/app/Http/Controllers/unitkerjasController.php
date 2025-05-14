<?php

namespace App\Http\Controllers;

use App\Models\unitkerjas;
use Illuminate\Http\Request;

class unitkerjasController extends Controller
{
   
    public function index()
       
{
   
$units = unitKerjas::all();
return view('unit-kerjas.index', compact('units'));
}

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(unitkerjas $unitkerja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(unitkerjas $unitkerja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, unitkerjas $unitkerja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(unitkerjas $unitkerja)
    {
        //
    }
}
