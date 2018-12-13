@extends('layouts.app_admin')

@section('content')

  <!--start l-contents-->
    <div class="l-container u-clear">

        <!--start l-main-->
        <main class="l-main js-main">
            <div class="l-main-block"></div>
          <!-- <form class="form-horizontal" method="POST" action="{{ url('/save_admin_post') }}"> -->
          {!! Form::open(array(
            'url' => '/save_admin_post',
            'class' => 'form',
            'files' => true)) !!}
            {{ csrf_field() }}
                <label for="image" class="form-title">EYE CATCH IMAGE
                    <div class="form-file u-clear">
                        <span class="form-file-button">UPLOAD</span>
                    </div>
                </label>
                <!-- <input type="file" id="image" class="input input-image"> -->
                {!! Form::file('image', null, array('class'=>'input input-image')) !!}
                <label for="title" class="form-title">TITLE</label>
                <div class="form-body">
                    <!-- <input type="text" id="title" class="input input-text"> -->
                    {!! Form::text('title', null, array('class'=>'input input-text')) !!}
                </div>
                <label for="contents" class="form-title">CONTENTS</label>
                <div class="form-textarea">
                    <!-- <textarea name="inquiry" id="inquiry" cols="30" rows="10" class="input input-contents"></textarea> -->
                    {!! Form::textarea('inquiry', null, array('class'=>'input input-text')) !!}
                </div>
                <label for="submit" class="form-button">
                    <div class="button">
                    <p class="button-text">Submit</p>
                  </div>
                                </label>
                                <input type="submit" id="submit" class="input input-submit">
                                <a href="#" class="form-button">
                                    <div class="button">
                    <p class="button-text">Back</p>
                  </div>
                </a>
            <!-- </form> -->
            {!! Form::close() !!}
        </main>
        <!--end l-main-->


@endsection
