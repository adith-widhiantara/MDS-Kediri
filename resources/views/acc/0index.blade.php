@extends('base.base')

@section('title', 'Profil Saya | MDS Kediri')

@section('content')
<section class="accPage section-padding">
  <div class="indexAcc container">
    <div class="row">
      <div class="col-xl-6 leftScreen">
        <div class="img-profile mx-auto">
          @if( is_null(Auth::user()->fotoprofile) )
            <img src="{{ asset('img/dev/user.png') }}" alt="">
          @else
            <img src="{{ asset('img/profile/'.Auth::user()->fotoprofile) }}" alt="">
          @endif
        </div>
        <div class="text-profile mt-10">
          <p>
            {{ Auth::user()->namalengkap }}
          </p>
          <p>
            @if( is_null(Auth::user()->alamat) )
              (Alamat belum diisi)
            @else
              {{ Auth::user()->alamat }}
            @endif
          </p>
          <div class="editProfileBtn">
            <a class="genric-btn editProfile" href="#">
              Ubah Data Profile
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-6 rightScreen">

      </div>
    </div>
  </div>
</section>
@endsection
