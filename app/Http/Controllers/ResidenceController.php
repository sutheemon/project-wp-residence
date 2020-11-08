<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\type_bill_status;
use Illuminate\Support\Facades\DB;


class ResidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('residence.index');
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
     * @param  \App\Models\residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function show(residence $residence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function edit(residence $residence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, residence $residence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function destroy(residence $residence)
    {
        //
    }
}
