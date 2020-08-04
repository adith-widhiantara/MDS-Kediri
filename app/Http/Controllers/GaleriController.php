<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Galeri;
use App\Santri;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
      if (Auth::check()) {
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
        $tujuan_upload = 'img/galeri';
        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move($tujuan_upload,$nama_file);

        $user_id = Auth::id();
        $user_namalengkap = Auth::user()->namalengkap;

        Galeri::create([
          'judul' => $request -> judul,
          'sampul' => $nama_file,
          'caption' => $request -> caption,
          'waktu' => $request -> waktu,
          'status' => 1,
          'linkVideo' => $request -> linkVideo,
          'user_id' => $user_id,
          'user_nama' => $user_namalengkap,
        ]);

        return redirect()->route('mine.galeri');
      } else {
        return redirect()->route('login');
      }
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
                ->firstOrFail();

      $galeriNotFound = Galeri::orderBy('id', 'desc')
                        ->where('status', 2)
                        ->take(3)
                        ->get();

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


        if ($galeri->status == 2) {
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
        } else {
          return view('content.galeri.notFound.0index',compact(
                                                              'galeriNotFound',
                                                              'countBerita',
                                                              'countGaleri',
                                                              'countSantri',
                                                              'countVideo',
                                                              'recentBerita',
                                                            ));
        }



    }

    public function mine(){
      if (Auth::check()) {
        $user_id = Auth::id();
        $galeri = Galeri::where('user_id', $user_id)
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

        return view('content.galeri.mine.0index', compact(
                                                          'galeri',
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

    public function mineDetail($judul){
      if (Auth::check()) {
        $user_id = Auth::id();
        $galeri = Galeri::where('judul', $judul)
                  ->first();
        $user_id_galeri = $galeri->user_id;

        $countBerita = Berita::where('status', 2)
                    ->count();
        $countGaleri = Galeri::where('status', 2)
                    ->count();
        $countSantri = Santri::where('status', 2)
                    ->count();
        $countVideo = Video::where('status', 2)
                    ->count();

        if ($user_id_galeri == $user_id) {
          return view('content.galeri.mine.3detail',compact(
                                                              'galeri',
                                                              'countBerita',
                                                              'countGaleri',
                                                              'countSantri',
                                                              'countVideo',
                                                            ));
        } else {
          return redirect()->route('index.galeri');
        }

      } else {
        return redirect()->route('login');
      }
    }

    public function all(){
      if (Auth::check()) {
        if (Auth::user()->hakAkses > 1) {
          $galeri = Galeri::orderBy('id', 'desc')
                            ->paginate(9);
          return view('content.galeri.allGaleri.0index', compact(
                                                                'galeri',
                                                              ));
        } else {
          return redirect()->route('index.galeri');
        }
      } else {
        return redirect()->route('login');
      }
    }

    public function allDetail($judul){
      if (Auth::check()) {
        if (Auth::user()->hakAkses > 1) {
          $galeri = Galeri::where('judul', $judul)
                            ->firstOrFail();

          return view('content.galeri.allGaleri.3detail', compact(
                                                                'galeri',
                                                              ));
        } else {
          return redirect()->route('index.galeri');
        }
      } else {
        return redirect()->route('login');
      }
    }

    public function allDetailStoreSetuju(Request $request, $judul){
      Galeri::where('judul', $judul)
              ->update(
                ['status' => 2]
              );
      return redirect()->route('allNews.galeri', $judul)->with('acc', 'Galeri Berhasil Disetujui');
    }

    public function allDetailStoreTidakSetuju(Request $request, $judul){
      Galeri::where('judul', $judul)
              ->update(
                ['status' => 3]
              );
      return redirect()->route('allNews.galeri', $judul)->with('tidakAcc', 'Galeri Berhasil Tidak Disetujui');
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
