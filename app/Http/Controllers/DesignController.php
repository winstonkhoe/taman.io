<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\DesignImage;
use App\Models\TransactionDetailGarden;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DesignController extends Controller
{
    public function index($id){
        $data = Design::find($id);
        return view('design.index', compact('data'));
    }

    public function addPage(Request $request) {
        return view ('design.add');
    }

    public function add(Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'price' => 'required|numeric|min:100000',
        ]);

        $design = new Design();
        $design->name = $data['name'];
        $design->description = $data['description'];
        $design->artist_id = auth()->user()->artist->id;
        $design->price = $data['price'];
        $design->created_at = now();
        $design->save();

        if($request->file) {
            $extension = $request->file->extension();
            // $filename = $request->file->getClientOriginalName();
            $filename = now()->timestamp.".".$extension;
            Storage::putFileAs('public/uploads', $request->file, $filename);
            $request->file->move(public_path('uploads'), $filename);

            $image = new DesignImage();
            $image->design_id =
            $image->filename = $filename;
            $image->created_at = now();
            $image->design_id = $design->id;
            $image->save();
        }

        return redirect()->back();
    }
}
