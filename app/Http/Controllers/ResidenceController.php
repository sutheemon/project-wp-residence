<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inf_room;
use App\Models\type_room_status;
use App\Models\inf_user;
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
        $rooms = DB::table('inf_rooms')
                ->leftJoin('inf_users', 'inf_rooms.user_id', '=', 'inf_users.user_id')
                ->select('inf_rooms.*', 'inf_users.F_name', 'inf_users.L_name')
                ->get();

        return view('residence.index', compact('rooms', $rooms));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('residence.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([ 
            'room_id' => 'required',
            'room_build' => 'required',
            'room_floor' => 'required',
            'room_type_id' => 'required',
            'room_status_id' => 'required'
        ]);

        inf_room::create([
            'room_id' => $request->room_id,
            'room_build' => $request->room_build,
            'room_floor' => $request->room_floor,
            'room_type_id' => $request->room_type_id,
            'room_status_id' => $request->room_status_id,
            'user_id' => $request->user_id
        ]);

        return redirect('residence');
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
    public function edit($residence)
    {
        $room = DB::table('inf_rooms')
                ->where('room_id', $residence)
                ->get();

        // $room = $room[0];
        return view('residence.edit', compact('room', $room));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $residence)
    {
        $request->validate([ 
            'room_id' => 'required',
            'room_build' => 'required',
            'room_floor' => 'required',
            'room_type_id' => 'required',
            'room_status_id' => 'required'
        ]);

        inf_room::where('room_id',  $residence)
          ->update([
              'room_id' => $residence,
              'room_build' => $request->room_build,
              'room_floor' => $request->room_floor,
              'room_type_id' => $request->room_type_id,
              'room_status_id' => $request->room_status_id,
              'user_id' => $request->user_id
        ]);

        return redirect('residence');
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