<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::latest()->get();
        return view('admin', ['cars' => $cars]);
    }

    public function formcar()
    {
        return view('addcar');
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
        $cars = new Car();
        $cars->name = $request->input('carname');
        $cars->person = $request->input('person');
        $cars->harga = $request->input('price');
        $image = $request->image->getClientOriginalName();
        $request->image->move(public_path('assets/img'), $image);
        $cars->path = '/assets/img/' . $image;
        $cars->save();
        return redirect()->route('/admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(Request $request)
    {
        Car::where('id', $request->id)->delete();
        return back();
    }
}
