@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-primary">Go back</a>
<h1>{{$posts->title}}</h1>

<h3>    {{$posts->body}}</h3>

<a href="/posts/{{$posts->id}}/edit" class="btn btn-primary">  edit</a>
<br>
{!! Form::open(['route' => ['posts.destroy', $posts->id], 'method' => 'delete']) !!}

{!!Form::submit('delete',['class'=>'btn btn-primary'])!!}
 {{-- <input type="submit" value="submit" > --}}
  
   
@endsection