<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\testuser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class main extends Controller
{
    //
    public function index()
    {
        return view('components.home');
    }
    public function reg(Request $request)
    {
        $request->validate([
            "name" => "required",
            "lastname" => "required",
            "email" => "required|email|unique:testusers",
            "phone" => "required|min:5|max:12",
        ]);


        $users = new testuser;
        $users->name = $request->name;
        $users->lastname = $request->lastname;
        $users->email = $request->email;
        $users->phone = $request->phone;
        $save = $users->save();
        if ($save) {
            // return back()->with('success', 'user added successfully');
            return redirect(route('costum'))->with('success', 'user added successfully');
        } else {
            return back()->with('fail', 'something went wrong');
        }
        // return $request->post();
    }
    public function costum()
    {
        $data = DB::select('select * from testusers');
        return view('components.redirect', compact('data'));
    }
}
