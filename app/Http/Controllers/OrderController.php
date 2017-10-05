<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::latest()->paginate(20);
        retun redirect()->route('orders/show',$order);
    }
    public function showOrder($id){
      $order = Order::find($id);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*show create form maybe not nessesary*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $order = new Order;
      $order->product_id = $request->product_id;
      $order->user_id = $request->user_id;
      $order->created_at = $request->created_at;
      $order->arrival_time = $request->arrival_time;
      $order->save();
      // where we go from here
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::latest()->paginate(20);
        retun redirect()->route('orders/show',$order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*show edit form*/
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
      App\Order::where('id', $id)
      ->update(['product_id' => $request->product_id,
                'user_id' => $request->user_id,
                'created_at' => $request->created_at,
                'arrival_time' => $request->arrival_time,
      ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $order = App\Order::where('id', $id)
      $order->delete();
    }
}
