@extends('component.app')

@section('content')
<div class="min-h-screen bg-gray-50">

    {{-- HERO --}}
    <section class="bg-white py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Découvrez l’actualité et les innovations d’Enerlog
                </h1>
                <p class="text-lg text-gray-600 mb-8">
                    Restez connecté aux dernières nouvelles d’Enerlog : projets phares, avancées technologiques et initiatives qui 
                    façonnent l’avenir du numérique. Chaque article reflète notre vision, notre expertise et notre engagement à accompagner 
                    nos partenaires vers des solutions toujours plus performantes et durables.
                </p>
                <a href="{{ $parameter['login_url'] }}" class="inline-block px-6 py-3 bg-orange-500 hover:bg-orange-600 text-white rounded-lg">
                    Créer un compte
                </a>
            </div>
        </div>
    </section>

    {{-- Liste des actualités --}}
    @foreach($dataNews as $index => $item)
        @php
            $images = $item['images'] ?? [];
            $imgCount = is_array($images) ? count($images) : 0;
        @endphp

        <section class="py-16 {{ $loop->even ? 'bg-white' : '' }}">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                    {{-- Texte --}}
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">{{ $item['name'] }}</h2>
                        <p class="text-gray-600 mb-6">
                            {{ \Illuminate\Support\Str::limit($item['content'] ?? '', 350, '...') }}
                        </p>

                        {{-- Lien vers le détail --}}
                        <a href="{{ route('public.news.detail', $item['id']) }}"
                           class="inline-block px-6 py-3 bg-orange-500 hover:bg-orange-600 text-white rounded-lg">
                            Lire plus
                        </a>
                    </div>

                    {{-- Images --}}
                    <div>
                        @if($imgCount === 1)
                            <img src="{{ asset($images[0]) }}" alt="{{ $item['name'] }}" class="w-full h-96 md:h-[480px] object-cover rounded-lg">
                        @elseif($imgCount > 1)
                            <div class="grid grid-cols-2 gap-4">
                                @foreach(array_slice($images, 0, 2) as $image)
                                    <img src="{{ asset($image) }}" alt="{{ $item['name'] }}" class="w-full h-48 md:h-60 object-cover rounded-lg">
                                @endforeach
                            </div>
                        @else
                            <div class="w-full h-48 md:h-60 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400">
                                Pas d'image disponible
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </section>
    @endforeach

</div>
@endsection
