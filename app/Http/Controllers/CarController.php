<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
   public function showCarsByCategory($category)
    {
        $record=Car::whereCategory($category)->whereState('Libre')->get();
        return view('car.cars')->withCars($record)->withCategory($category);
    }
    public function show($id)
    {
        return Car::whereId($id)->get();
    }
}
