<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user()->id;
        $wishlistBookmark = Car::join('bookmarks', 'bookmarks.id', '=', 'id')->where('bookmarks.id_user', $user);
        $wishlist = Bookmark::join('cars', 'cars.id', '=', 'id_car')->get();
        $cars = Car::latest()->get();
        return view('wishlist', ['wishlist' => $wishlist, 'cars' => $cars, 'bookmark' => $wishlistBookmark]);
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
        $user_id = $request->input('user_id');
        $car_id = $request->input('car_id');
        $class = $request->input('class');

        // Insert the data into the bookmarks table
        $find = Bookmark::where('id_user', $user_id)->where('id_car', $car_id)->first();

        if ($find) {
            return view('wishlist');
        }

        Bookmark::create([
            'id_user' => $user_id,
            'id_car' => $car_id,
            'class' => $class
        ]);
        return redirect('/wishlist');
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
        $bookmark = Bookmark::where('id_user', $request->input('user_id'))->where('id_car', $request->input('car_id'))->delete();
        return back()->with($bookmark);
    }
}
