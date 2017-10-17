<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salon;
use Carbon\Carbon;

class SalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $salons = Salon::latest()->paginate(20);
      return view("salons.index",compact(['salons']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $salon = new Salon;
      $salon->name = $request->name;
      $salon->address = $request->address;
      $salon->created_at = Carbon::now();
      $salon->updated_at = Carbon::now();
      $salon->save();
      return redirect()->route("salons.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salon = Salon::find($id);
        return view("salons.show",$salon);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salon = Salon::find($id);
        return view('salons.edit',$salon);
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
        $id = $request->input('id');
        Salon::where('id', $id)
        ->update([
          'name' => $request->input('name'),
          'address' => $request->input('address'),
          'updated_at' => Carbon::now(),
        ]);
        return redirect()->route("salons.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $id = $request->input('id');
        foreach($id as $id_salon) {
          DB::table('salons')->where('id', $id_salon)->delete();
        }
        $salons = Salon::paginate(15);
        return $salons->toJson();
    }
}
