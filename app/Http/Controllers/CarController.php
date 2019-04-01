<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		//echo $request->get('car_produced_on');exit;
        $request->validate([
        'car_make'=>'required',
        'car_model'=> 'required',
        'car_produced_on' => 'required'
      ]);
      $car = new Car([
        'make' => $request->get('car_make'),
        'model'=> $request->get('car_model'),
        'produced_on'=> $request->get('car_produced_on')
      ]);
      $car->save();
      return redirect('/cars')->with('success', 'Stock has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $car = Car::find($id);
      return view('cars.show', array('car' => $car));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);

        return view('cars.edit', compact('car'));
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
        //echo $request->get('car_produced_on');exit;
        $request->validate([
        'car_make'=>'required',
        'car_model'=> 'required',
        'car_produced_on' => 'required'
      ]);

      $car = Car::find($id);
      $car->make = $request->get('car_make');
      $car->model = $request->get('car_model');
      $car->produced_on = $request->get('car_produced_on');
      $car->save();

      return redirect('/cars')->with('success', 'Stock has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

		$car = Car::find($id);
		$car->delete();

		return redirect('/cars')->with('success', 'Stock has been deleted Successfully');
    }
}
