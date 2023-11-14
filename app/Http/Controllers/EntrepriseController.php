<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Http\Requests\StoreEntrepriseRequest;
use App\Http\Requests\UpdateEntrepriseRequest;
use App\Models\User;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprises = Entreprise::orderBy('nom')->get();
        return view('entreprise.index', ['entreprises' => $entreprises]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entreprise = new Entreprise();
        return view('entreprise.create', ['entreprise' => $entreprise]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEntrepriseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEntrepriseRequest $request)
    {
        $data = $request->all();
        $entreprise = new Entreprise();
        $entreprise->fill($data);
        $entreprise->save();
        return redirect()->route('entreprise.show', $entreprise);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show(Entreprise $entreprise)
    {
        return $entreprise;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $entreprise)
    {
        return view('entreprise.edit', ['entreprise' => $entreprise]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEntrepriseRequest  $request
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEntrepriseRequest $request, Entreprise $entreprise)
    {
        $data = $request->all();
        $entreprise->fill($data);
        $entreprise->save();
        $entreprise->commodites()->sync($data['commodites']);
        $entreprise->types()->sync($data['types']);
        return redirect()->route('entreprise.show', $entreprise);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entreprise $entreprise)
    {
        //
    }

}
