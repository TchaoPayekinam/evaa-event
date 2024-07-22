<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

//use App\Models\Administrator;
//use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function adminLoginForm(){
        /*$moi = new Administrator();
        $moi->last_name = 'AJAVON';
        $moi->first_name = 'Ayi Daniel';
        $moi->email = 'danielajavon@gmail.com';
        $moi->password = Hash::make('1234');
        $moi->profile_id = 1;
        $moi->save();*/
        return view('admin.auth.login');
    }

    public function doLogin(Request $request)
    {
        // Post Login Function
        $input = $request->all();
  
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        
        if(Auth::guard('admin')->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            return redirect()->intended(route('admin.dashboard'));
        } else {
            $notification = array(
                'message' => __('auth.failed'),
                'alert-type' => 'error'
            );

            return redirect()->route('admin.login')->with('danger', 'Vos identifiants sont incorrects');            
        }
    }

    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}