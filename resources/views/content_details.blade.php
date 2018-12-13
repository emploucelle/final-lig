@extends('layouts.app_admin')

@section('content')

@foreach($content as $contents)
<!-- {!! $contents->title !!} -->
@endforeach
<!--start l-main-->
      <main class="l-main js-main">
          <div class="l-main-block"></div>
          <div class="single">
              <img src="{!! $contents->filename !!}" alt="" class="single-image">
              <div class="l-container u-clear">
                  <h1 class="single-title">{!! $contents->title !!}</h1>
                  <time class="single-date" datetime="2016-9-16">{!! date('d M, Y', strtotime($contents->created_at)) !!}</time>
                  <p class="single-desc">{!! $contents->contents !!}</p>
                  <div class="single-button">
                      <div class="button">
                    <p class="button-text">Top</p>
                  </div>
                  </div>
              </div>
          </div>
      </main>
      <!--end l-main-->

@endsection
