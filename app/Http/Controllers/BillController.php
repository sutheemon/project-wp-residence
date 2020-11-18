<?php

namespace App\Http\Controllers;

use App\Models\trx_bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bill = DB::table('trx_bills')
            ->Join('inf_rooms', 'trx_bills.room_id', '=', 'inf_rooms.room_id')
            ->Join('type_bill_statuses', 'trx_bills.bill_status_id', '=', 'type_bill_statuses.bill_status_id')
            ->Join('type_unit_prices', 'trx_bills.unit_price_electric_id', '=', 'type_unit_prices.unit_price_id')
            // ->select('trx_bills', 'trx_bills', 'trx_bills.')
            ->get();
        return view('bill.index', ['bills' => $bill]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("bill.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            "bill_id" => "required",
            "room_id" => "required",
            "unit_water" => "required",
            "unit_electric" => "required"
        ]);

        $unit_water_before = 0;
        $unit_electric_before = 0;

        $unitbefore = DB::table('trx_bills')->where('room_id', $request['room_id'])->first();
        $unitprice = DB::table('type_unit_prices')->orderByDesc('unit_price_id')->get();
        $room = DB::table('inf_rooms')
            ->join('type_rooms', 'inf_rooms.room_type_id', '=', 'type_rooms.room_type_id')
            ->where('room_id', $request['room_id'])->first();

        if ($unitbefore !== null) {
            $electric_price = $unitprice[1]->value_unit * ($request['unit_electric'] - ($unitbefore->unit_electric_after));
            $water_price = $unitprice[0]->value_unit * ($request['unit_water'] - ($unitbefore->unit_water_after));
            $total = $electric_price + $water_price + $room->price_room;

            $unit_water_before = $request['unit_water'] - ($unitbefore->unit_water_after);
            $unit_electric_before = $request['unit_electric'] - ($unitbefore->unit_electric_after);
        } else {
            $electric_price = $unitprice[1]->value_unit * $request['unit_electric'];
            $water_price = $unitprice[0]->value_unit * $request['unit_water'];
            $total = $electric_price + $water_price + $room->price_room;
        }

        // dd($water_price);

        trx_bill::create([
            'bill_id' => $request['bill_id'],
            'room_id' => $request['room_id'],
            'water_price' => $water_price,
            'electric_price' => $electric_price,
            'total_payment' => $total,
            'bill_status_id' => 'BS001',
            'unit_price_water_id' => 'UW',
            'unit_price_electric_id' => 'UE',
            'unit_water_after' => $request['unit_water'],
            'unit_electric_after' => $request['unit_electric'],
            'unit_water_before' => $unit_water_before,
            'unit_electric_before' => $unit_electric_before
        ]);

        return redirect()->route('bill.index');
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
        $data = DB::table('trx_bills')
            // $bill = DB::table(DB::raw('trx_bills,type_unit_prices,type_rooms,inf_rooms,type_bill_statuses'))
            ->join('inf_rooms', 'trx_bills.room_id', '=', 'inf_rooms.room_id')
            ->join('type_bill_statuses', 'trx_bills.bill_status_id', '=', 'type_bill_statuses.bill_status_id')
            ->join('type_unit_prices', 'trx_bills.unit_price_electric_id', '=', 'type_unit_prices.unit_price_id')
            ->join('type_rooms', 'inf_rooms.room_type_id', '=', 'type_rooms.room_type_id')
            ->where('trx_bills.bill_id', '=', $id)
            ->get();
        $unit = DB::table('type_unit_prices')
            ->get();

        // dd($data);

        return view("bill.edit", compact('data','unit'));
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
        $data = DB::table('trx_bills')
            ->where('bill_id', $id)
            ->update(['bill_status_id' => 'BS002']);

        return redirect('bill');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        DB::table('trx_bills')->where('bill_id', $id)->delete();

        return redirect('bill');
    }

    public function updateBill(Request $request, $id)
    {
        // dd($request);
        $request->validate([
            "bill_id" => "required",
            "room_id" => "required",
            "unit_water_after" => "required",
            "unit_electric_after" => "required"
        ]);

        $unitbefore = DB::table('trx_bills')->where('room_id', $request['room_id'])->first();
        $unitprice = DB::table('type_unit_prices')->orderByDesc('unit_price_id')->get();
        $room = DB::table('inf_rooms')
            ->join('type_rooms', 'inf_rooms.room_type_id', '=', 'type_rooms.room_type_id')
            ->where('room_id', $request['room_id'])->first();

        if ($unitbefore !== null) {
            $electric_price = $unitprice[1]->value_unit * ($request['unit_electric_after'] - ($unitbefore->unit_electric_after));
            $water_price = $unitprice[0]->value_unit * ($request['unit_water_after'] - ($unitbefore->unit_water_after));
            $total = $electric_price + $water_price + $room->price_room;
        } else {
            $electric_price = $unitprice[1]->value_unit * $request['unit_electric_after'];
            $water_price = $unitprice[0]->value_unit * $request['unit_water_after'];
            $total = $electric_price + $water_price + $room->price_room;
        }

        trx_bill::where('bill_id',  $id)
          ->update([
            'room_id' => $request['room_id'],
            'water_price' => $water_price,
            'electric_price' => $electric_price,
            'total_payment' => $total,
            'unit_water_after' => $request['unit_water_after'],
            'unit_electric_after' => $request['unit_electric_after']
        ]);

        return redirect('bill');
    }

    public function editBill($id)
    {
        $data = DB::table('trx_bills')
            ->join('inf_rooms', 'trx_bills.room_id', '=', 'inf_rooms.room_id')
            ->join('type_bill_statuses', 'trx_bills.bill_status_id', '=', 'type_bill_statuses.bill_status_id')
            ->join('type_unit_prices', 'trx_bills.unit_price_electric_id', '=', 'type_unit_prices.unit_price_id')
            ->join('type_rooms', 'inf_rooms.room_type_id', '=', 'type_rooms.room_type_id')
            ->where('trx_bills.bill_id', '=', $id)
            ->get();
        $unit = DB::table('type_unit_prices')
            ->get();

        // dd($data);

        return view("bill.editBill", compact('data','unit'));
    }
}
