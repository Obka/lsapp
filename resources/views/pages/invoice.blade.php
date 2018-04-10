@extends('layouts.app')

@section('content')
{{ $post = Post::find($id)->price) }}
    {!!Form::open(['action' => ['ZarinpalController@request', $post->price], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{Form::submit('Pay', ['class' => 'btn btn-success'])}}
    {!!Form::close() !!}
@endsection