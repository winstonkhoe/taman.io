<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\GardenOffer;
use Illuminate\Http\Request;

class GardenOfferController extends Controller
{
    public function addPage($id) {
        $data = Design::find($id);
        return view('contractor.add', compact('data'));
    }

    public function add(Request $request, $id){

        $offer = GardenOffer::where([
            'seller_id' => auth()->user()->seller->id,
            'design_id' => $id,
            'valid_to' => null
            ])->first();

        if($offer == null) {
            $offer = new GardenOffer();
            $offer->design_id = $id;
            $offer->seller_id = auth()->user()->seller->id;
            $offer->price = $request->price;
            $offer->save();
        }
        return redirect('/design/'.$id);
    }

    public function remove($id){
        $offer = GardenOffer::where([
            'seller_id' => auth()->user()->seller->id,
            'design_id' => $id,
            'valid_to' => null
            ])->first();
            
        $offer->valid_to = now();
        $offer->save();

        return redirect()->back();
    }
}
