<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use App\Models\Places;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function home()
    {
        $sea_places = Places::where('status','0')->where('type','sea')->get();
        $religious_places = Places::where('status','0')->where('type','religious')->get();
        $forest_places = Places::where('status','0')->where('type','forest')->get();
        $hill_places = Places::where('status','0')->where('type','hill')->get();
        $hotel_with_place = Places::where('status','=','0')->with('hotels')->inRandomOrder()
            ->limit(3)
            ->get();
            // return $hotel_with_place;
        return view('frontend.index',['places'=>$hotel_with_place,'sea'=>$sea_places,'religious'=>$religious_places,'forest'=>$forest_places,'hill'=>$hill_places]);
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function gallery()
    {
        $gallery = Places::where('status','0')->get();
        return view('frontend.gallery',compact('gallery'));
        // return $gallery;
    }
    public function membership()
    {
        return view('frontend.membership');
    }
    public function destination()
    {
        $place=Places::where('status','=','0')->get();
        // return $place;
        return view('frontend.destination',['places'=>$place]);
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function details(string $id)
    {
        $hotel = Hotels::where('unique_id','=',$id)->get();
        return view('frontend.details',['hotels'=>$hotel]);
    }
    public function register()
    {
        return view('frontend.register');
    }
    public function hotels()
    {
        $place_with_hotels = Places::where('status', '=', '0')->with('hotels')->get();
        return view("frontend.hotels", ['places' => $place_with_hotels]);
    }
}   
