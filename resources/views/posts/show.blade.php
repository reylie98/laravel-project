@extends('layout.app')

@section('content')

<h1>{{$post->title}}</h1>
<div>
    <small> post created on <strong> {{$post->created_at}}</strong></small><br></br>
    {!!$post->body!!}
    <hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
{!! Form::open(['action' => ['PostController@destroy',$post->id], 'method'=>'DELETE', 'class'=> 'pull-right']) !!}
    {{Form::submit('Delete','',['class' => 'btn btn-danger'])}}

{!! Form::close() !!}
</div>
@endsection