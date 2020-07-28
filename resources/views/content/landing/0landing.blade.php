@extends('base.base')

@section('title', 'MDS Kediri')

@section('js')
  <script src="{{ asset('js/landing/shorten.js') }}"></script>
  <script src="{{ asset('js/landing/shorten3.js') }}"></script>
@endsection

@section('content')
<main>
  <!-- galeri -->
    @include('content.landing.1news')
  <!-- end galeri -->

  <!-- Berita Terbaru -->
    @include('content.landing.2lastest')
  <!-- end Berita Terbaru -->

  <!-- videos -->
    @include('content.landing.3videos')
  <!-- end videos -->

  <!-- news slider -->
  {{--
    @include('content.landing.4newsSlider')
    --}}
  <!-- end news slider -->

  <!-- Cerita Santri -->
    @include('content.landing.5topPost')
  <!-- end Cerita Santri -->

  <!-- last post -->
  {{--
    @include('content.landing.6lastPost')
    --}}
  <!-- end last post -->

  <!-- Subscribe -->
  {{--
    @include('content.landing.7subscribe')
    --}}
  <!-- end Subscribe -->
</main>
@endsection
