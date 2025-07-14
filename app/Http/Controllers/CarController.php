<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $data = request()->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'produced_on' => 'required|date',
        ]);

        Car::create($data);

        return redirect()->route('cars.index')->with('success', 'Car created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
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
     * @return Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
        return view('cars.edit', ['car' => $car]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $data = request()->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'produced_on' => 'required|date',
        ]);

        $car = Car::find($id);
        $car->update($data);

        return redirect()->route('cars.index')->with('success', 'Car updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();

        return redirect()->route('cars.index')->with('success', 'Car deleted successfully.');
    }
}
