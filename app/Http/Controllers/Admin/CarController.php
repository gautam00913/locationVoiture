<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Category;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars=Car::all();
       return view('admin.cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.cars.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'mark'=>'required',
            'location_price'=>'required',
            'category'=>'required',
            'image'=>'required|image'
        ]);
        $imagePath=$request->image->store('uploads', 'public');
        $date=new \Datetime();
        Car::create([
            'mark'=>$request->mark,
            'location_price'=>$request->location_price,
            'category'=>$request->category,
            'image' =>$imagePath,
            'created_at'=>$date,
            'update_at'=>$date
        ]);
        return redirect()->route('admin_cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car=Car::findOrFail($id);

        return view('admin.cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car=Car::find($id);
        $categories=Category::all();

        return view('admin.cars.edit', compact('car', 'categories'));
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
         $this->validate($request, [
            'mark'=>'required',
            'location_price'=>'required',
            'category'=>'required',
            'image'=>'required|image'
        ]);
        $imagePath=$request->image->store('uploads', 'public');
        $car=Car::findOrFail($id);
        $car->update([
            'mark'=>$request->mark,
            'location_price'=>$request->location_price,
            'category'=>$request->category,
            'update_at'=>new \Datetime()
        ]);
        return redirect()->route('admin_cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::destroy($id);

        return redirect()->route('admin_cars.index');
    }
}
