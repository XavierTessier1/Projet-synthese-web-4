<?php

namespace App\Http\Controllers\Api;

use App\Models\Hebergement;
use App\Http\Requests\StoreHebergementRequest;
use App\Http\Requests\UpdateHebergementRequest;
use App\Models\User;

class HebergementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hebergements = Hebergement::orderBy('nom')->get();
        return $hebergements;
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
     * @param  \App\Http\Requests\StoreHebergementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHebergementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hebergement  $hebergement
     * @return \Illuminate\Http\Response
     */
    public function show(Hebergement $hebergement)
    {
        $hebergement->load('fans');
        $hebergement->append("est_aimer");
        return $hebergement;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hebergement  $hebergement
     * @return \Illuminate\Http\Response
     */
    public function edit(Hebergement $hebergement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHebergementRequest  $request
     * @param  \App\Models\Hebergement  $hebergement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHebergementRequest $request, Hebergement $hebergement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hebergement  $hebergement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hebergement $hebergement)
    {
        //
    }

    public function aimer(Hebergement $hebergement)
    {
        $user = User::find(1);
        $etat = $hebergement->fans()->toggle($user);
        $etat = $etat['attached'];
        $etat = count($etat) > 0;
        $resultat = [
            "action" => "aimer",
            "id" => $hebergement->id,
            "etat" => $etat,
        ];
        return $resultat;
    }
}
