<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
      return view('acc.0index');
    }

    public function acc(){
      if (Auth::check()) {
        if (Auth::user()->hakAkses > 1) {
          $user = User::orderBy('id', 'desc')
                      ->get();
          return view('acc.1acc',compact(
                                          'user',
                                        ));
        } else {
          return redirect()->route('index.auth');
        }
      } else {
        return redirect()->route('login');
      }
    }

    public function accAktif(Request $request){
      if (Auth::check()) {
        if (Auth::user()->hakAkses > 1) {
          $id = $request -> acc;
          User::where('id', $id)
                ->update([
                  'role' => 2
                ]);
          return redirect()->route('acc.auth')->with('acc', 'Akun Berhasil Diaktifkan');
        } else {
          return redirect()->route('index.auth');
        }
      } else {
        return redirect()->route('login');
      }
    }

    public function accNonAktif(Request $request){
      if (Auth::check()) {
        if (Auth::user()->hakAkses > 1) {
          $id = $request -> acc;
          User::where('id', $id)
                ->update([
                  'role' => 1
                ]);
          return redirect()->route('acc.auth')->with('accNonAktif', 'Akun Berhasil Dinonaktifkan');
        } else {
          return redirect()->route('index.auth');
        }
      } else {
        return redirect()->route('login');
      }
    }

    public function admin(){
      if (Auth::check()) {
        if (Auth::user()->hakAkses > 2) {
          $user = User::orderBy('id', 'desc')
                      ->where('role', 2)
                      ->get();
          return view('acc.admin.0index',compact(
                                                'user',
                                              ));
        } else {
          return redirect()->route('index.auth');
        }
      } else {
        return redirect()->route('login');
      }
    }

    public function adminAktif(Request $request){
      if (Auth::check()) {
        if (Auth::user()->hakAkses > 2) {
          $id = $request -> acc;
          User::where('id', $id)
                ->update([
                  'hakAkses' => 2
                ]);
          return redirect()->route('admin.auth')->with('adminAktif', 'Admin Berhasil Diaktifkan');
        } else {
          return redirect()->route('index.auth');
        }
      } else {
        return redirect()->route('login');
      }
    }

    public function adminNonAktif(Request $request){
      if (Auth::check()) {
        if (Auth::user()->hakAkses > 2) {
          $id = $request -> acc;
          User::where('id', $id)
                ->update([
                  'hakAkses' => 1
                ]);
          return redirect()->route('admin.auth')->with('adminNonAktif', 'Admin Berhasil Dinonaktifkan');
        } else {
          return redirect()->route('index.auth');
        }
      } else {
        return redirect()->route('login');
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
