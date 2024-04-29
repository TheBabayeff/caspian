<?php

namespace App\Http\Controllers;

use App\Models\Manufacture;
use Illuminate\Http\Request;

class ManufactureController extends Controller
{
    public function index()
    {
        $manufactures = Manufacture::where('is_visible', true)->get();

        return view('frontend.manufactures', compact('manufactures'));
    }

    public function show($slug)
    {
        $manufactures = Manufacture::all();
        $manufacture  = Manufacture::where('slug', $slug)->firstOrFail();

        return view('frontend.manufacturesingle', compact('manufacture', 'manufactures'));
    }
}
