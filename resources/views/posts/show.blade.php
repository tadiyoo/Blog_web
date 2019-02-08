@extends('layouts.app') 

<!-- step_34 -->

@section('content')
    <br>
    <a href="/posts" class="btn btn-primary">Go Back</a>

    <h1> {{$post->title}} : </h1>  
     <img style="width:150px;height:150px" src="/storage/cover_images/{{$post->cover_image}}">  <!-- this url will access the image of file from public folder/storage/cover_images/ folder and the file name is come in from the database of post table field of cover_image that is setted there to these specific post  -->
<br><br>
    <div>
      <!--  {{$post->body}} --> 
        {!!$post->body!!} 
    </div>
    <hr>
    <small> Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
       @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id) 
                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

            
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'text-right'])!!}  
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}} 
                {!!Form::close()!!} 
            @endif
         @endif  
            
@endsection