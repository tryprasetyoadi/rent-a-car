<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::latest()->where('is_available', 1)->get();

        return view('rentcar', ['cars' => $cars]);
    }

    public function indexSearch()
    {
        $cars = Car::latest()->where('is_available', 1)->get();

        return view('searchcar', ['cars' => $cars]);
    }

    public function find(Request $request)
    {


        $cars = Car::where('name', 'like', '%' . $request->input('search') . '%')->where('is_available', 1)->get();

        return view('searchcar', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $car = Car::find($id);
        return view('editcar', ['car' => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Request $request)
    {
        $car = Car::find($id);
        if ($request->image) {
            $image = $request->image->getClientOriginalName();
            $request->image->move(public_path('assets/img'), $image);
            $car->update(['path' => '/assets/img/' . $image]);
        }
        $car->update([
            'name' => $request->input('name'),
            'person' => $request->input('person'),
            'harga' => $request->input('price'),

        ]);



        return redirect()->route('/admin');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
