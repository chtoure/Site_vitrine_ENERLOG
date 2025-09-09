@extends('component.app')

@section('content')

    @if(empty($equipes))
        <p>Aucun membre trouvé.</p>
    @else
        @foreach($equipes as $equipe)
            <div style="border: 1px solid #ccc; padding: 15px; margin: 10px 0; border-radius: 8px;">
                @foreach($equipe as $key => $value)
                    @if($key === 'image')
                        <img src="{{ asset($value) }}" 
                             alt="Image du membre" 
                             style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin-right: 20px; float: left;">
                    @else
                        <p><strong>{{ ucfirst($key) }} :</strong> {{ $value }}</p>
                    @endif
                @endforeach
                <div style="clear: both;"></div>
                <hr>
            </div>
        @endforeach
    @endif

@endsection