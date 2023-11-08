<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\History;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id_user = Auth::user()->id;
        $booking = Booking::join('users', 'users.id', '=', 'id_user')->leftJoin('cars', 'cars.id', '=', 'id_car')
            ->where('id_user', $id_user)
            ->select('bookings.id as id', 'cars.name as car_name', 'users.name as user_name', 'cars.person', 'cars.harga', 'users.address', 'days', 'payment_methods')
            ->first();
        return view('transaction', ['transaction' => $booking]);
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
        $id_user = Auth::user()->id;
        $booking = Booking::where('id_user', $id_user)->where('id_car', $request->id)->first();
        if (!$booking) {
            Booking::create([
                'days' => 1,
                'id_user' => $id_user,
                'id_car' => $request->id,
            ]);
            $cars = Car::where('id', $request->id)->update(['is_available' => 0]);

            return back();
        }
        return back()->withErrors('You are not allowed booking other car during you ordered car');
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
    public function destroy($id)
    {
        $booking = Booking::where('id', $id)->first();
        History::create([
            'days' => $booking->days,
            'payment_methods' => $booking->payment_methods,
            'id_user' => $booking->id_user,
            'id_car' => $booking->id_car
        ]);
        Car::where('id', $booking->id_car)->update(['is_available' => 1]);
        $booking = $booking->delete();

        return redirect()->route('/transaction');
    }
}
