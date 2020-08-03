@extends('base.base')

@section('title', 'Testimoni Saya | MDS Kediri')

@section('js')
  <script src="{{ asset('js/galeri/index.js') }}"></script>
@endsection

@section('content')
<section class="santriIndex section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mb-5 mb-lg-0">
        <div class="blog_left_sidebar">
          <div class="text">
            <h1>
              testimoni saya
            </h1>
          </div>
          @include('content.santri.mine.1post')
          @include('content.santri.mine.2pagination')
        </div>
      </div>
      <div class="col-lg-4">
        <div class="blog_right_sidebar">
          @include('content.santri.3search')
          @include('base.countKonten')
          @include('content.santri.5recentTestimoni')
          @include('content.santri.6widget')
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
