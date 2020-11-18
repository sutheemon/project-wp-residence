<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inf_room;
use App\Models\type_room_status;
use App\Models\inf_user;
use Illuminate\Support\Facades\DB;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('tenant.create')->with('roomId', $id);
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
            'user_id' => 'required',
            'id_card' => 'required',
            'F_name' => 'required',
            'L_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'address' => 'required'
        ]);
        
        inf_user::create([
            'user_id' => $request->user_id,
            'id_card' => $request->id_card,
            'F_name' => $request->F_name,
            'L_name' => $request->L_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'address' => $request->address
        ]);
        
        inf_room::where('room_id', $request->room_id)
          ->update([
              'user_id' => $request->user_id,
              'room_status_id' => 'RS002'
          ]);

        return redirect('residence');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($roomID)
    {
        $userID = DB::table('inf_rooms')
                ->where('room_id', $roomID)
                ->select('inf_rooms.user_id')
                ->get();

        $user = DB::table('inf_users')
                ->where('user_id', $userID[0]->user_id)
                ->get();

        return view('tenant.edit',compact('user', $user))->with('roomId', $roomID);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([ 
            'phone_number' => 'required',
            'email' => 'required',
            'address' => 'required'
        ]);

        inf_user::where('user_id',  $id)
          ->update([
              'phone_number' => $request->phone_number,
              'email' => $request->email,
              'address' => $request->address,
        ]);

        return redirect('residence');
    }

    /**
     * Remove the specified resource from storage.
     *
    //  * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($room_id, $user_id)
    {
        inf_room::where('room_id', $room_id)
          ->update([
              'user_id' => null,
              'room_status_id' => 'RS001'
          ]);

        DB::table('inf_users')->where('user_id',$user_id )->delete();

        return redirect('residence');
    }
}
