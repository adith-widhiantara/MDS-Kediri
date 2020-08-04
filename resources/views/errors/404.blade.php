@extends('base.base')

@section('title', 'Data Tidak Ditemukan | MDS Kediri')

@section('content')
<div class="errorHandling">
  <h1 class="mb-10">
    data tidak ditemukan
  </h1>
  <h3>
    klik <a href="{{ route('landing') }}">disini</a> untuk kembali ke halaman awal
  </h3>
</div>
@endsection
