<?php

namespace App\Http\Controllers;

use App\Models\GardenOffer;
use Illuminate\Http\Request;

class GardenOfferController extends Controller
{
    public function add(Request $request, $id){
        $offer = GardenOffer::where("seller_id", "=", auth()->user()->seller->id)->where("design_id", "=", $id)->first();
        if($offer == null) {
            $offer = new GardenOffer();
            $offer->design_id = $id;
            $offer->seller_id = auth()->user()->seller->id;
            //TODO: bkin price  ga statis
            $offer->price = 1000000;
            $offer->save();
        }
        return redirect()->back();
    }

    public function remove($id){
        $offer = GardenOffer::where("seller_id", "=", auth()->user()->seller->id)->where("design_id", "=", $id)->first();
        if($offer != null) {
            $offer->delete();
        }
        return redirect()->back();
    }

}
