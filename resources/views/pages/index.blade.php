@extends('layouts.app') 
@section('content')

<div class="jumbotron text-center">
    <h1 class="display-4">{{ $title }}</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <p class="lead">
        <a class="btn btn-primary" href="{{ url('/dashboard') }}" role="button">Dashboard</a>
        <a class="btn btn-success" href="/register" role="button">Register</a>
    </p>
</div>
@endsection