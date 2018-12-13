@extends('layouts.app_admin')

@section('content')
<!--start l-main-->
      <main class="l-main js-main">
          <div class="l-main-block"></div>
              <div class="page-number">
                  Page <span >1/4</span>
              </div>
              <div class="archive">
                  <ul class="archive-list">
                    @foreach($content as $contents)
                      <li class="archive-item">
                          <article class="card">
                              <a href="{!! url('/content_details'.$contents->id) !!}" class="card-link">
                                  <!-- <img src="../assets/images/sample1.jpg" alt="" class="card-image"> -->
                                  <div class="card-bottom">
                                      <h1 class="card-title">{!! $contents->title !!}</h1>
                                      <time class="card-date" datetime="2016-9-16">
                                          {!! date('M d, Y', strtotime($contents->created_at)) !!}
                                      </time>
                                  </div>
                              </a>
                            </article>
                      </li>
                      @endforeach
                  </ul>
              </div>
              <div class="paginate">
                  <a href="#" class="paginate-prev is-disable">
                      <span class="paginate-prev-arrow"></span>
                  </a>
                  <a href="#" class="paginate-number is-current">1</a>
                  <a href="#" class="paginate-number">2</a>
                  <a href="#" class="paginate-number">3</a>
                  <a href="#" class="paginate-number">4</a>
                  <a href="#" class="paginate-next">
                      <span class="paginate-next-arrow"></span>
                  </a>
              </div>
          </div>
      </main>
      <!--end l-main-->


@endsection
