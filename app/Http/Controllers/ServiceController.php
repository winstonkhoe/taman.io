<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\Service;
use App\Models\ServiceImage;
use App\Models\TransactionDetailService;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request){
        $data = [
            Design::paginate(10)
        ];
        return view('home', compact('data'));
    }

    public function detail($id){
        $data = Service::all()->find($id);
        return view('service.index', compact('data'));
    }

    public function checkout($id){
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

    public function addPage(Request $request) {
        return view ('service.add');
    }

    public function add(Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string|min:5',
            'estimation' => 'required|numeric',
            'price' => 'required|numeric|min:1000',
        ]);

        $service = new Service();
        $service->name = $data['name'];
        $service->description = $data['description'];
        $service->estimation_day = $data['estimation'];
        $service->seller_id = auth()->user()->seller->id;
        $service->price = $data['price'];
        $service->created_at = now();
        $service->save();

        if($request->file) {
            $extension = $request->file->extension();
            // $filename = $request->file->getClientOriginalName();
            $filename = now()->timestamp.".".$extension;
            $request->file->move(public_path('uploads'), $filename);

            $image = new ServiceImage();
            $image->filename = $filename;
            $image->created_at = now();
            $image->service_id = $service->id;
            $image->save();
        }

        return redirect("/transactions");
    }

    public function managePage(Request $request) {
        $data = Service::where("seller_id", "=", auth()->user()->seller->id)->orderby("created_at", "DESC")->get();
        return view ('service_manage', compact('data'));
    }
}
