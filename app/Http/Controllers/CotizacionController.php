<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCotizacionRequest;
use App\Http\Requests\UpdateCotizacionRequest;
use App\Models\Cotizacion;

class CotizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreCotizacionRequest $request)
    {
        $row = new Cotizacion;

        $row->directorie_id =   $request->directorie_id;
        $row->name =            $request->name;
        $row->company =         $request->company;
        $row->phone =           $request->phone;
        $row->email =           $request->email;
        $row->message =         $request->message;

        $row->save();

        return redirect()->back()->with('success', 'Nos pondremos en contacto contigo en un máximo de 24 horas.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cotizacion $cotizacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cotizacion $cotizacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCotizacionRequest $request, Cotizacion $cotizacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cotizacion $cotizacion)
    {
        //
    }
}
