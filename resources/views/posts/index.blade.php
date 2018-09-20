@extends('layout.app')

@section('content')

<h1> Announcement </h1>
@if(count($post)>0) <!--model-->
    @foreach ($post as $posts)
        <div class = "well">
        <h3><a href="/posts/{{$posts->id}}"> {{$posts->title}}</a></h3>
            <small> created on {{$posts->created_at}}</small> <!-- db collum -->
        </div>
    @endforeach
    {{$post->links()}}
@else 
<p> no data found </p>
@endif
            
@endsection
