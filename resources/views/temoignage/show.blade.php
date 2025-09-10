@extends('component.app')

@section('content')

    <p>
        @foreach ($un_temoignage as $key => $value)
            <p>{{ $key }} : {{ $value }}</p>
        @endforeach
    </p>

@endsection