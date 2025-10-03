@extends("component.app")

@section('content')
<div class="min-h-screen bg-gray-50">

    {{-- Progress bar mobile --}}
    <div id="progress-mobile"
        class="fixed top-0 left-0 h-1 bg-gradient-to-r from-orange-400/30 to-orange-400 md:hidden z-50"
        style="width: 0%">
    </div>

    {{-- Header Section --}}
    <section class="bg-white py-8">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">

                <a href="{{route("public.services.index")}}" class="inline-flex items-center text-primary hover:text-primary/80 mb-6">
                    {{-- Icône retour --}}
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                    Retour aux Services
                </a>

                <div class="space-y-4">
                    <h1 class="text-4xl font-bold text-gray-900 leading-tight">
                       {{$service["name"]}}
                    </h1>
                </div>
            </div>
        </div>
    </section>

    {{-- Main Article --}}
    <section class="py-6 sm:py-8 lg:py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <div class="grid gap-8 md:grid-cols-2 lg:gap-12">

                    {{-- Left Column - Image --}}
                    <div>
                        {{-- <div class="h-64 overflow-hidden rounded-lg shadow-lg md:h-auto">
                            <img src="{{ asset($service["images"][0]) }}"
                                 alt="Comment l’innovation transforme le digital"
                                 class="h-full w-full object-cover object-center">
                        </div> --}}

                        <img src="{{ $service["images"][0] ?? '/fallback1.jpg' }}" alt="{{ $service["name"] }} image 1" class="rounded-lg w-full h-auto">
                        
                    </div>

                    {{-- Right Column - Content --}}
                    <div>
                        <p class="prose prose-lg max-w-none prose-headings:text-gray-900 prose-p:text-gray-600">
                            {{$service["description"]}}
                        </p>

                        <hr class="my-8">

                        {{-- Contenus --}}
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900 flex items-center gap-2">
                                Contenus Services
                            </h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 border rounded text-sm text-gray-600">Innovation</span>
                                <span class="px-3 py-1 border rounded text-sm text-gray-600">Technologie</span>
                                <span class="px-3 py-1 border rounded text-sm text-gray-600">Digital</span>
                            </div>
                        </div>

                        <hr class="my-8">

                        {{-- Partage --}}
                        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M4 12v.01M12 4v.01M20 12v.01M12 20v.01M12 12l8-8M12 12l-8-8M12 12l8 8M12 12l-8 8"/>
                                </svg>
                                <span class="text-gray-600">Partager cet article</span>
                            </div>
                            <div class="flex gap-2">
                                <a href="#" class="px-3 py-1 border rounded">LinkedIn</a>
                                <a href="#" class="px-3 py-1 border rounded">Twitter</a>
                                <a href="#" class="px-3 py-1 border rounded">Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Articles similaires --}}
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-2xl font-bold text-gray-900 mb-8 flex items-center gap-2">
                    Articles similaires
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <a class="group block border rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                        <img src="{{ asset('images/article2.jpg') }}"
                             alt="Les tendances digitales"
                             class="h-48 w-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="p-6 space-y-3">
                            <span class="inline-block bg-primary/10 text-primary px-3 py-1 rounded">
                                Business
                            </span>
                            <h3 class="text-lg font-semibold text-gray-900 group-hover:text-primary line-clamp-2">
                                Les tendances digitales en 2025
                            </h3>
                            <p class="text-sm text-gray-600 line-clamp-2">
                                Découvrez les principales tendances qui façonnent l’économie numérique.
                            </p>
                            <div class="flex items-center gap-4 text-xs text-gray-500">
                                <span>4 min de lecture</span>
                                <span>•</span>
                                <span>01/09/2025</span>
                            </div>
                        </div>
                    </a>
                    <a class="group block border rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                        <img src="{{ asset('images/article3.jpg') }}"
                             alt="IA et innovation"
                             class="h-48 w-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="p-6 space-y-3">
                            <span class="inline-block bg-primary/10 text-primary px-3 py-1 rounded">
                                Innovation
                            </span>
                            <h3 class="text-lg font-semibold text-gray-900 group-hover:text-primary line-clamp-2">
                                L’intelligence artificielle au service de l’innovation
                            </h3>
                            <p class="text-sm text-gray-600 line-clamp-2">
                                Comment l’IA change la manière dont les entreprises innovent.
                            </p>
                            <div class="flex items-center gap-4 text-xs text-gray-500">
                                <span>6 min de lecture</span>
                                <span>•</span>
                                <span>15/08/2025</span>
                            </div>
                        </div>
                    </a>
                    <a class="group block border rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                        <img src="{{ asset('images/article4.jpg') }}"
                             alt="Cloud et productivité"
                             class="h-48 w-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="p-6 space-y-3">
                            <span class="inline-block bg-primary/10 text-primary px-3 py-1 rounded">
                                Cloud
                            </span>
                            <h3 class="text-lg font-semibold text-gray-900 group-hover:text-primary line-clamp-2">
                                Le cloud : booster de productivité
                            </h3>
                            <p class="text-sm text-gray-600 line-clamp-2">
                                Découvrez comment le cloud améliore l’efficacité des entreprises modernes.
                            </p>
                            <div class="flex items-center gap-4 text-xs text-gray-500">
                                <span>7 min de lecture</span>
                                <span>•</span>
                                <span>20/07/2025</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection