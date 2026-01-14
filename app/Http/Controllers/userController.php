<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Hotels;
use App\Models\Payment;
use App\Models\Places;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class userController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            "name1"=>"required|string|max:150",
            "age1"=>"required|numeric",
            "name2"=>"required|string|max:150",
            "age2"=>"required|numeric",
            "contact"=>"required|numeric",
            "email"=>"nullable|email",
            "address"=>"required|string|max:255",
            "userimage"=>"required|image|mimes:png,jpg,jpeg,webp",
            "childname"=>"nullable|array",
            "childage"=>"nullable|array"
        ],
            [
                "name1.required"     => "Please enter Person 1 name.",
                "name1.string"       => "Person 1 name must be text.",

                "age1.required"      => "Please enter Person 1 age.",
                "age1.numeric"       => "Person 1 age must be a number.",

                "name2.required"     => "Please enter Person 2 name.",
                "name2.string"       => "Person 2 name must be text.",

                "age2.required"      => "Please enter Person 2 age.",
                "age2.numeric"       => "Person 2 age must be a number.",

                "contact.required"   => "Please enter a valid contact number.",
                "contact.numeric"    => "Contact number must contain only digits.",

                "email.email"        => "Please enter a valid email address.",

                "address.required"   => "Residential address is required.",

                "userimage.required" => "Please upload a photo.",
                "userimage.image"    => "File must be an image.",
                "userimage.mimes"    => "Allowed image formats: PNG, JPG, JPEG, WEBP.",

                "childname.*.string" => "Child name must be text.",
                "childage.*.numeric" => "Child age must be a number."
            ]
    );
        // Upload image
        $imageName = null;
        if ($request->hasFile('userimage')) {
            $imageName = time().'_'.$request->userimage->getClientOriginalName();
            $request->userimage->move(public_path('users'), $imageName);
        }
        $user = User::create([
            "unique_id"=>Str::uuid(),
            "firstusername"=>$request->name1,
            "secondusername"=>$request->name2,
            "firstuserage"=>$request->age1,
            "seconduserage"=>$request->age2,
            "email"=>$request->email ?? null,
            "mobile"=>$request->contact,
            "address"=>$request->address,
            "firstchildname"=>$request->childname[0] ?? null,
            "firstchildage"=>$request->childage[0] ?? null,
            "secondchildname"=>$request->childname[1] ?? null,
            "secondchildage"=>$request->childage[1] ?? null,
            "thirdchildname"=>$request->childname[2] ?? null,
            "thirdchildage"=>$request->childage[2] ?? null,
            "fourthchildname"=>$request->childname[3] ?? null,
            "fourthchildage"=>$request->childage[3] ?? null,
            "userimage"=> 'users/'.$imageName,
        ]);
        Payment::create([
            "unique_id"=>Str::uuid(),
            "user_id"=>$user->unique_id,
            "pay_date"=>null,
            "amount"=>null,
        ]);
        return back()->with('success', 'Registration Successfully!');
    }
    public function payment()
    {
        return view("frontend.payment");
    }
    public function users()
    {
        $users = User::where('status','0')->get();
        return view("backend.users.users",compact('users'));
    }
    
    public function detail_user(string $id)
    {
        $details=User::where('unique_id',$id)->first();
        return view('backend.users.details',compact('details'));
    }
    public function delete_users(string $id)
    {
        User::where('unique_id',$id)->update(['status'=>'1']);
        return back()->with('success','User Deleted Successfully');
    }
    public function all_payments()
    {
        $paids = Payment::with('users')->get();
        return view("backend.payments.payment",compact('paids'));
    }
    public function edit_payments(string $id)
    {
        $paid_users = Payment::where('unique_id',$id)->with('users')->get();
        return view("backend.payments.edit-payments",compact('paid_users'));
    }
    public function update_payments(string $id,Request $request)
    {
        $request->validate([
            "paid_date"=>"required|date",
            "amount"=>"required|numeric",
            "status"=>"required",
            "paymode"=>"required|string"
        ]);
        Payment::where('unique_id',$id)->update([
            'pay_date'=>$request->paid_date,
            "amount"=>$request->amount,
            "status"=>$request->status,
            "paymode"=>$request->paymode,
        ]);
        return redirect()->route('admin.all.payments')->with('success','Payments Updated Successfully');
    }
    public function download(string $id)
    {
        $receipt = Payment::where('unique_id',$id)->with('users')->get();
        return view('backend.payments.receipt',compact('receipt'));
    }
    public function card_download(string $id)
    {
        $user = User::where('unique_id',$id)->first();

        return view('backend.users.card',compact('user'));
    }
    public function bookings()
    {
        $booking_user = Booking::with(['users','hotels'])->get();
        return view("backend.bookings.booking",compact('booking_user'));
    }
    public function add_booking(string $id)
    {
        $book=User::where('unique_id',$id)->first();
        $hotels=Hotels::where('status','0')->get();
        return view("backend.bookings.add-booking",compact('book','hotels'));
    }
    public function insert_booking(Request $request,string $id)
    {
        $request->validate([
            "hotel"=>"required",
            "person_name"=>"required|string|max:255",
            "mobile"=>"required",
            "duration"=>"required",
            "book_date"=>"required"
        ]);
        Booking::create([
            "unique_id"=>Str::uuid(),
            "user_id"=>$id,
            "hotel_id"=>$request->hotel,
            "book_date"=>$request->book_date,
            "duration"=>$request->duration
        ]);
        return back()->with("success",'Booking Successfull');
    }
    public function update_booking(string $id,Request $request)
    {
        $request->validate([
            "status"=>"required",
        ]);
        Booking::where("unique_id",$id)->update(["status"=>1]);
        return back()->with("success","Status Updated Successfull");
    }
    public function delete_booking(string $id)
    {
        Booking::where("unique_id",$id)->delete();
        return back()->with("success","Booking Deleted Successfully");
    }
}
