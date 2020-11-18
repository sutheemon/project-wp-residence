<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\trx_bill;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->room_id;

        // dd($room);
        $bill = DB::table('trx_bills')
        ->join('inf_rooms', 'trx_bills.room_id', '=', 'inf_rooms.room_id')
        ->join('type_rooms','inf_rooms.room_type_id', '=', 'type_rooms.room_type_id')
        ->select('trx_bills.*','type_rooms.price_room')
        ->where('inf_rooms.room_id', $id)
        ->get();

        return view('payment.index', ['bills' => $bill]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $data = DB::table('trx_bills')
        // $bill = DB::table(DB::raw('trx_bills,type_unit_prices,type_rooms,inf_rooms,type_bill_statuses'))
            ->join('inf_rooms', 'trx_bills.room_id', '=', 'inf_rooms.room_id')
            ->join('type_bill_statuses', 'trx_bills.bill_status_id', '=', 'type_bill_statuses.bill_status_id')
            ->join('type_unit_prices', 'trx_bills.unit_price_electric_id', '=', 'type_unit_prices.unit_price_id')
            ->join('type_rooms','inf_rooms.room_type_id', '=', 'type_rooms.room_type_id')
            ->where('trx_bills.bill_id', '=', $id)
            ->get();

        return view("payment.edit", compact('data'));
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
        if ($request->hasFile('image')) {
            //  Let's do everything here
            if ($request->file('image')->isValid()) {
                //
                $validated = $request->validate([
                    'name' => 'string|max:40',
                    'image' => 'mimes:jpg,jpeg,png|max:1014',
                ]);
                $extension = $request->image->extension();
                $request->image->storeAs('/public', $validated['name'].".".$extension);
                $url = Storage::url($validated['name'].".".$extension);

                DB::table('trx_bills')
                ->where('bill_id', $id)
                ->update(['pic' => $url , 'bill_status_id' => 'BS003']);

                Session::flash('success', "Success!");
                return redirect()->back();
            }
        }
        // abort(500, 'Could not upload image :(');
        return redirect()->back()->with('alert',"");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
