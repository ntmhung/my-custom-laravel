@extends('layouts.main')

@section('content')
    @if(!empty($post))
        <div>
            <h2>{{$post['title']}}</h2>
            <p>{{$post['content']}}</p>
        </div>
    @endif
@endsection