<?php

namespace App\Http\Controllers;

use App\Models\Manufacture;
use App\Models\News;
use App\Models\Product;
use App\Models\Sector;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slides = Slide::where('is_visible', true)->get();
        $sectors = Sector::inRandomOrder()->take(6)->get();;
        $manufactures  = Manufacture::where('is_visible', true)->inRandomOrder()->get();
        $news  = News::where('is_visible', true)->inRandomOrder()->get();
        $products  = Product::inRandomOrder()->get();
        return view('frontend.index',compact('slides','sectors','manufactures','news', 'products'));
    }




}
