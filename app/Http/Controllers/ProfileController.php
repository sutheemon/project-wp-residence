<?php

namespace App\Http\Controllers;

use Models\User;
use Models\inf_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $id         = Auth::user()->user_id;
        $user_login = Auth::user();
        $users      = DB::table('inf_users')
            ->where('user_id',$id)
            ->get();

        return view('profile.index', compact('users' ,'user_login'));

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $user_login = Auth::user();
            $users      = DB::table('inf_users')
                ->where('user_id',$id)
                ->get();
    
            return view('profile.edit', compact('users','user_login'));

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
// dd($request);
        $request->validate([
            'user_id' => 'required',
            'F_name' => 'required',
            'L_name' => 'required',
            'id_card' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required'
        ]);
          
        $data = DB::table('inf_users')
            ->where('user_id',$id)
            ->update([
                'user_id' => $id,
                'F_name' => $request['F_name'],
                'L_name' => $request['L_name'],
                'id_card' => $request['id_card'],
                'address' => $request['address'],
                'phone_number' => $request['phone_number'],
                'email' => $request['email'],
            
        ]);

        if ($request->hasFile('image')) {
            //  Let's do everything here
            if ($request->file('image')->isValid()) {
                //
                $validated = $request->validate([
                    'user_id' => 'string|max:40',
                    'image' => 'mimes:jpg,jpeg,png|max:1014',
                ]);
                $extension = $request->image->extension();
                $request->image->storeAs('/public', $validated['user_id'].".".$extension);
                $url = Storage::url($validated['user_id'].".".$extension);
               
                $userpic = DB::table('inf_users')
                    ->where('user_id', $id)
                    ->update(['pic' => $url]);
                    
                Session::flash('success', "Success!");
                return redirect('profile');
            }

        }
        
            
        return redirect('profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}