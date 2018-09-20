@extends('layout.app')

@section('content')
    <h1> Update  Post </h1>
    {!! Form::open(['action' => ['PostController@update',$post->id],'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}<!-- column, text-->
            {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Content')}}
            {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Write your Content'])}}
        </div>
            {{form::hidden('_method','PUT')}}
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection