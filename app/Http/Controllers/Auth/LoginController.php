<?php

namespace App\Http\Controllers\Auth;

use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $remember_token = ($request->has('remember_token')) ? true : false;

        if(Auth::attempt([$fieldType => $input['username'], 'password' => $input['password'], 'role' => 2], $remember_token)){
          return redirect()->route('landing')
              ->with('success', 'a');
        }else{
          $username = $request->username;
          $pass = $input['password'];

          $checkingUsername = User::where('username', $username)
                                  ->first();
          if ( $checkingUsername != null ) {
            if ( $checkingUsername -> role == 1 ) {
              return redirect()->route('login')
                                ->with('belumAcc','A');
            }
            if ( $checkingUsername -> role == 2 || $checkingUsername -> password != $pass ) {
              return redirect()->route('login')
                                ->with('passSalah','A');
            }
          } else {
            return redirect()->route('login')
                              ->with('error','A');
          }
        }
    }
}
