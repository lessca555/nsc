<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
class ViewsControllers extends Controller
{
    public function navbar()
    {
        $barang = barang::all();
        return view('layouts.navbar', compact('barang'));
    }

    public function home()
    {
        $barang = barang::all();
        return view('home', compact('barang'));
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
