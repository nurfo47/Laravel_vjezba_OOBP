<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars=DB::table('cars')
        ->get();
        
        return view('cars.index', ['cars'=>$cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands=DB::table('brands')->get();

        return view('cars.add',['brands'=>$brands]);
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
            'name'=> 'required|string|max:255',
        ]);

        DB::table('cars')->insert([
            'name'=>$request->name,
            'year'=> date("Y-m-d"),
            'engine'=>$request->engine,
            'code'=>$request->code,
            'brand'=>$request->brand,
        ]);

        return redirect()->route('cars');
    }

    //delete function for cars
    public function delete(Request $request){
        $id=$request->id;

        Car::destroy($id);

        return redirect()->route('cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id=$request->id;

        $cars=DB::table('cars')->where('id', $id)->get();

        $brands=DB::table('brands')->get();

        return view('cars.edit', ['cars' => $cars, 'brands'=> $brands]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->id;

        $request->validate([
            'name'=> 'required|string|max:255',
            'engine' =>'required|numeric',
        ]);

        $update_query=DB::table('cars')->where('id', $id)->update([
            'name'=>$request->name,
            'year'=> $request->year,
            'engine'=>$request->engine,
            'code'=>$request->code,
            'brand'=>$request->brand,
        ]);

        return redirect()->route('cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
