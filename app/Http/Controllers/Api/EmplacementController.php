<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        return $emplacements;
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
     * @param  \App\Http\Requests\StoreEmplacementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmplacementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emplacement  $emplacement
     * @return \Illuminate\Http\Response
     */
    public function show(Emplacement $emplacement)
    {
        $emplacement->load('fans');
        $emplacement->append("est_aimer");
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
        //
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
        //
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

    public function aimer(Emplacement $emplacement)
    {
        $user = User::find(1);
        $etat = $emplacement->fans()->toggle($user);
        $etat = $etat['attached'];
        $etat = count($etat) > 0;
        $resultat = [
            "action" => "aimer",
            "id" => $emplacement->id,
            "etat" => $etat,
        ];
        return $resultat;
    }
}
