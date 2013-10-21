@extends('templates.main')

@section('title')
    Log In
@endsection

@section('content')

<div class="page-header">
    <h1 class="text-center">Log In</h1>
</div>

<div class="row">
    <div class="col-md-6 col-md-offset-3">

        @include('templates.login_form')

    </div>
</div>

@endsection