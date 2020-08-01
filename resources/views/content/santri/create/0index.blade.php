@extends('base.base')

@section('title', 'Buat Testimoni | MDS Kediri')

@section('js')
  <script src="{{ asset('js/santri/datepicker.js') }}"></script>
@endsection

@section('content')
<section class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-xl-8">
        @include('content.santri.create.1form')
      </div>
      <div class="col-xl-4">
        <div class="blog_right_sidebar">
          @include('content.santri.3search')
          @include('base.countKonten')
          @include('content.santri.6widget')
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
