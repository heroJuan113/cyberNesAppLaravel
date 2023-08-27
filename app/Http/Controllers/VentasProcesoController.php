<?php

namespace App\Http\Controllers;

use App\Models\VentasProceso;
use App\Http\Requests\StoreVentasProcesoRequest;
use App\Http\Requests\UpdateVentasProcesoRequest;

class VentasProcesoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVentasProcesoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVentasProcesoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VentasProceso  $ventasProceso
     * @return \Illuminate\Http\Response
     */
    public function show(VentasProceso $ventasProceso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VentasProceso  $ventasProceso
     * @return \Illuminate\Http\Response
     */
    public function edit(VentasProceso $ventasProceso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVentasProcesoRequest  $request
     * @param  \App\Models\VentasProceso  $ventasProceso
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVentasProcesoRequest $request, VentasProceso $ventasProceso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VentasProceso  $ventasProceso
     * @return \Illuminate\Http\Response
     */
    public function destroy(VentasProceso $ventasProceso)
    {
        //
    }
}
