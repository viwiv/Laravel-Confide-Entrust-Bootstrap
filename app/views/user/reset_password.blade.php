@extends('templates.main')

@section('title')
	Reset Password
@endsection

@section('content')

<div class="page-header">
	<h1 class="text-center">Reset Password</h1>
</div>

<div class="row">
	<div class="col-md-6 col-md-offset-3">

		<form method="POST" action="{{{ (Confide::checkAction('UserController@do_reset_password')) ?: URL::to('/user/reset') }}}" accept-charset="UTF-8">
			<input type="hidden" name="token" value="{{{ $token }}}">
			<input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
			
			<div class="form-group">
				<label for="password">{{{ Lang::get('confide::confide.password') }}}</label>
				<input class="form-control" tabindex="1" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
			</div>

			<div class="form-group">
				<label for="password_confirmation">{{{ Lang::get('confide::confide.password_confirmation') }}}</label>
				<input class="form-control" tabindex="2" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
			</div>

			@if ( Session::get('error') )
				<div class="alert alert-danger">{{{ Session::get('error') }}}</div>
			@endif

			@if ( Session::get('notice') )
				<div class="alert alert-success">{{{ Session::get('notice') }}}</div>
			@endif

			<div class="form-actions text-center">
				<button type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.forgot.submit') }}}</button>
			</div>

		</form>


	</div>
</div>

@endsection