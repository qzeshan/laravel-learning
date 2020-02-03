@extends('layout')
@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                @foreach ($articles as $article)
                    <div class="title">
                    <h2><a href="/articles/{{$article->id}}" style="text-decoration:none">{{$article->title}}</a></h2>
                    <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                    <p>{{$article->excerpt}}</p>
                @endforeach
                
            </div>
        </div>
    </div>
    
@endsection