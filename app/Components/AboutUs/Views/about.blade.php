@extends('core::main')

@section('content')
    <h2>{{$title}}</h2>
    <div>
        <p>{{$address}}</p>
        @if(!empty($phones))
            <p>Phone:
                @foreach($phones as $phone)
                    <span>{{$phone}}</span>
                @endforeach
            </p>
        @endif
    </div>
@endsection