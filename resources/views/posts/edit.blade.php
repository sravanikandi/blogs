@extends('layouts.app')
@section('content')
{!! Form::model($posts,['method' => 'patch','route' => ['posts.update', $posts->id]]) !!}
{{--{!!Form::open(['method'=>'PATCH','action'=>'App\Http\Controllers\postsController@update])!!}--}}
<div class= "form-group">
    {!!Form::label('title', 'Title:')!!}
    {!!Form::text('title',null,['class'=>'form-control'])!!}
    </div>
{{--<input type="text" name="title" placeholder="title" value="{{$posts->title}}">--}}
<div class= "form-group">
    {!!Form::label('body', 'Body:')!!}
    {!!Form::textarea('body',null,['class'=>'form-control'])!!}
    </div>

{{--<textarea name="body" name="body" placeholder="content" value="{{$posts->body}}">--}}
</textarea>
<div class= "form-group">
   
    {!!Form::submit('submit',['class'=>'btn btn-primary'])!!}
    </div>
{{--<input type="submit" name="submit"  >--}}


       
{!! Form::close() !!}
@endsection
