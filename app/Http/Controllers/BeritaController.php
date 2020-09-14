<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Galeri;
use App\Santri;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      $berita = Berita::orderBy('updated_at', 'desc')
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
                  ->orderBy('updated_at', 'desc')
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

    public function allNews(){
      if (Auth::check()) {
        if (Auth::user()->hakAkses > 1) {
          $berita = Berita::orderBy('id', 'desc')
                            ->paginate(9);
          return view('content.berita.allNews.0index', compact(
                                                                'berita',
                                                              ));
        } else {
          return redirect()->route('index.berita');
        }
      } else {
        return redirect()->route('login');
      }
    }

    public function allNewsDetail(Berita $berita){
      if (Auth::check()) {
        if (Auth::user()->hakAkses > 1) {

          return view('content.berita.allNews.3detail', compact(
                                                                'berita',
                                                              ));
        } else {
          return redirect()->route('index.berita');
        }
      } else {
        return redirect()->route('login');
      }
    }

    public function allNewsDetailStoreSetuju(Request $request, Berita $berita){
      Berita::where('id', $berita->id)
              ->update(
                ['status' => 2]
              );
      return redirect()->route('allNews.berita')->with('acc', 'Berita Berhasil Disetujui');
    }

    public function allNewsDetailStoreTidakSetuju(Request $request, Berita $berita){
      Berita::where('id', $berita->id)
              ->update(
                ['status' => 3]
              );
      return redirect()->route('allNews.berita')->with('tidakAcc', 'Berita Berhasil Tidak Disetujui');
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

        return view('content.berita.create.0index', compact(
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
        $tujuan_upload = 'img/news';
        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move($tujuan_upload,$nama_file);

        $user_id = Auth::id();
        $user_namalengkap = Auth::user()->namalengkap;

        Berita::create([
          'judul' => $request -> judul,
          'sampul' => $nama_file,
          'caption' => $request -> caption,
          'waktu' => $request -> waktu,
          'bulan' => $request -> bulan,
          'status' => 1,
          'user_id' => $user_id,
          'user_nama' => $user_namalengkap,
        ]);

        return redirect()->route('mine.berita');

      } else {
        return redirect()->route('login');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita){
      $beritaNotFound = Berita::orderBy('updated_at', 'desc')
                        ->where('status', 2)
                        ->take(3)
                        ->get();

      $postTerakhir = Santri::where('status', 2)
                ->orderBy('updated_at', 'desc')
                ->take(1)
                ->get();
      $galeriTerakhir = Galeri::where('status', 2)
                ->orderBy('updated_at', 'desc')
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
                  ->orderBy('updated_at', 'desc')
                  ->take(4)
                  ->get();

      if ($berita->status == 2) {
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
      } else {
        return view('content.berita.notFound.0index',compact(
                                                            'beritaNotFound',
                                                            'countBerita',
                                                            'countGaleri',
                                                            'countSantri',
                                                            'countVideo',
                                                            'recentSantri',
                                                          ));
      }
    }

    public function mine(){
      if (Auth::check()) {
        $user_id = Auth::id();
        $berita = Berita::where('user_id', $user_id)
                    ->orderBy('updated_at', 'desc')
                    ->paginate(9);

        $countBerita = Berita::where('status', 2)
                    ->count();
        $countGaleri = Galeri::where('status', 2)
                    ->count();
        $countSantri = Santri::where('status', 2)
                    ->count();
        $countVideo = Video::where('status', 2)
                    ->count();

        $recentSantri = Santri::where('status', 2)
                    ->orderBy('updated_at', 'desc')
                    ->take(4)
                    ->get();

        return view('content.berita.mine.0index', compact(
                                                        'berita',
                                                        'countBerita',
                                                        'countGaleri',
                                                        'countSantri',
                                                        'countVideo',
                                                        'recentSantri',
                                                        ));
      } else {
        return redirect()->route('login');
      }
    }

    public function mineDetail(Berita $berita){
      if (Auth::check()) {
        $user_id = Auth::id();

        $user_id_berita = $berita->user_id;

        $countBerita = Berita::where('status', 2)
                    ->count();
        $countGaleri = Galeri::where('status', 2)
                    ->count();
        $countSantri = Santri::where('status', 2)
                    ->count();
        $countVideo = Video::where('status', 2)
                    ->count();

        if ($user_id_berita == $user_id) {
          return view('content.berita.mine.3detail',compact(
                                                              'berita',
                                                              'countBerita',
                                                              'countGaleri',
                                                              'countSantri',
                                                              'countVideo',
                                                            ));
        } else {
          return redirect()->route('index.berita');
        }

      } else {
        return redirect()->route('login');
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita){
      $id = $berita -> user_id;
      $user_id = Auth::id();

      if ( Auth::check() ) {
        if ( $id == $user_id ) {

          $countBerita = Berita::where('status', 2)
                      ->count();
          $countGaleri = Galeri::where('status', 2)
                      ->count();
          $countSantri = Santri::where('status', 2)
                      ->count();
          $countVideo = Video::where('status', 2)
                      ->count();

          return view('content.berita.mine.edit.0index',compact(
                                                                'berita',
                                                                'countBerita',
                                                                'countGaleri',
                                                                'countSantri',
                                                                'countVideo',
                                                                ));

        } else {
          return redirect()->route('mine.berita');
        }
      } else {
        return redirect()->route('login');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita){
      $file = $request->file('sampul');
      if (is_null($file)) {
        $nama_file = $berita -> sampul;
      } else {
        $tujuan_upload = 'img/news';
        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move($tujuan_upload,$nama_file);
      }

      Berita::where('id', $berita->id)
          ->update(
            [
              'judul' => $request -> judul,
              'sampul' => $nama_file,
              'caption' => $request -> caption,
            ]
          );

      return redirect()->route('mine.berita')->with('successBerita', 'Berita Berhasil Diubah');
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
