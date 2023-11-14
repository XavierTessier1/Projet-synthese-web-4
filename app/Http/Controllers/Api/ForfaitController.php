<?php

namespace App\Http\Controllers\Api;

use App\Models\Forfait;
use App\Http\Requests\StoreForfaitRequest;
use App\Http\Requests\UpdateForfaitRequest;
use App\Models\User;

class ForfaitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forfaits = Forfait::orderBy('nom')->get();
        return $forfaits;
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
     * @param  \App\Http\Requests\StoreForfaitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreForfaitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function show(Forfait $forfait)
    {
        $forfait->load('fans');
        $forfait->append("est_aimer");
        return $forfait;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function edit(Forfait $forfait)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateForfaitRequest  $request
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateForfaitRequest $request, Forfait $forfait)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forfait $forfait)
    {
        //
    }

    public function aimer(Forfait $forfait)
    {
        $user = User::find(1);
        $etat = $forfait->fans()->toggle($user);
        $etat = $etat['attached'];
        $etat = count($etat) > 0;
        $resultat = [
            "action" => "aimer",
            "id" => $forfait->id,
            "etat" => $etat,
        ];
        return $resultat;
    }
}
