<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Booking;
use App\Models\Hotels;
use App\Models\Orders;
use App\Models\Payment;
use App\Models\Places;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class adminController extends Controller
{
    public function login()
    {
        if (session()->has('admin_id')) {
            return redirect()->route('admin.dashboard');
        }
        return view('backend.login');
    }
    public function signin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $admin = Admin::where('email', $request->email)->first();
        if (!$admin) {
            return back()->with('error', 'Invalid Email!');
        }

        if (!Hash::check($request->password, $admin->password)) {
            return back()->with('error', 'Incorrect Password!');
        }

        // store admin login in session
        session(['admin_id' => $admin->id]);

        return redirect()->route('admin.dashboard');
    }
    public function dashboard()
    {
        $hotels=Hotels::count();
        $places=Places::count();
        $users=User::count();
        $payments=Payment::count();
        $bookings=Booking::count();
        return view("backend.index",compact('hotels','places','users','payments','bookings'));
    }

    public function places()
    {
        $data = Places::where("status",'=','0')->get();
        // return $data;
        return view("backend.places.place",["place"=>$data]);
    }
    
    public function add_place()
    {
        return view("backend.places.add-place");
    }

    public function add_new_place(Request $request)
    {
        $request->validate([
            "place_name"=>'required|string|max:255',
            "place_img"=> "required|image|mimes:jpg,jpeg,png",
            "img1"=> "required|image|mimes:jpg,jpeg,png",
            "img2"=> "required|image|mimes:jpg,jpeg,png",
            "img3"=> "required|image|mimes:jpg,jpeg,png",
            "img4"=> "required|image|mimes:jpg,jpeg,png",
            "img5"=> "required|image|mimes:jpg,jpeg,png",
            "place_type"=>"required",
            "short_desc"=>"required|string|max:255"
        ]);

        $images = [];

        foreach (['place_img', 'img1', 'img2', 'img3', 'img4', 'img5'] as $field) {
            if ($request->hasFile($field)) {
                $fileName = time() . '_' . $field . '.' . $request->$field->extension();
                $request->$field->move(public_path('places'), $fileName);
                $images[$field] = 'places/' . $fileName;
            } else {
                $images[$field] = null; // store NULL if no file uploaded
            }
        }


        Places::create([
            'name'       => $request->place_name,
            'image'      => $images['place_img'],
            'img1'       => $images['img1'],
            'img2'       => $images['img2'],
            'img3'       => $images['img3'],
            'img4'       => $images['img4'],
            'img5'       => $images['img5'],
            'unique_id'  => Str::uuid(),
            'type'       => $request->place_type,
            'short_desc' => $request->short_desc,
            'status'     => 0
        ]);

        return redirect()->route('admin.tourist.places')->with('success', 'Place Added Successfully!');
    }
    public function edit_place(string $request)
    {
        $unique_id=$request;
        $place = Places::where('unique_id','=',$unique_id)->get();
        return view('backend.places.edit-place',['place'=>$place]);
    }
    public function update_place(Request $request, $str)
    {
        $request->validate([
            "place_name"  => 'required|string|max:255',
            "place_type"  => 'required',
            "place_image" => 'nullable|image|mimes:png,jpg,jpeg,webp',
            "img1"        => 'nullable|image|mimes:png,jpg,jpeg,webp',
            "img2"        => 'nullable|image|mimes:png,jpg,jpeg,webp',
            "img3"        => 'nullable|image|mimes:png,jpg,jpeg,webp',
            "img4"        => 'nullable|image|mimes:png,jpg,jpeg,webp',
            "img5"        => 'nullable|image|mimes:png,jpg,jpeg,webp',
            "short_desc"  => "required|string|max:255"
        ]);

        $place = Places::where('unique_id', $str)->firstOrFail();

        // List of all image fields in DB
        $imageFields = ['place_image', 'img1', 'img2', 'img3', 'img4', 'img5'];

        foreach ($imageFields as $field) {

            if ($request->hasFile($field)) {

                // Delete old image if exists
                if ($place->$field && file_exists(public_path($place->$field))) {
                    unlink(public_path($place->$field));
                }

                // Upload new image
                $fileName = time() . '_' . $field . '.' . $request->file($field)->extension();
                $request->file($field)->move(public_path('places'), $fileName);

                // Store new path in DB
                $place->$field = 'places/' . $fileName;
            }
        }

        // Update text fields
        $place->name = $request->place_name;
        $place->type = $request->place_type;
        $place->short_desc = $request->short_desc;

        // Save all changes
        $place->save();

        return redirect()->route('admin.tourist.places')->with("success", "Place updated successfully!");
    }
    public function delete_place(string $id)
    {
        Places::where('unique_id', $id)->update([
            "status" => 1
        ]);

        return redirect()->back()->with("success", "Place deleted successfully!");
    }

    public function hotels()
    {
        $hotels = Hotels::where('status','=','0')->with('place')->get();
        return view("backend.hotels.hotel",['hotels'=>$hotels]);
        // return $hotels;
    }
    public function add_hotels()
    {
        $places = Places::where('status','=','0')->get();
        return view("backend.hotels.add-hotel",["places"=>$places]);
        // return $places;
    }
    public function add_new_hotels(Request $request)
    {
        $request->validate([
            "place_name"=>'required|string|max:255',
            "place_id"=>'required',
            "place_img1"=>'required|image|mimes:png,jpg,jpeg,webp',
            "place_img2"=>'required|image|mimes:png,jpg,jpeg,webp',
            "place_img3"=>'required|image|mimes:png,jpg,jpeg,webp',
            "place_img4"=>'required|image|mimes:png,jpg,jpeg,webp',
            "place_img5"=>'required|image|mimes:png,jpg,jpeg,webp',
            "short_desc"=>'required|string|max:255',
            "address"=>'required'
        ]);
        $imageData = [];

        // Loop through img1 to img9
        for ($i = 1; $i <= 5; $i++) {
            $field = "place_img" . $i;

            if ($request->hasFile($field)) {

                $file = $request->file($field);
                $filename = time() . "_{$field}_" . $file->getClientOriginalName();

                // Move to public/hotels folder
                $file->move(public_path("hotels"), $filename);

                $imageData[$field] = $filename;
            } else {
                // Optional images (4–9) may be null
                $imageData[$field] = null;
            }
        }
        // Save to database
        Hotels::create([
            "name" => $request->place_name,
            "place_id"=> $request->place_id,
            "img1" => $imageData["place_img1"],
            "img2" => $imageData["place_img2"],
            "img3" => $imageData["place_img3"],
            "img4" => $imageData["place_img4"],
            "img5" => $imageData["place_img5"],
            "short_desc" => $request->short_desc,
            "address" => $request->address,
            "unique_id"=>Str::uuid(),
            "status"=>0
        ]);

        return redirect()->route('admin.tourist.hotels')->with("success", "Hotels added successfully!");
    }
    public function edit_hotels(string $id)
    {
        $hotel = Hotels::where('unique_id','=',$id)->get();
        $place = Places::where('status','=','0')->get();

        // return [$hotel,$place];
        return view("backend.hotels.edit-hotel",['hotels'=>$hotel,"places"=>$place]);
    }
    public function update_hotels(Request $request, $id)
    {
        $hotel = Hotels::where('unique_id',$id)->firstOrFail();

        $request->validate([
            "place_name" => 'required|string|max:255',
            "place_id"   => 'required',
            "place_img1" => 'nullable|image|mimes:png,jpg,jpeg,webp',
            "place_img2" => 'nullable|image|mimes:png,jpg,jpeg,webp',
            "place_img3" => 'nullable|image|mimes:png,jpg,jpeg,webp',
            "place_img4" => 'nullable|image|mimes:png,jpg,jpeg,webp',
            "place_img5" => 'nullable|image|mimes:png,jpg,jpeg,webp',
            "short_desc" => 'required|string|max:255',
            "address" => 'required'
        ]);


        // Basic fields
        $hotel->name = $request->place_name;
        $hotel->place_id = $request->place_id;
        $hotel->short_desc = $request->short_desc;
        $hotel->address = $request->address;

        // Map input name → DB column
        $image_map = [
            "place_img1" => "img1",
            "place_img2" => "img2",
            "place_img3" => "img3",
            "place_img4" => "img4",
            "place_img5" => "img5",
        ];

        foreach ($image_map as $input => $db) {

            if ($request->hasFile($input)) {

                // Delete old image if exists
                if ($hotel->$db && file_exists(public_path("hotels/" . $hotel->$db))) {
                    unlink(public_path("hotels/" . $hotel->$db));
                }

                // Upload new image
                $filename = time() . '_' . $request->file($input)->getClientOriginalName();
                $request->file($input)->move(public_path("hotels/"), $filename);

                // Update DB column
                $hotel->$db = $filename;
            }
            // If no new file → old image stays
        }
        $hotel->save();

        return redirect()->route('admin.tourist.hotels')->with('success', 'Hotels updated successfully.');
    }
    public function delete_hotels(string $id)
    {
        Hotels::where('unique_id','=',$id)->update(['status'=>'1']);
        return back()->with('success','Hotels deleted successfully');
    }
    public function logout()
    {
        session()->flush();

        // Regenerate session ID for security
        session()->regenerate(true);

        return redirect()->route('admin.login');
    }
}
