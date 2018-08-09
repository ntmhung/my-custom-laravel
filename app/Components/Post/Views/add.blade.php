@extends('layouts.main')

@section('content')
    <h1>Create post</h1>
    <div class="create-post-form">
        <form>
            {{ csrf_field() }}
            Title: <input type="text" name="title" />
            Content: <input type="text" name="content" />
            <input type="submit" value="Submit">
        </form>
    </div>
@endsection