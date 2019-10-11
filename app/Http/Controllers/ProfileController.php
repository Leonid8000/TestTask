<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function info()
    {
        $user = Auth::user();

        return view('profile/info', compact('user'));
    }

    public function preferences()
    {
        return view('profile/preferences');
    }

    public function edit_form(){

        $user = Auth::user();
        return view('profile/edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'name'     => 'required', 'string', 'max:255',
            'last_name'=> 'required', 'string', 'max:255',
            'birth'    => 'required',
            'email'    => 'string', 'email', 'max:255', 'unique:users',
            'phone'    => 'nullable|numeric', 'min:11',
            'gender'    => 'nullable|string', 'max:255',
            'city'    => 'nullable|string', 'max:255',

        ]);

        $user = Auth::user();

        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->birth = $request->birth;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->city = $request->city;

        $user->save();

        return redirect()->route('info')->with('successMsg','Profile update success');


    }

}
