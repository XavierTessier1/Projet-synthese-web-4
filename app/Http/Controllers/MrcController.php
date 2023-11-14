<?php

namespace App\Http\Controllers;

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
        $mrcs = Mrc::orderBy('nom')->get();
        return view('mrc.index', ['mrcs' => $mrcs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mrc = new Mrc();
        return view('mrc.create', ['mrc' => $mrc]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMrcRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMrcRequest $request)
    {
        $data = $request->all();
        $mrc = new Mrc();
        $mrc->fill($data);
        $mrc->save();
        return redirect()->route('mrc.show', $mrc);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mrc  $mrc
     * @return \Illuminate\Http\Response
     */
    public function show(Mrc $mrc)
    {
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
        return view('mrc.edit', ['mrc' => $mrc]);
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
        $data = $request->all();
        $mrc->fill($data);
        $mrc->save();
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
}
