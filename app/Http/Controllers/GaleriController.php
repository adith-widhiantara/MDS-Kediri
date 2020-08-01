<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Galeri;
use App\Santri;
use App\Video;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $galeri = Galeri::orderBy('id', 'desc')
                        ->where('status', 2)
                        ->paginate(9);

      $countBerita = Berita::where('status', 2)
                  ->count();
      $countGaleri = Galeri::where('status', 2)
                  ->count();
      $countSantri = Santri::where('status', 2)
                  ->count();
      $countVideo = Video::where('status', 2)
                  ->count();

      $recentBerita = Berita::where('status', 2)
                  ->orderBy('id', 'desc')
                  ->take(4)
                  ->get();
      return view('content.galeri.0index', compact(
                                                    'galeri',
                                                    'countBerita',
                                                    'countGaleri',
                                                    'countSantri',
                                                    'countVideo',
                                                    'recentBerita',
                                                  ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $countBerita = Berita::where('status', 2)
                  ->count();
      $countGaleri = Galeri::where('status', 2)
                  ->count();
      $countSantri = Santri::where('status', 2)
                  ->count();
      $countVideo = Video::where('status', 2)
                  ->count();

      return view('content.galeri.create.0index', compact(
                                                          'countBerita',
                                                          'countGaleri',
                                                          'countSantri',
                                                          'countVideo',
                                                        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $file = $request->file('sampul');
  		$tujuan_upload = 'img/galeri';
      $nama_file = time()."_".$file->getClientOriginalName();
  		$file->move($tujuan_upload,$nama_file);

      Galeri::create([
        'judul' => $request -> judul,
        'sampul' => $nama_file,
        'caption' => $request -> caption,
        'waktu' => $request -> waktu,
        'status' => 1,
        'linkVideo' => $request -> linkVideo,
        'user_id' => $request -> user_id,
        'user_nama' => $request -> user_nama,
      ]);

      return redirect()->route('index.galeri');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show($judul)
    {
      $galeri = Galeri::where('judul', $judul)
                ->first();
      $postTerakhir = Berita::where('status', 2)
                ->orderBy('id', 'desc')
                ->take(1)
                ->get();
      $santriTerakhir = Santri::where('status', 2)
                ->orderBy('id', 'desc')
                ->take(1)
                ->get();

      $countBerita = Berita::where('status', 2)
                  ->count();
      $countGaleri = Galeri::where('status', 2)
                  ->count();
      $countSantri = Santri::where('status', 2)
                  ->count();
      $countVideo = Video::where('status', 2)
                  ->count();

      $recentBerita = Berita::where('status', 2)
                  ->orderBy('id', 'desc')
                  ->take(4)
                  ->get();

      return view('content.galeri.detail.0index', compact(
                                                          'galeri',
                                                          'postTerakhir',
                                                          'santriTerakhir',
                                                          'countBerita',
                                                          'countGaleri',
                                                          'countSantri',
                                                          'countVideo',
                                                          'recentBerita',
                                                        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeri $galeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeri $galeri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeri $galeri)
    {
        //
    }
}
