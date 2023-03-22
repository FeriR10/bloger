<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Booking;
use App\Models\Travel;

use DataTables;

class BookingController extends Controller
{
    public function index()
    {
        return view('pages.admin.booking.index');
    }

    public function data()
    {
        $booking = Booking::get();
        // dd($booking[2]);?
        return DataTables::of($booking)->addColumn('phone', function($row)
        {
            $jumlahKarakter = strlen($row->phone);
            $phone = substr($row->phone, 1, $jumlahKarakter-1);
            return '62'.$phone;
        })->addColumn('travel', function($row)
        {
            $travel = Travel::withTrashed()->find($row->travel_id);
            $data['id'] = $travel['id'];
            $data['judul'] = $travel['judul'];
            $data['harga'] = $travel['harga'];
            return $data;
        })->addColumn('created_at', function($row)
        {
            return $row->created_at->format('d/m/Y H:i:s');
        })->addIndexColumn()->make(true);
    }

    public function destroy()
    {
        
    }
}
