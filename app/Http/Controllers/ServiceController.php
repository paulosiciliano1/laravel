<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Service;
use Illuminate\Http\RedirectResponse;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate(15);
        return view("services/index",compact(['services']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("services/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = New Service;
        $service->name = $request->name;
        $service->save();
        return redirect()->route("services.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);
        return view("services/show",$service);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = App\Service::find($id);
        return view("services.edit",$service);
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
      Service::where('id', $request->input('id'))
      ->update([
        'name' => $request->input('name'),
      ]);
      return redirect()->route("services.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id "could be an array of ints"
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $id = $request->input('id');
        foreach($id as $id_service) {
          DB::table('services')->where('id', $id_service)->delete();
        }
        $services = Service::paginate(15);
        return $services->toJson();
    }
}
