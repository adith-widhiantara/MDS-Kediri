@extends('base.base')

@section('title', 'Masuk | MDS Kediri')

@section('content')
<div class="login-form-area">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-7 col-lg-8">
        <div class="login-form">
          <!-- Login Heading -->
          <div class="login-heading">
            <span>Masuk</span>
            <p>Masuk website MDS Kediri</p>
            @if (session('error'))
              <div class="alert alert-warning" role="alert">
                Username dan Password tidak benar. Silakan daftar <a href="{{ route('register') }}" class="alert-link">disini</a> apabila belum daftar
              </div>
            @elseif (session('role'))
              <div class="alert alert-warning" role="alert">
                Akun anda belum diverivikasi
              </div>
            @elseif (session('acc'))
              <div class="alert alert-success" role="alert">
                Tunggu akun anda untuk diverivikasi
              </div>
            @endif
          </div>
          <!-- Single Input Fields -->
          <form class="" action="{{ route('login') }}" method="post">
            @csrf
            <div class="input-box">
              <div class="single-input-fields">
                <label>Masukkan Username</label>
                <input type="text" placeholder="Masukkan Username" name="username" value="{{ old('username') }}">
              </div>
              <div class="single-input-fields">
                <label>Masukkan Password</label>
                <input type="password" placeholder="Masukkan Password" name="password">
              </div>
              <!-- <div class="single-input-fields login-check">
                <input type="checkbox" id="fruit1" name="keep-log">
                <label for="fruit1">Keep me logged in</label>
                <a href="#" class="f-right">Forgot Password?</a>
              </div> -->
            </div>
            <!-- form Footer -->
            <div class="login-footer">
              <p>Belum punya akun? <a href="{{ route('register') }}">daftar</a>  disini</p>
              <button type="submit" class="submit">Masuk</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
