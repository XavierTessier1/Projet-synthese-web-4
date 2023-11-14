<?php

namespace App\Http\Controllers\Api;

use App\Models\Mrc;
use App\Http\Requests\StoreMrcRequest;
use App\Http\Requests\UpdateMrcRequest;
use App\Models\User;

class MrcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mrcs = Mrc::orderBy('nom')->with('entreprises')->get();
        return $mrcs;
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
     * @param  \App\Http\Requests\StoreMrcRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMrcRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mrc  $mrc
     * @return \Illuminate\Http\Response
     */
    public function show(Mrc $mrc)
    {
        $mrc->load('fans');
        $mrc->load('entreprisesList');
        $mrc->append("est_aimer");
        return $mrc;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mrc  $mrc
     * @return \Illuminate\Http\Response
     */
    public function edit(Mrc $mrc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMrcRequest  $request
     * @param  \App\Models\Mrc  $mrc
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMrcRequest $request, Mrc $mrc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mrc  $mrc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mrc $mrc)
    {
        //
    }

    public function aimer(Mrc $mrc)
    {
        $user = User::find(1);
        $etat = $mrc->fans()->toggle($user);
        $etat = $etat['attached'];
        $etat = count($etat) > 0;
        $resultat = [
            "action" => "aimer",
            "id" => $mrc->id,
            "etat" => $etat,
        ];
        return $resultat;
    }
}
