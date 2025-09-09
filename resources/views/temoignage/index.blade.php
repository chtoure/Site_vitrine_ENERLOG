@extends('component.app')

@section('content')

<section>
    <div class="">
        <h2>Voici les témoignages</h2>

        @forelse($temoignages as $temoignage)
            <div class="temoignage">
                <h3>{{ $temoignage['name'] ?? 'Anonyme' }}</h3>
                <p>{{ $temoignage['content'] ?? 'Aucun contenu' }}</p>
                @if(!empty($temoignage['image']))
                    <img src="{{ $temoignage['image'] }}" 
                         alt="{{ $temoignage['name'] }}" 
                         width="100" 
                         style="border-radius: 8px; margin: 10px 0; border: 1px solid #eee;">
                @endif
            </div>
            <hr>
        @empty
            <p>Aucun témoignage disponible.</p>
        @endforelse
    </div>
</section>

@endsection