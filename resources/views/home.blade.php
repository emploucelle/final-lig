@extends('layouts.app_admin')

@section('content')
          <!--start l-contents-->
          <div class="l-container u-clear">


              <!--start l-main-->
              <main class="l-main js-main">
                  <div class="l-main-block"></div>
                  <div class="archive">
                      <ul class="archive-list">
                        @foreach($content as $contents)



                        <li class="archive-item">
                            <article class="card">
                            <a href="{!! url('/content_details'.$contents->id) !!}" class="card-link">
                                <img src="{!! $contents->filename !!}" alt="" class="card-image">
                                <div class="card-bottom">
                                    <h1 class="card-title">{!! $contents->title !!}</h1>
                                    <time class="card-date" datetime="2016-9-16">
                                        {!! date('d M, Y', strtotime($contents->created_at)) !!}
                                    </time>
                                </div>
                            </a>
                            </article>
                        </li>

                        @endforeach

                      </ul>
                  </div>
                  <a href="{!! url('/content_archive') !!}" class="archive-button">
                      <div class="button">
          <p class="button-text">More</p>
          </div>
                  </a>
              </main>
              <!--end l-main-->

          </div>
          <!--end l-contents-->

@endsection
