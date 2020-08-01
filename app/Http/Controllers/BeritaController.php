<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Galeri;
use App\Santri;
use App\Video;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      $berita = Berita::orderBy('id', 'desc')
                  ->where('status', 2)
                  ->paginate(5);

      $countBerita = Berita::where('status', 2)
                  ->count();
      $countGaleri = Galeri::where('status', 2)
                  ->count();
      $countSantri = Santri::where('status', 2)
                  ->count();
      $countVideo = Video::where('status', 2)
                  ->count();

      $recentSantri = Santri::where('status', 2)
                  ->orderBy('id', 'desc')
                  ->take(4)
                  ->get();
      return view('content.berita.0index', compact(
                                                  'berita',
                                                  'countBerita',
                                                  'countGaleri',
                                                  'countSantri',
                                                  'countVideo',
                                                  'recentSantri',
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

      return view('content.berita.create.0index', compact(
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
  		$tujuan_upload = 'img/news';
      $nama_file = time()."_".$file->getClientOriginalName();
  		$file->move($tujuan_upload,$nama_file);

      Berita::create([
        'judul' => $request -> judul,
        'sampul' => $nama_file,
        'caption' => $request -> caption,
        'waktu' => $request -> waktu,
        'bulan' => $request -> bulan,
        'status' => 1,
        'user_id' => $request -> user_id,
        'user_nama' => $request -> user_nama,
      ]);

      return redirect()->route('index.berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($berita)
    {
      $berita = Berita::where('judul', $berita)
                ->first();

      $postTerakhir = Santri::where('status', 2)
                ->orderBy('id', 'desc')
                ->take(1)
                ->get();
      $galeriTerakhir = Galeri::where('status', 2)
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

      $recentSantri = Santri::where('status', 2)
                  ->orderBy('id', 'desc')
                  ->take(4)
                  ->get();
      return view('content.berita.detail.0detail', compact(
                                                  'berita',
                                                  'postTerakhir',
                                                  'galeriTerakhir',
                                                  'countBerita',
                                                  'countGaleri',
                                                  'countSantri',
                                                  'countVideo',
                                                  'recentSantri',
                                                  ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        //
    }
}
