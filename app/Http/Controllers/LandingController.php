<?php

namespace App\Http\Controllers;

use App\Galeri;
use App\Berita;
use App\Information;
use App\Video;
use App\Santri;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $galeri = Galeri::orderBy('updated_at', 'desc')
                    ->where('status', 2)
                    ->take(5)
                    ->get();

      $berita0 = Berita::orderBy('updated_at', 'desc')
                    ->where('status', 2)
                    ->take(1)
                    ->get();
      $berita1 = Berita::orderBy('updated_at', 'desc')
                    ->where('status', 2)
                    ->take(1)
                    ->skip(1)
                    ->get();
      $berita2 = Berita::orderBy('updated_at', 'desc')
                    ->where('status', 2)
                    ->take(1)
                    ->skip(2)
                    ->get();
      $berita3 = Berita::orderBy('updated_at', 'desc')
                    ->where('status', 2)
                    ->take(1)
                    ->skip(3)
                    ->get();
      $berita4 = Berita::orderBy('updated_at', 'desc')
                    ->where('status', 2)
                    ->take(1)
                    ->skip(4)
                    ->get();

      $captionVideo = Information::where('id', 1)
                    ->get();

      $video0 = Video::orderBy('updated_at', 'desc')
                    ->where('status', 2)
                    ->take(1)
                    ->get();
      $video1 = Video::orderBy('updated_at', 'desc')
                    ->where('status', 2)
                    ->take(1)
                    ->skip(1)
                    ->get();
      $video2 = Video::orderBy('updated_at', 'desc')
                    ->where('status', 2)
                    ->take(1)
                    ->skip(2)
                    ->get();

      $iklanTopPost = Information::where('id', 2)
                    ->get();

      $santri = Santri::orderBy('updated_at', 'desc')
                    ->where('status', 2)
                    ->take(3)
                    ->get();
      return view('content.landing.0landing', compact(
                                                  'galeri',
                                                  'berita0',
                                                  'berita1',
                                                  'berita2',
                                                  'berita3',
                                                  'berita4',
                                                  'captionVideo',
                                                  'video0',
                                                  'video1',
                                                  'video2',
                                                  'iklanTopPost',
                                                  'santri',
                                                ));
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
      User::create([
          'namalengkap' => $request->namaLengkap,
          'username' => $request->username,
          'password' => Hash::make($request->password),
      ]);

      return redirect()->route('login')
                      ->with('acc', 'a');
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
