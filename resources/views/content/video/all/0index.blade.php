@extends('base.base')

@section('title', 'Semua Video | MDS Kediri')

@section('js')
  <script src="{{ asset('js/galeri/index.js') }}"></script>
@endsection

@section('content')
<section class="allNews section-padding">
  <div class="container">
    @if(session('acc'))
      <div class="alert alert-success" role="alert">
        {{ session('acc') }}
      </div>
    @endif
    @if( session('tidakAcc') )
      <div class="alert alert-danger" role="alert">
        {{ session('tidakAcc') }}
      </div>
    @endif
    <div class="row">
      @include('content.video.all.1post')
    </div>
    @include('content.video.all.2pagination')
  </div>
</section>
@endsection
