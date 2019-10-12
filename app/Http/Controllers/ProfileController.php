<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;

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

    public function showEditForm(){

        $user = Auth::user();
        return view('profile/edit', compact('user'));
    }

    public function update(Request $request)
    {

        $id = Auth::user()->id;

        $this->validate($request, [

            'name'      => 'required', 'string', 'max:255',
            'last_name' => 'required', 'string', 'max:255',
            'birth'     => 'required',
            'email'     => 'required|string|email|max:255|unique:users,email,'.$id,
            'phone'     => 'nullable|numeric|digits:12|unique:users,email,'.$id,
            'gender'    => 'nullable|string', 'max:255',
            'city'      => 'nullable|string', 'max:255',

        ]);

        $user = Auth::user();

        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->birth = $request->birth;
        $user->email = $request->email;
        $user->phone = trim($request->phone);
        $user->gender = $request->gender;
        $user->city = $request->city;

        $user->save();

        return redirect()->route('info')->with('successMsg','Profile update success');
        
    }

}
