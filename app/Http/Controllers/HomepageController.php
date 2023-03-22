<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Travel;
use App\Models\Booking;

class HomepageController extends Controller
{
    public function index()
    {
        $travel = Travel::get();
        return view('pages.guest', [
            'datas' => $travel
        ]);
    }

    public function bookingStore(Request $request)
    {
        $store = Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'travel_id' => $request->travel_id
        ]);

        if($store){
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }
}
