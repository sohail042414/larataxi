<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    /**
     * Show the contact us page.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Show the services us page.
     *
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
        return view('services');
    }
}