@extends('component.app')

@section('content')
<div class="min-h-screen bg-gray-50">

    {{-- Header Section --}}
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $news['name'] }}</h1>
                <p class="text-lg text-gray-600 mb-6">
                    {{ $news['content'] }}
                </p>

                {{-- Bouton vers le lien officiel si dispo --}}
                @if(count($news['links']) > 0)
                    <div class="flex items-center space-x-4">
                        @foreach ($news['links'] as $link)
                            @if(isset($link['icon']))
                                @if ($link['icon'] == 'tiktok')
                                    <a href="https://www.tiktok.com/@toncompte" target="_blank" class="text-secondary hover:text-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                                            <path d="M12.5 2c.3 3.4 2.4 5.4 5.8 5.7v2.9a8.7 8.7 0 0 1-3.6-.7v4.9a6.4 6.4 0 1 1-6.4-6.4c.2 0 .5 0 .7.1v3a3.5 3.5 0 1 0 2.5 3.4V2h1z"/>
                                        </svg>
                                    </a>
                                @else
                                    <a 
                                        href="{{ $link['url'] }}" 
                                        target="_blank"
                                        title="Voir sur {{ ucfirst($link['icon'] ?? 'lien') }}"
                                        class="text-secondary hover:text-secondary"
                                    >
                                        <i data-lucide="{{$link['icon']}}" class="w-5 h-5"></i> 
                                    </a>
                                @endif
                            @endif
                        @endforeach
                    </div>   
                @endif
            </div>
        </div>
    </section>

    {{-- Images Section --}}
    @if(!empty($news['images']))
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($news['images'] as $image)
                        <div class="overflow-hidden rounded-lg shadow">
                            <img src="{{ asset($image) }}" alt="{{ $news['name'] }}" class="object-cover w-full h-64">
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- Pourquoi suivre nos actualités --}}
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <div>
                    @if(!empty($news['images'][0]))
                        <img src="{{ asset($news['images'][0]) }}" alt="{{ $news['name'] }}" class="rounded-lg">
                    @else
                        <img src="{{ asset('images/default-news.jpg') }}" alt="Enerlog" class="rounded-lg">
                    @endif
                </div>

                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Pourquoi suivre nos actualités ?</h2>
                    <p class="text-gray-600 mb-8">
                        Nos actualités vous permettent de rester connectés à l’innovation, aux projets en cours et aux 
                        réussites qui façonnent l’avenir du numérique avec Enerlog. Chaque article est une opportunité 
                        de découvrir nos avancées et notre engagement.
                    </p>

                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div class="w-2 h-2 bg-orange-500 rounded-full mt-2"></div>
                            <p class="text-gray-700">Des projets innovants qui transforment les entreprises.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-2 h-2 bg-orange-500 rounded-full mt-2"></div>
                            <p class="text-gray-700">Une expertise numérique partagée avec transparence.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-2 h-2 bg-orange-500 rounded-full mt-2"></div>
                            <p class="text-gray-700">Un accompagnement sur mesure pour chaque partenaire.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>
@endsection
