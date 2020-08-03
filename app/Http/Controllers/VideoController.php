<?php

namespace App\Http\Controllers;

use App\Video;
use App\Santri;
use App\Berita;
use App\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $video = Video::orderBy('id', 'desc')
                    ->where('status', 2)
                    ->paginate(12);

      $countBerita = Berita::where('status', 2)
                  ->count();
      $countGaleri = Galeri::where('status', 2)
                  ->count();
      $countSantri = Santri::where('status', 2)
                  ->count();
      $countVideo = Video::where('status', 2)
                  ->count();

      return view('content.video.0index',compact(
                                                  'video',
                                                  'countBerita',
                                                  'countGaleri',
                                                  'countSantri',
                                                  'countVideo',
                                                ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (Auth::check()) {
        $countBerita = Berita::where('status', 2)
        ->count();
        $countGaleri = Galeri::where('status', 2)
        ->count();
        $countSantri = Santri::where('status', 2)
        ->count();
        $countVideo = Video::where('status', 2)
        ->count();

        return view('content.video.create.0index', compact(
                                                            'countBerita',
                                                            'countGaleri',
                                                            'countSantri',
                                                            'countVideo',
                                                          ));
      } else {
        return redirect()->route('login');
      }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if (Auth::check()) {
        $file = $request->file('sampul');
        $tujuan_upload = 'img/video';
        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move($tujuan_upload,$nama_file);

        $user_id = Auth::id();
        $user_namalengkap = Auth::user()->namalengkap;

        Video::create([
          'caption' => $request -> caption,
          'sampul' => $nama_file,
          'linkVideo' => $request -> linkVideo,
          'status' => 1,
          'user_id' => $user_id,
          'user_nama' => $user_namalengkap,
        ]);

        return redirect()->route('mine.video');
      } else {
        return redirect()->route('login');
      }
    }

    public function mine(){
      if (Auth::check()) {
        $user_id = Auth::id();
        $video = Video::where('user_id', $user_id)
                    ->orderBy('id', 'desc')
                    ->paginate(9);

        $countBerita = Berita::where('status', 2)
        ->count();
        $countGaleri = Galeri::where('status', 2)
        ->count();
        $countSantri = Santri::where('status', 2)
        ->count();
        $countVideo = Video::where('status', 2)
        ->count();

        return view('content.video.mine.0index',compact(
                                                        'video',
                                                        'countBerita',
                                                        'countGaleri',
                                                        'countSantri',
                                                        'countVideo',
                                                        ));
      } else {
        return redirect()->route('login');
      }
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
