<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsControllers extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about_us');
    }

    public function service()
    {
        return view('services');
    }

    public function product()
    {
        return view('products.show');
    }
}
