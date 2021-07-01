@extends('layouts.app')
@section('content')

<h1>BLOGS</h1>
<br>
<a href="/posts/create" class="btn btn-primary">Addblog</a>
@if(count($posts)>0)
@foreach($posts as $post)
<ul><li> <h3><a href="/posts/{{$post->id}}"> {{$post->title}}</a></h3></li></ul>
@endforeach


@else
<p>no posts found</p>

@endif
@endsection
