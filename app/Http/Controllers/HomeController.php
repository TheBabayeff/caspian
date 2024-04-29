<?php

namespace App\Http\Controllers;

use App\Models\Manufacture;
use App\Models\News;
use App\Models\Product;
use App\Models\RequestCall;
use App\Models\Sector;
use App\Models\Slide;
use App\Models\User;
use App\Notifications\RequestCallNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    public function index()
    {
        $slides = Slide::where('is_visible', true)->get();
        $sectors = Sector::take(6)->get();;
        $manufactures  = Manufacture::where('is_visible', true)->take(5)->get();
        $news  = News::where('is_visible', true)->inRandomOrder()->get();
        $products  = Product::inRandomOrder()->get();
        return view('frontend.index',compact('slides','sectors','manufactures','news', 'products'));
    }

    public function thankyou()
    {
        return view('frontend.thankyou');
    }

    public function about()
    {
        return view('frontend.components.about');
    }
    public function requestCall(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'description' => 'string',

        ]);

        $admins = User::all();
        Notification::send($admins, new RequestCallNotification($validated));
        $save = RequestCall::create($validated);
        if($save)
        {
            return view('frontend.thankyou')->with('success', 'Müraciətiniz müvəffəqiyyətlə göndərildi');
        }

    }



}
