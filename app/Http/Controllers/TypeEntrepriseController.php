<?php

namespace App\Http\Controllers;

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
        return view('type_entreprise.index', ['typeEntreprises' => $typeEntreprises]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeEntreprise = new TypeEntreprise();
        return view('type_entreprise.create', ['typeEntreprise' => $typeEntreprise]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTypeEntrepriseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeEntrepriseRequest $request)
    {
        $data = $request->all();
        $typeEntreprise = new TypeEntreprise();
        $typeEntreprise->fill($data);
        $typeEntreprise->save();
        return redirect()->route('type_entreprise.show', $typeEntreprise);
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
        return view('type_entreprise.edit', ['typeEntreprise' => $typeEntreprise]);
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
        $data = $request->all();
        $typeEntreprise->fill($data);
        $typeEntreprise->save();
        return redirect()->route('type_entreprise.show', $typeEntreprise);
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
