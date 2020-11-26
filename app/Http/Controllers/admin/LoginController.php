<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class LoginController extends Controller
{
    public function getLogin()
    {
        // if (Auth::check()) {
        //     return redirect('admin');
        // } else {
        //     return view('admin.page.login');
        // } 
      return view('admin.page.login');
    }
    public function postLogin(Request $request)
    {
        // $login = [
        //     'email' => $request->email,
        //     'password' => $request->password,
        //     'isAdmin'    =>1
        // ];
        // if (Auth::attempt($login)) {
        // return redirect('admin')->with('name',Auth::User()->name);
        // } else {
        //     return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        // }

        
        $users = User::all(); // 1 bang user
        $email = $request->email;//email la name cua trang login
        $password = $request->password;
        $status = 1;

        foreach($users as $user)
        {
            if( $user->email == $email  && $user->password == ($password) && $user->status==1)
            {
                return redirect()->route('home');
            }
        }
            return redirect()->route('getLogin');
    }
    // public function getLogout()
    // {
    //     Auth::logout();
    //     return view('admin.page.login');
    // }

}
