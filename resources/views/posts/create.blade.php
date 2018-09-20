@extends('layout.app')

@section('content')
    <h1> Create a Post </h1>
    {!! Form::open(['action' => 'PostController@store','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}<!-- column, text-->
            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Content')}}
            {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Write your Content'])}}
        </div>
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection