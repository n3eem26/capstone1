<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Validator;
use File;
use Session;
use App;

class AdminUserController extends Controller
{

    public function loginForm()
    {
        $active='login';
        return view('admin.login',compact('active'));
    }

    public function forgetForm()
    {
        return view('admin.forget');
    }

    public function PostForgetForm(Request $request)
    {
        return $request;
        
    }

    public function login()
    {
        //
        $inputs = Request()->all();
        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];
        $validator = Validator::make($inputs, $rules);
        if ($validator->fails()) {
            $validation_errors = $validator->failed();
            Session::flash('error', $validation_errors);
            return redirect()->back();
        }
        if (Auth::attempt(['email' => $inputs['email'], 'password' => $inputs['password']])) {
            return redirect('/home');
        } else {
            Session()->flash('alert-warning', 'Autharization Faild');
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        $active='login';
        return view('admin.login',compact('active'));
        
    }


    public function store(Request $request)
    {
        $inputs = Request()->except(['_token']);
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',

        ];
        $validator = Validator::make($inputs, $rules);
        if ($validator->fails()) {
            $request->session()->flash('error', 'Check Input | Email Used By Another User');
            $active='signup';
            return view('admin.login',compact('active'));
//            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $inputs['password'] = bcrypt($inputs['password']);
            User::create($inputs);
            $request->session()->flash('success', 'User Add Sucess');
            $active='login';
            
            return view('admin.login',compact('active'));
        }
    }




    public static function changLang()
    {
        if (Session::has('lang')) {
            if (Session::get('lang') == 'en') {
                App::setlocale('en');
                $lng = 'en';
            } else if (Session::get('lang') == 'ar') {
                App::setlocale('ar');
                $lng = 'ar';
            }
        } else {
            $lng = 'en';
        }
        return $lng;
    }
}
