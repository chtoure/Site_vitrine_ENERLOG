

@extends('component.app')

@section('content')

<p>
    @foreach ($parteners as $partener)
        @foreach ($partener as $key=>$value)
            <p>{{ $key }} : {{ $value }}</p>
        @endforeach
    @endforeach

</p>

@endsection