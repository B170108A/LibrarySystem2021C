<?php

namespace App\Http\Controllers;

use App\Models\add;
use Illuminate\Http\Request;

class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('add');
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
     * @param  \App\Models\add  $add
     * @return \Illuminate\Http\Response
     */
    public function show(add $add)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\add  $add
     * @return \Illuminate\Http\Response
     */
    public function edit(add $add)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\add  $add
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, add $add)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\add  $add
     * @return \Illuminate\Http\Response
     */
    public function destroy(add $add)
    {
        //
    }
}
