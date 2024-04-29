<?php

namespace App\Http\Controllers;

use App\Models\Helado;
use Illuminate\Http\Request;

class HeladoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Helado::
        return view('helado.index');
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
    public function show(Helado $helado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Helado $helado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Helado $helado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Helado $helado)
    {
        //
    }
}
