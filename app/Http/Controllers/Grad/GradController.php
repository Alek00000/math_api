<?php

namespace App\Http\Controllers\Grad;

use App\Grad;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class GradController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $grads = Grad::all();
    return $this->showAll($grads);

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grad  $grad
     * @return \Illuminate\Http\Response
     */
    public function show(Grad $grad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grad  $grad
     * @return \Illuminate\Http\Response
     */
    public function edit(Grad $grad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grad  $grad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grad $grad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grad  $grad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grad $grad)
    {
        //
    }
}
