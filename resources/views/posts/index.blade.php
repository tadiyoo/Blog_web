@extends('layouts.app') 
@section('content') 
    <h1> Posts : </h1>
    </br>
    @if(count($posts) > 0)  
        @foreach($posts as $post)
         <div class="list-group-item list-group-item-secondary">  
           <div class="row">
                <div class="col-md-4 col-sm-4"> 
                  <img style="width:150px;height:150px" src="/storage/cover_images/{{$post->cover_image}}">  <!-- this url will access the image of file from public folder/storage/cover_images/ folder and the file name is come in from the database of post table field of cover_image that is setted there  to all post -->
                </div>
                 <div class="col-md-8 col-sm-8">
                    <h3><a href="/posts/{{$post->id}}" >{{$post->title}}</a></h3>  
                    <small> Written on {{$post->created_at}} by {{$post->user->name}}</small>
                </div>
            </div>
        </div>
        @endforeach
        {{$posts->links()}} 
    @else
        <p> No Posts found </p>

    @endif
@endsection