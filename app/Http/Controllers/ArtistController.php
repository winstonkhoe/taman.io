<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Design;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function registerPage() {
        return view ('artist.register');
    }
    public function index(Request $request) {
        $data = Design::where("artist_id", "=", auth()->user()->artist->id)->orderby("created_at", "DESC")->get();
        return view ('artist.index', compact('data'));
    }

    public function profile() {
        return view ('artist.profile');
    }

    public function update(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|min:3',
        ]);

        $artist = Artist::find(auth()->user()->artist->id);
        $artist->name = $data['name'];
        $artist->updated_at = now();

        if($request->file) {
            $extension = $request->file->extension();
            // $filename = $request->file->getClientOriginalName();
            $filename = now()->timestamp.".".$extension;
            $request->file->move(public_path('uploads'), $filename);

            $artist->image = $filename;
        }
        $artist->save();

        return redirect('/artist');
    }

    public function add(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|min:3',
        ]);

        $artist = new Artist();
        $artist->name = $data['name'];
        $artist->user_id = auth()->user()->id;
        $artist->reputation_point = 0;
        $artist->created_at = now();

        if($request->file) {
            $extension = $request->file->extension();
            // $filename = $request->file->getClientOriginalName();
            $filename = now()->timestamp.".".$extension;
            $request->file->move(public_path('uploads'), $filename);

            $artist->image = $filename;
        }
        $artist->save();

        return redirect('/artist');
    }
}
