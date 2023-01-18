<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetailGarden;
use App\Models\TransactionDetailService;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function checkoutDesign(Request $request, $id){
        $header = new TransactionHeader();
        $header->user_id = auth()->user()->id;
        $header->created_at = now();
        $header->save();

        $detail = new TransactionDetailGarden();
        $detail->garden_offer_id = $request->offer_id;
        $detail->transaction_header_id = $header->id;
        $detail->save();
        return redirect("/transactions");
    }

    public function checkoutService($id){
        $header = new TransactionHeader();
        $header->user_id = auth()->user()->id;
        $header->created_at = now();
        $header->save();

        $detail = new TransactionDetailService();
        $detail->service_id = $id;
        $detail->transaction_header_id = $header->id;
        $detail->save();
        return redirect()->back();
    }
}
