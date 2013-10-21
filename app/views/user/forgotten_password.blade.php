@extends('templates.main')

@section('title')
    Forgotten Password
@endsection

@section('content')

<div class="page-header">
    <h1 class="text-center">Forgotten Password</h1>
</div>

<div class="row">
    <div class="col-md-6 col-md-offset-3">

        <form method="POST" action="{{ (Confide::checkAction('UserController@do_forgot_password')) ?: URL::to('/user/forgot') }}" accept-charset="UTF-8">
            <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
           
            <div class="form-group">
                <label for="email">{{{ Lang::get('confide::confide.e_mail') }}}</label>
                <input class="form-control" tabindex="1" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
            </div>
                
            <div class="form-group text-center">
                <button tabindex="2" type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.forgot.submit') }}}</button>
            </div>

            @if ( Session::get('error') )
                <div class="alert alert-danger">{{{ Session::get('error') }}}</div>
            @endif

            @if ( Session::get('notice') )
                <div class="alert alert-success">{{{ Session::get('notice') }}}</div>
            @endif
        </form>

    </div>
</div>

@endsection