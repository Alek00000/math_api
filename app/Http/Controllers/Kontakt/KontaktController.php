<?php

namespace App\Http\Controllers\Kontakt;

use App\Http\Controllers\ApiController;
use App\Kontakt;
use Illuminate\Http\Request;

class KontaktController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontakts=Kontakt::all();
        return $this->showAll($kontakts);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [

            'ime' => 'required',
            'grad_id' => 'int|required',
            'razred_id' => 'int|required',
            'email' => 'required',
            'cas' => 'required',
        ];

        $this->validate($request, $rules);

        $newKontakt = Kontakt::create($request->all());
        return $this->showOne($newKontakt, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kontakt  $kontakt
     * @return \Illuminate\Http\Response
     */
    public function show(Kontakt $kontakt)
    {
        return $this->showOne($kontakt);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kontakt  $kontakt
     * @return \Illuminate\Http\Response
     */
    public function edit(Kontakt $kontakt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kontakt  $kontakt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kontakt $kontakt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kontakt  $kontakt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kontakt $kontakt)
    {
        //
    }
}
