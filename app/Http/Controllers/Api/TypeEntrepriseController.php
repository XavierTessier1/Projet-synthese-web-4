<?php

namespace App\Http\Controllers\Api;

use App\Models\TypeEntreprise;
use App\Http\Requests\StoreTypeEntrepriseRequest;
use App\Http\Requests\UpdateTypeEntrepriseRequest;

class TypeEntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeEntreprises = TypeEntreprise::orderBy('nom')->get();
        return $typeEntreprises;
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
     * @param  \App\Http\Requests\StoreTypeEntrepriseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeEntrepriseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeEntreprise  $typeEntreprise
     * @return \Illuminate\Http\Response
     */
    public function show(TypeEntreprise $typeEntreprise)
    {
        return $typeEntreprise;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeEntreprise  $typeEntreprise
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeEntreprise $typeEntreprise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypeEntrepriseRequest  $request
     * @param  \App\Models\TypeEntreprise  $typeEntreprise
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypeEntrepriseRequest $request, TypeEntreprise $typeEntreprise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeEntreprise  $typeEntreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeEntreprise $typeEntreprise)
    {
        //
    }
}
