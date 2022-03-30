<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $request){
        $data = User::all();
        return view('login', compact('data'));
    }

    public function register(Request $request){
        $data = User::all();
        return view('register', compact('data'));
    }

    public function profile(Request $request){
        $data = User::all();
        return view('profile', compact('data'));
    }

    public function manageUser(Request $request){
        $data = User::all();
        return view('manage-user', compact('data'));
    }

    public function userProfile($id){
        $data = User::find($id);
        return view('update-user-profile', compact('data'));
    }

    public function registration(Request $request){
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|alpha_dash|min:5|confirmed',
            'address' => 'required|min:7',
            'phone' => 'required|between:8,12',
        ]);

//        $public_directory = 'uploads/'.$data['file'];
        // $filedirectory = 'uploads/'.$request->file->getClientOriginalName();
        // $request->file->move(public_path('uploads'), $data['file']->getClientOriginalName());

        // $id = DB::table('images')->insertGetId([
        //     'filename' => $filedirectory
        // ]);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone' => $data['phone'],
            // 'phone' => strval($request->phone),
            'address' => $data['address'],
        ]);
        auth()->login($user);
        return redirect('/');
    }

    public function login(Request $request){
        $email = $request->email;
        $pass = $request->password;
        if(auth()->attempt([
            'email'=>$email,
            'password'=>$pass
        ])) {
            if($request->filled('remember-me'))
            {
                $userId = auth()->user()->id;
                Cookie::queue('id', $userId, 60);
            }
            else
            {
                if(!nullOrEmptyString(Cookie::get('id')))
                {
                    Cookie::queue(Cookie::unqueue('id'));
                }
            }
            return redirect('/');
        }
        else {
            return redirect()->back();
        }
    }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }
}
