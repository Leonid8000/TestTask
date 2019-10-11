<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers;
use App\User;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();
        return view('settings' ,compact('user'));
    }
    
        public function changePassword(Request $request){

            $this->validate($request,[
            'oldpassword'     => 'required',
            'password'=> 'required|confirmed',
            ]);

            $hashedPassword = Auth::user()->password;

            if(Hash::check($request->oldpassword, $hashedPassword )){

                $user = User::find(Auth::id());

                $user->password = Hash::make($request->password);

                $user->save();

                Auth::logout();

                return redirect()->route('login')->with('succesMsg','Password changed');
            }else{
                return redirect()->back()->with('errorMsg', 'Current password invalid');
            }

        }

}
