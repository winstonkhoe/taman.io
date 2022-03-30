<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request){
        $data = [
            Design::paginate(10)
        ];
        return view('home', compact('data'));
    }
}
