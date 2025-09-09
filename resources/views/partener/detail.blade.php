@extends('component.app')

@section('content')

    <p>
        @foreach ($partener as $key=>$value)
            <p>{{ $key }} : {{ $value }}</p>
        @endforeach
    </p>

@endsection