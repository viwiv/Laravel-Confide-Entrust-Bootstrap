@extends('templates.main')

@section('title')
	Register
@endsection

@section('content')

<div class="page-header text-center">
	<h1>Register</h1>
</div>

<div class="row">
	<div class="col-md-6 col-md-offset-3">

		<form method="POST" action="{{{ (Confide::checkAction('UserController@store')) ?: URL::to('user')  }}}" accept-charset="UTF-8">
			<input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
			<fieldset>
				<div class="form-group">
					<label for="username">{{{ Lang::get('confide::confide.username') }}}</label>
					<input class="form-control" placeholder="{{{ Lang::get('confide::confide.username') }}}" type="text" name="username" id="username" value="{{{ Input::old('username') }}}">
				</div>
				<div class="form-group">
					<label for="email">{{{ Lang::get('confide::confide.e_mail') }}}</label>
					<input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
				</div>
				<div class="form-group">
					<label for="password">{{{ Lang::get('confide::confide.password') }}}</label>
					<input class="form-control" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
				</div>
				<div class="form-group">
					<label for="password_confirmation">{{{ Lang::get('confide::confide.password_confirmation') }}}</label>
					<input class="form-control" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
				</div>

				@if ( Session::get('error') )
					<div class="alert alert-error alert-danger">
						@if ( is_array(Session::get('error')) )
							{{ head(Session::get('error')) }}
						@endif
					</div>
				@endif

				@if ( Session::get('notice') )
					<div class="alert alert-success">{{ Session::get('notice') }}</div>
				@endif

				<div class="form-actions form-group text-center">
				  <button type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.signup.submit') }}}</button>
				</div>

			</fieldset>
		</form>


	</div>
</div>

@endsection