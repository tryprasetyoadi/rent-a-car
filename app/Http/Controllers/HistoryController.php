<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;
use App\Models\Rating;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $history = History::join('users', 'users.id', '=', 'id_user')->leftJoin('cars', 'cars.id', '=', 'id_car')
            ->select('histories.id as id', 'users.id as id_user', 'cars.id as id_car', 'cars.name as car_name', 'users.name as user_name', 'cars.person', 'cars.harga', 'users.address', 'days', 'payment_methods')
            ->get()->take(1);

        $rating = Rating::join('users', 'users.id', '=', 'id_user')->leftJoin('cars', 'cars.id', '=', 'id_car')
            ->select('users.id as id_user', 'cars.id as id_car', 'cars.name as car_name', 'users.name as user_name', 'ratings.rating', 'ratings.comment')
            ->get();
        return view('rating', ['histories' => $history, 'ratings' => $rating]);
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

        Rating::create([
            'id_user' => $request->input('id_user'),
            'id_car' => $request->input('id_car'),
            'rating' => $request->input('rating'),
            'comment' => $request->input('comment')
        ]);

        History::where('id_user', $request->input('id_user'))->where('id_car', $request->input('id_car'))->first()->delete();
        return redirect()->route('/booking');
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
    public function destroy(string $id)
    {
        //
    }
}
