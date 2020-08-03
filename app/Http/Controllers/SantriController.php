<?php

namespace App\Http\Controllers;

use App\Santri;
use App\Berita;
use App\Galeri;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
      if (Auth::check()) {
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
        $tujuan_upload = 'img/santri';
        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move($tujuan_upload,$nama_file);

        $user_id = Auth::id();
        $user_namalengkap = Auth::user()->namalengkap;

        Santri::create([
          'judul' => $request -> judul,
          'sampul' => $nama_file,
          'caption' => $request -> caption,
          'waktu' => $request -> waktu,
          'bulan' => $request -> bulan,
          'status' => 1,
          'user_id' => $user_id,
          'user_nama' => $user_namalengkap,
        ]);

        return redirect()->route('mine.santri');
      } else {
        return redirect()->route('login');
      }
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

    public function mine(){
      if (Auth::check()) {
        $user_id = Auth::id();
        $santri = Santri::where('user_id', $user_id)
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

        $recentBerita = Berita::where('status', 2)
                    ->orderBy('id', 'desc')
                    ->take(4)
                    ->get();

        return view('content.santri.mine.0index', compact(
                                                            'santri',
                                                            'countBerita',
                                                            'countGaleri',
                                                            'countSantri',
                                                            'countVideo',
                                                            'recentBerita',
                                                          ));
      } else {
        return redirect()->route('login');
      }
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
