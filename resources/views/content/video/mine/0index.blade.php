@extends('base.base')

@section('title', 'Video Saya | MDS Kediri')

@section('content')
<section class="videoPage section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mb-5 mb-lg-0">
        <div class="blog_left_sidebar">
          <div class="text">
            <h1>
              video saya
            </h1>
          </div>
          @include('content.video.mine.1post')
          @include('content.video.2pagination')
        </div>
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
