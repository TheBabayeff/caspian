<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use Illuminate\Http\Request;

class SectorController extends Controller
{
    public function index()
    {
        $sectors = Sector::all();

        return view('frontend.sectors', compact('sectors'));
    }

    public function show($slug)
    {
        $sectors = Sector::all();
        $sector  = Sector::where('slug', $slug)->firstOrFail();

        return view('frontend.sectorsingle', compact('sector', 'sectors'));
    }
}
