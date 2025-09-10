@extends('component.app')

@section('content')

<p>
    @foreach ($temoignages as $temoignage)
        @foreach ($temoignage as $key => $value)
            <p>{{ $key }} : {{ $value }}</p>
        @endforeach
        <hr>
    @endforeach

    @if (empty($temoignages))
        <p>Aucun témoignage disponible.</p>
    @endif
</p>

@endsection