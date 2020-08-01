<?php

namespace App\Http\Controllers;

use App\Santri;
use App\Berita;
use App\Galeri;
use App\Video;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $santri = Santri::orderBy('id', 'desc')
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

      $recentBerita = Berita::where('status', 2)
                  ->orderBy('id', 'desc')
                  ->take(4)
                  ->get();
      return view('content.santri.0index', compact(
                                                    'santri',
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

      return view('content.santri.create.0index', compact(
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
      $tujuan_upload = 'img/santri';
      $nama_file = time()."_".$file->getClientOriginalName();
      $file->move($tujuan_upload,$nama_file);

      Santri::create([
        'judul' => $request -> judul,
        'sampul' => $nama_file,
        'caption' => $request -> caption,
        'waktu' => $request -> waktu,
        'bulan' => $request -> bulan,
        'status' => 1,
        'user_id' => $request -> user_id,
        'user_nama' => $request -> user_nama,
      ]);

      return redirect()->route('index.santri');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function show($judul)
    {
      $santri = Santri::where('judul', $judul)
                ->first();

      $postTerakhir = Berita::where('status', 2)
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

      $recentBerita = Berita::where('status', 2)
                  ->orderBy('id', 'desc')
                  ->take(4)
                  ->get();
      return view('content.santri.detail.0detail', compact(
                                                  'santri',
                                                  'postTerakhir',
                                                  'galeriTerakhir',
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
     * @param  \App\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function edit(Santri $santri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Santri $santri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Santri $santri)
    {
        //
    }
}
