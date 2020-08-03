@extends('base.base')

@section('title', 'Daftar | MDS Kediri')

@section('js')
  <script src="{{ asset('js/signin/signin.js') }}"></script>
@endsection

@section('content')
<div class="register-form-area">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-8">
        <div class="register-form text-center">
          <!-- Login Heading -->
          <div class="register-heading">
            <span>Daftar</span>
            <p>Buat akun untuk mengakses website MDS Kediri</p>
          </div>
          <form method="POST" action="{{ route('register.acc') }}">
            @csrf
            <!-- Single Input Fields -->
            <div class="input-box">
              <div class="single-input-fields">
                <label>Nama Lengkap</label>
                <input id="namalengkap" type="text" placeholder="Masukkan Nama Lengkap" name="namaLengkap">
              </div>
              <div class="single-input-fields">
                <label>Username</label>
                <input id="username" type="text" placeholder="Masukkan Username" name="username">
              </div>
              <div class="single-input-fields">
                <label>Password</label>
                <input type="password" placeholder="Masukkan Password" name="password">
              </div>
            </div>
            <!-- form Footer -->
            <div class="register-footer">
              <p> Sudah mempunyai akun? <a href="{{ route('login') }}"> Masuk</a> disini</p>
              <button type="submit" class="submit">Sign Up</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
