@extends('component.app')

@section('content')

    <p>
        @foreach ($equipe as $key => $value)
            @if($key === 'image')
                <img src="{{ asset($value) }}" 
                     alt="Photo de l'équipe" 
                     style="width: 100px; height: 100px; border-radius: 8px; margin: 10px 0; display: block;">
            @else
                <p><strong>{{ ucfirst($key) }} :</strong> {{ $value }}</p>
            @endif
        @endforeach
    </p>

@endsection