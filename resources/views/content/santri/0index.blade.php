@extends('base.base')

@section('title', 'Testimoni | MDS Kediri')

@section('js')
  <script src="{{ asset('js/santri/shorten.js') }}"></script>
@endsection

@section('content')
<section class="blog_area section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mb-5 mb-lg-0">
        <div class="blog_left_sidebar">
          @include('content.santri.1post')
          @include('content.santri.2pagination')
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
