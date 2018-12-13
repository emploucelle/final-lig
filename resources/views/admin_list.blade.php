@extends('layouts.app_admin')

@section('content')

    <!--start l-contents-->
      <div class="l-container u-clear">

          <!--start l-main-->
          <main class="l-main js-main">
              <div class="l-main-block"></div>
              <a href="{!! url('/admin_post') !!}" class="l-main-button">
                  <div class="button">
                <p class="button-text">New Article</p>
              </div>
              </a>
              <ul class="archive archive-admin">
                @foreach($content as $contents)
                      <li class="archive-item">
                      <a href="{!! url('/content_details'.$contents->id) !!}" class="post-article">
                        <time class="post-article-date" datetime="2016-9-16">{!! date('d M, Y', strtotime($contents->created_at)) !!}</time>
                        <h1 class="post-article-title">{!! $contents->title !!}</h1>
                      </a>
                      </li>
                      @endforeach


              </ul>
          </main>
          <!--end l-main-->

      </div>
      <!--end l-contents-->

  @endsection
