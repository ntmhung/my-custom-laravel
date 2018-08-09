@extends('layouts.main')

@section('content')
    <h1>Post Page</h1>
    <a href="/post/add">Add new</a>

    @if(!empty($posts))
        @foreach($posts as $post)
            <div>
                <h2><a href="{{Request::path()}}/{{$post['slug']}}">{{$post['title']}}</a></h2>
                <p>{{$post['content']}}</p>
            </div>
        @endforeach
    @endif
@endsection