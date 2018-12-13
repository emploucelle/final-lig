@extends('layouts.app')

@section('content')
 <!--start l-contents-->
    <div class="l-container u-clear">

        <!--start l-main-->
        <main class="l-main js-main">
            <div class="l-main-block"></div>
           <form class="form-horizontal" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                <label for="username" class="form-title">USER ID</label>
                <input type="text" id="username" name="username" class="input input-text">
                <label for="password" class="form-title">PASSWORD</label>
                <input type="text" id="password" name="password" class="input input-text">
                <label for="submit" class="form-button">
                    <div class="button">
                        <p class="button-text">Login</p>
                    </div>
                </label>
                    <input type="submit" id="submit" class="input input-submit">
                    <!-- <button type="submit" id="submit" class="form-button">
                        Login
                    </button> -->
            </form>
        </main>
        <!--end l-main-->

    </div>
@endsection
