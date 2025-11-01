@extends('component.app')

@section('content')

<div class="min-h-screen bg-gray-50">

    {{-- Hero Section --}}
    {{-- <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl">
                <h1 class="text-4xl font-bold text-gray-900 mb-6">Services</h1>
                <p class="text-lg text-gray-600 mb-8">
                    Chez ENERLOG TECHNOLOGY & DIGITAL SAS, nous sommes fiers d’offrir des solutions digitales complètes
                    et un service d’excellence au Togo.Notre équipe expérimentée accompagne vos projets de la conception à la mise en œuvre, 
                    en mettant notamment à disposition la plateforme CPay et des solutions numériques sur mesure.
                </p>
                <button onclick="window.open('{{$parameter['login_url']}}', '_blank')" 
                    class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg">
                    Créer un Compte
                </button>
            </div>
        </div>
    </section> --}}


    @foreach ($services as $solution)
        @foreach ($solution["services"] as $service)
            @if($loop->odd)
                <!-- Layout A : texte à gauche, images à droite -->
                <section id="{{$service['id']}}" class="py-16">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                             <div>
                                <div class="mb-6">
                                        <h2 class="flex flex-col sm:flex-row justify-center items-baseline gap-2 sm:gap-6 text-center text-gray-900 mb-2">
                                            <span class="text-3xl font-bold">{{ $service['name'] }}</span>
                                            

                                            <a href="{{ route('public.services.detail',[$solution['id'] ,$service['id']]) }}" class="hover:text-orange-400 text-orange-500 px-6 py-3">Lire Plus</a>
                                        </h2>
                                        
                                </div>

                                <p class="text-gray-600">{{ $service['description'] }}</p>        
                                <span class="text-sm font-bold text-secondary">{{ $service['price'] ?? "" }}</span>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                @if(is_array($service['images']))
                                    @foreach(array_slice($service['images'], 0, 2) as $img)
                                    <img src="{{ asset($img) }}" alt="Large Scale Construction" class="rounded-lg w-full h-auto">
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </section>
            @else
                <!-- Layout B : images à gauche, texte à droite -->
                <section id="{{$service['id']}}" class="py-16 bg-white">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                            <div>
                                <img src="{{ $service["images"][0] ?? '/fallback1.jpg' }}" alt="{{ $service["name"] }} image 1" class="rounded-lg w-full h-auto">
                            </div>
                            <div>
                                <div class="mb-6">
                                            <h2 class="flex flex-col sm:flex-row justify-center items-baseline gap-2 sm:gap-6 text-center text-gray-900 mb-2">
                                                <span class="text-3xl font-bold">{{ $service['name'] }}</span>
                                                <a href="{{ route('public.services.detail', [$solution['id'] ,$service['id']]) }}" class="hover:text-orange-600 text-orange-500 px-6 py-3">Lire Plus</a>
                                            </h2>
                                </div>
                                <p class="text-gray-600 mb-6">{{ $service["description"] }}</p>
                                <span class="text-sm font-bold text-secondary">{{ $service['price'] ?? "" }}</span>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
        @endforeach
           
    @endforeach

</div>


@endsection







