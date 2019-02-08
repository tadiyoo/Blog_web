@extends('layouts.app') 

@section('content')  
    <!-- <h1>Services</h1> 
     <p>This is Service Page</p> -->

    <h1>{{$title}}</h1>
    @if(count($services) > 0) 
        <ul>
            <div class="list-group">
                @foreach($services as $service)
                    <li class="list-group-item">{{$service}}</li> 
                @endforeach
            </div>
        </ul>
    @endif
@endsection
