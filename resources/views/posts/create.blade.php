@extends('layouts.app')
@section('content')
{!!Form::open(['method'=>'POST','action'=>'App\Http\Controllers\postsController@store'])!!}
<div class= "form-group">
{!!Form::label('title', 'Title:')!!}
{!!Form::text('title',null,['class'=>'form-control'])!!}
</div>
    {{--<input type="text" name="title" placeholder="title">--}}

   
    <div class= "form-group">
        {!!Form::label('body', 'Body:')!!}
        {!!Form::textarea('body',null,['class'=>'form-control'])!!}
        </div>
    

{{--<textarea name="body" name="body" placeholder="body text"></textarea>--}}
 
<div class= "form-group">
   
    {!!Form::submit('submit',['class'=>'btn btn-primary'])!!}
    </div>
{{--<input type="submit" value="submit">--}}
{!!Form::close()!!}
@endsection

