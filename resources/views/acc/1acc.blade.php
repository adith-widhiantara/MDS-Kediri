@extends('base.base')

@section('title', 'Akun Santri')

@section('content')
<div class="container accPage">
  <div class="row">
    <div class="col-8 offset-2 table-responsive">
      @if (session('acc'))
        <div class="alert alert-success" role="alert">
          {{ session('acc') }}
        </div>
      @endif
      @if (session('accNonAktif'))
        <div class="alert alert-danger" role="alert">
          {{ session('accNonAktif') }}
        </div>
      @endif
      <table class="table table-striped">
        <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">Status</th>
          <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
          @foreach( $user as $us )
            <tr>
              <th scope="row">{{ $loop -> iteration }}</th>
              <td>{{ $us -> namalengkap }}</td>
              <td>
                @if( $us -> role == 1 )
                  <span class="yellowText">Non-Aktif</span>
                @elseif( $us -> role == 2 )
                  <span class="greenText">Aktif</span>
                @endif
              </td>
              <td>
                <a class="genric-btn aktif" onclick="event.preventDefault(); document.getElementById('aktifAcc{{ $us -> id }}').submit();">
                  Aktifkan
                </a>
                <form id="aktifAcc{{ $us -> id }}" action="{{ route('acc.aktif.auth') }}" method="POST" style="display: none;">
                  @csrf
                  <input type="hidden" name="acc" value="{{ $us -> id }}">
                </form>
                <a class="genric-btn nonAktif" onclick="event.preventDefault(); document.getElementById('nonAktifAcc{{ $us -> id }}').submit();">
                  Non-Aktifkan
                </a>
                <form id="nonAktifAcc{{ $us -> id }}" action="{{ route('acc.nonAktif.auth') }}" method="POST" style="display: none;">
                  @csrf
                  <input type="hidden" name="acc" value="{{ $us -> id }}">
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
