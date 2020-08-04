@extends('base.base')

@section('title', 'Admin Page')

@section('content')
<div class="container accPage">
  <div class="row">
    <div class="col-8 offset-2 table-responsive">
      @if (session('adminAktif'))
        <div class="alert alert-success" role="alert">
          {{ session('adminAktif') }}
        </div>
      @endif
      @if (session('adminNonAktif'))
        <div class="alert alert-danger" role="alert">
          {{ session('adminNonAktif') }}
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
                @if( $us -> hakAkses == 1 )
                  <span class="yellowText">User</span>
                @elseif( $us -> hakAkses == 2 )
                  <span class="greenText">Admin</span>
                @elseif( $us -> hakAkses == 3 )
                  <span class="greenText">Super Admin</span>
                @endif
              </td>
              <td>
                @if( $us -> hakAkses < 3 )
                  <a class="genric-btn aktif" onclick="event.preventDefault(); document.getElementById('aktifAcc{{ $us -> id }}').submit();">
                    Admin
                  </a>
                  <form id="aktifAcc{{ $us -> id }}" action="{{ route('admin.aktif.auth') }}" method="post" style="display: none;">
                    @csrf
                    <input type="hidden" name="acc" value="{{ $us -> id }}">
                  </form>
                  <a class="genric-btn nonAktif" onclick="event.preventDefault(); document.getElementById('nonAktifAcc{{ $us -> id }}').submit();">
                    User
                  </a>
                  <form id="nonAktifAcc{{ $us -> id }}" action="{{ route('admin.nonAktif.auth') }}" method="post" style="display: none;">
                    @csrf
                    <input type="hidden" name="acc" value="{{ $us -> id }}">
                  </form>
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
