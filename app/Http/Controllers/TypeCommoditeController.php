<?php

namespace App\Http\Controllers;

use App\Models\TypeCommodite;
use App\Http\Requests\StoreTypeCommoditeRequest;
use App\Http\Requests\UpdateTypeCommoditeRequest;

class TypeCommoditeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeCommodites = TypeCommodite::orderBy('nom')->get();
        return view('type_commodite.index', ['typeCommodites' => $typeCommodites]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeCommodite = new TypeCommodite();
        return view('type_commodite.create', ['typeCommodite' => $typeCommodite]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTypeCommoditeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeCommoditeRequest $request)
    {
        $data = $request->all();
        $typeCommodite = new TypeCommodite();
        $typeCommodite->fill($data);
        $typeCommodite->save();
        return redirect()->route('type_commodite.show', $typeCommodite);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeCommodite  $typeCommodite
     * @return \Illuminate\Http\Response
     */
    public function show(TypeCommodite $typeCommodite)
    {
        return $typeCommodite;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeCommodite  $typeCommodite
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeCommodite $typeCommodite)
    {
        return view('type_commodite.edit', ['typeCommodite' => $typeCommodite]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypeCommoditeRequest  $request
     * @param  \App\Models\TypeCommodite  $typeCommodite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypeCommoditeRequest $request, TypeCommodite $typeCommodite)
    {
        $data = $request->all();
        $typeCommodite->fill($data);
        $typeCommodite->save();
        return redirect()->route('type_commodite.show', $typeCommodite);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeCommodite  $typeCommodite
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeCommodite $typeCommodite)
    {
        //
    }
}
