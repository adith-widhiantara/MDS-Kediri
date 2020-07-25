@extends('base.base')

@section('title', 'MDS Kediri')

@section('content')
<main>
  <!-- news -->
    @include('content.landing.1news')
  <!-- end news -->

  <!-- lastest -->
    @include('content.landing.2lastest')
  <!-- end lastest -->

  <!-- videos -->
    @include('content.landing.3videos')
  <!-- end videos -->

  <!-- news slider -->
    @include('content.landing.4newsSlider')
  <!-- end news slider -->

  <!-- top post -->
    @include('content.landing.5topPost')
  <!-- end top post -->

  <!-- last post -->
    @include('content.landing.6lastPost')
  <!-- end last post -->

  <!-- Subscribe -->
    @include('content.landing.7subscribe')
  <!-- end Subscribe -->
</main>
@endsection
