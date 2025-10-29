@extends("component.app")

@section('content')

@php $hasSidebar = is_array($service['content']) && count($service['content']) > 0; @endphp


<div class="min-h-screen bg-gray-50">

    {{-- Progress bar mobile --}}
    <div id="progress-mobile"
        class="fixed top-0 left-0 h-1 bg-gradient-to-r from-orange-400/30 to-orange-400 md:hidden z-50"
        style="width: 0%">
    </div>

    {{-- Header Section --}}
    {{-- <section class="bg-white py-8">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">

                <a href="{{route("public.services.index")}}" class="inline-flex items-center text-primary hover:text-primary/80 mb-6">
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
    </section> --}}

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

                        @if ($hasSidebar)
                                
                            {{-- Contenus --}}
                            <div class="space-y-4">
                                <h3 class="text-lg font-semibold text-gray-900 flex items-center gap-2">
                                    Contenus Services
                                </h3>
                            <div class="space-y-6">
                                    <ul class="space-y-3">
                                        @foreach($service['content'] as $content)
                                            <li class="flex items-center space-x-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                                </svg>
                                                <span class="text-sm text-muted-foreground">{{ $content }}</span>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <hr class="my-8">
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Quels que Services  --}}
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-2xl font-bold text-gray-900 mb-8 flex items-center gap-2">
                    Quels que Services
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    @foreach (collect($services[0]['services'])->where('id', '!=', $service['id'])->take(3) as $itemService)
                        <a href="{{ route('public.services.detail',[$services[0]['id'],  $itemService['id']]) }}" 
                        class="group block border rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                            <img src="{{ asset($itemService['images'][0] ?? '/fallback.jpg') }}"
                                alt="{{ $itemService['name'] }}"
                                class="h-48 w-full object-cover group-hover:scale-105 transition-transform duration-300">
                            <div class="p-6 space-y-3">
                                <h3 class="text-lg font-semibold text-gray-900 group-hover:text-primary line-clamp-2">
                                    {{ $itemService['name'] }}
                                </h3>
                                <p class="text-sm text-gray-600 line-clamp-2">
                                    {{ Str::limit($itemService['description'], 80) }}
                                </p>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </section>


</div>
@endsection