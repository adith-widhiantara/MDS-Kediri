@extends('base.base')

@section('title')
{{ $santri -> judul }} | MDS Kediri
@endsection

@section('content')
<section class="blog_area single-post-area section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 posts-list">
        @include('content.santri.detail.1content')
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
