<?php

namespace App\Http\Controllers;

use App\Models\Emplacement;
use App\Http\Requests\StoreEmplacementRequest;
use App\Http\Requests\UpdateEmplacementRequest;
use App\Models\User;

class EmplacementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emplacements = Emplacement::orderBy('nom')->get();
        return view('emplacement.index', ['emplacements' => $emplacements]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emplacement = new Emplacement();
        return view('emplacement.create', ['emplacement' => $emplacement]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmplacementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmplacementRequest $request)
    {
        $data = $request->all();
        $emplacement = new Emplacement();
        $emplacement->fill($data);
        $emplacement->save();
        return redirect()->route('emplacement.show', $emplacement);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emplacement  $emplacement
     * @return \Illuminate\Http\Response
     */
    public function show(Emplacement $emplacement)
    {
        return $emplacement;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emplacement  $emplacement
     * @return \Illuminate\Http\Response
     */
    public function edit(Emplacement $emplacement)
    {
        return view('emplacement.edit', ['emplacement' => $emplacement]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmplacementRequest  $request
     * @param  \App\Models\Emplacement  $emplacement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmplacementRequest $request, Emplacement $emplacement)
    {
        $data = $request->all();
        $emplacement->fill($data);
        $emplacement->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emplacement  $emplacement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emplacement $emplacement)
    {
        //
    }
}
