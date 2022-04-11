<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\Service;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function registerPage(Request $request) {
        return view ('seller.register');
    }

    public function index() {
        $data = Service::where("seller_id", "=", auth()->user()->seller->id)->orderby("created_at", "DESC")->get();

        return view ('seller.index', compact('data'));
    }

    public function profile() {
        return view ('seller.profile');
    }

    public function add(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|min:3',
            'city' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|digits_between:10,14',
        ]);

        $seller = new Seller();
        $seller->name = $data['name'];
        $seller->city = $data['city'];
        $seller->address = $data['address'];
        $seller->phone = $data['phone'];
        $seller->user_id = auth()->user()->id;
        $seller->reputation_point = 0;
        $seller->created_at = now();

        if($request->profile_picture) {
            $extension = $request->profile_picture->extension();
            // $filename = $request->profile_picture->getClientOriginalName();
            $filename = now()->timestamp.".".$extension;
            $request->profile_picture->move(public_path('uploads'), $filename);

            $seller->image = $filename;
        }
        $seller->save();

        return redirect('/seller');
    }
}
