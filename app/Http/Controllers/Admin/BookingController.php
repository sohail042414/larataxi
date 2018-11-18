<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Booking;

class BookingController extends Controller
{
    //

    public function index()
    {

       $list = Booking::all();
        return view('admin.pages.bookings.list',['list'=>$list]);
    }

}