@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h2>{{$article->title}}</h2><br>
        <div id = "content">     
            <p>{{$article->body}}</p>
        </div>
    </div>
</div>
@endsection
