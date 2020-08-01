@extends('base.base')

@section('title', 'Video | MDS Kediri')

@section('content')
<section class="blog_area section-padding videoPage">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mb-5 mb-lg-0">
        @include('content.video.1post')
        @include('content.video.2pagination')
      </div>
      <div class="col-lg-4">
        <div class="blog_right_sidebar">
          @include('content.video.3search')
          @include('base.countKonten')
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
