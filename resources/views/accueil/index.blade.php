
@extends('component.app')

@section('content')

    @php
        use Illuminate\Support\Str;
    @endphp


    <style>[x-cloak]{display:none !important;}</style>



    <section class="py-8 relative" 
        x-data="{
            currentIndex: 0,
            itemsPerPage: 3,
            autoScrollInterval: null,
            totalItems: 6,

            init() {
                this.updateItemsPerPage();
                this.startAutoScroll();
                window.addEventListener('resize', () => this.updateItemsPerPage());
            },

            updateItemsPerPage() {
                if (window.innerWidth < 768) {
                    this.itemsPerPage = 1;
                } else if (window.innerWidth < 1024) {
                    this.itemsPerPage = 2;
                } else {
                    this.itemsPerPage = 3;
                }
            },

            get totalPages() {
                return Math.ceil(this.totalItems / this.itemsPerPage);
            },

            next() {
                this.currentIndex = (this.currentIndex + 1) % this.totalPages;
            },

            prev() {
                this.currentIndex = (this.currentIndex - 1 + this.totalPages) % this.totalPages;
            },

            goToPage(index) {
                this.currentIndex = index;
            },

            startAutoScroll() {
                this.stopAutoScroll(); // ← empêche plusieurs intervalles simultanés
                this.autoScrollInterval = setInterval(() => {
                    this.next();
                }, 5000);
            },

            stopAutoScroll() {
                if (this.autoScrollInterval) {
                    clearInterval(this.autoScrollInterval);
                    this.autoScrollInterval = null;
                }
            },

            resumeAutoScroll() {
                this.startAutoScroll();
            }
        }"
        @mouseenter="stopAutoScroll()" 
        @mouseleave="resumeAutoScroll()"
    >

        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Nos Actualités
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto italic">
                    Suivez nos dernières innovations et collaborations
                </p>
            </div>

            <div class="relative">
                <button 
                    @click="prev()"
                    class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 z-10 bg-white hover:bg-primary hover:text-white text-gray-800 rounded-full p-3 shadow-lg transition-all duration-300 group"
                    aria-label="Previous"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>

                <button 
                    @click="next()"
                    class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 z-10 bg-white hover:bg-primary hover:text-white text-gray-800 rounded-full p-3 shadow-lg transition-all duration-300 group"
                    aria-label="Next"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>

                <div class="overflow-hidden">
                    <div 
                        class="flex transition-transform duration-500 ease-out"
                        :style="`transform: translateX(-${currentIndex * 100}%)`"
                    >
                        @foreach ($news as $new)
                            <article class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4">
                                <div class="group border border-gray-200 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-500 hover:-translate-y-2 bg-white h-full">
                                

                                    <div class="relative overflow-hidden w-full h-56">
                                        <div class="absolute inset-0 bg-center bg-cover filter blur-sm"
                                            style="background-image: url('{{asset($new['images'][0])}}');">
                                        </div>
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                                        <div class="relative z-10 w-full h-full flex items-center justify-center">
                                            <img
                                                src="{{asset($new['images'][0])}}"
                                                alt="{{$new['name']}}"
                                                class="object-contain w-full h-full group-hover:scale-110 transition-transform duration-700"
                                            />
                                        </div>
                                    </div>
                                        
                                    
                                    <div class="p-6">
                                        <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-secondary transition-colors">
                                            {{$new['name']}}
                                        </h3>
                                        <p class="text-gray-600 text-sm leading-relaxed mb-6 line-clamp-3 italic">
                                            {{$new['content']}}
                                        </p>
                                        <div class="flex items-center space-x-4">
                                            @foreach ($new['links'] as $link)
                                                <a href="{{$link['url']}}" target="_blank" class="text-blue-600 hover:text-blue-800 transition">
                                                    <img src="{{asset($link['icon'])}}" class="w-6 h-6"/>
                                                </a>
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>

                <div class="flex justify-center items-center gap-2 mt-8">
                    <template x-for="(page, index) in totalPages" :key="index">
                        <button
                            @click="goToPage(index)"
                            class="transition-all duration-300"
                            :class="currentIndex === index ? 'w-8 h-3 bg-primary rounded-full' : 'w-3 h-3 bg-gray-300 rounded-full hover:bg-gray-400'"
                            :aria-label="'Go to page ' + (index + 1)"
                        ></button>
                    </template>
                </div>
            </div>

            <div class="mt-6 ">
                <a href="{{route('public.news.index')}}" 
                    class="inline-block bg-secondary text-white px-8 py-3 rounded-lg font-medium transition-colors duration-300 shadow-md hover:shadow-lg">
                    Voir plus
                </a>
            </div>
        </div>
    </section>



    <section class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-balance text-[#222222]">
                Quelques-uns de nos services
            </h2>
        </div>
        
        <div class="items-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 lg:gap-8">

                @foreach(array_slice($services[0]["services"], 0, 4) as $index => $service)
                    <a href="{{route('public.services.detail', [$services[0]['id'] ,$services[0]['id']])}}" class="group relative overflow-hidden rounded-3xl aspect-[16/10] cursor-pointer transition-transform hover:scale-105 shadow-lg">
                        <img src="{{ asset($service['images'][0]) }}" 
                            alt="Service 1" 
                            class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 p-6 flex items-center gap-4 bg-[#F29100]/90 min-h-28 rounded-tl-[120px]">
                            <div class="w-12 h-12  flex items-center justify-center flex-shrink-0 transform ">
                                <img class="" src="{{$service['icon']}}" alt="">
                            </div>
                            <div class="text-white">
                                <p class="hidden md:block text-sm font-medium uppercase tracking-wide">{{$service["description"]}}</p>
                                <p class="text-xl font-bold">{{$service["name"]}}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="mt-8">
                <a
                    href="{{route('public.services.index')}}"
                    class="inline-flex items-center justify-center bg-[#F29100] hover:bg-[#F29100]/90 text-white shadow-lg hover:shadow-xl transition-all duration-300 px-8 py-3 rounded-lg text-base font-semibold"
                    title="Voir détails"
                >
                    Voir plus
                    <svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

































    {{-- <section class="py-8 relative">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-6">
                <h2 class="text-2xl  font-bold text-foreground mb-4">
                    Nos Actualités
                </h2>
                <p class="text-muted-foreground text-lg max-w-2xl mx-auto italic">
                    Suivez nos dernières innovations et collaborations
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($news as $new)
                    <article 
                        class="group border border-border rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-500 hover:-translate-y-2"
                    >
                        <div class="relative overflow-hidden w-full h-56">

                            <div class="absolute inset-0 bg-center bg-cover filter blur-sm"
                                style="background-image: url('{{ asset($new['images'][0]) }}');">
                            </div>

                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>

                            <div class="relative z-10 w-full h-full flex items-center justify-center">
                                <img
                                    src="{{ $new['images'][0] }}"
                                    alt="{{ $new['name'] }}"
                                    class="object-contain w-full h-full group-hover:scale-110 transition-transform duration-700"
                                />
                            </div>
                        </div>

                        <div class="p-3">
                            <h3 class="text-xl font-bold text-card-foreground mb-3 line-clamp-2 group-hover:text-primary transition-colors">
                                {{ $new['name'] }}
                            </h3>
                            <p class="text-muted-foreground text-sm leading-relaxed mb-6 line-clamp-3 italic">
                                {{ $new['content'] }}
                            </p>
                            
                            <div class="flex flex-col mb-2">
                                
                                @if(count($new['links']) > 0)
                                   <div class="flex items-center space-x-4">
                                        @foreach ($new['links'] as $link)
                                            @if(isset($link['icon']))
                                                    <a 
                                                        href="{{ $link['url'] }}" 
                                                        target="_blank"
                                                        title="Voir sur {{ ucfirst($link['icon'] ?? 'lien') }}"
                                                        class="text-primary hover:text-secondary"
                                                    >
                                                        <img src="{{asset($link['icon'])}}" class="w-6 h-6"/>
                                                    </a>
                                            @endif
                                        @endforeach
                                    </div>   
                                @endif
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
            <div class="mt-6">
                <a href="{{route('public.news.index')}}" 
                    class="bg-secondary hover:bg-secondary-600 text-white px-6 py-3 rounded-lg">
                    Voir plus
                </a>
            </div>
        </div>
    </section> --}}




{{-- 
    <section class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="text-center mb-6">
            <h2 class="text-4xl lg:text-5xl font-bold text-primary mb-8 lg:mb-12">
                Quelques-uns de nos services
                <div class="flex gap-1 mt-2">
                    <span class="w-2 h-2 bg-secondary rounded-full"></span>
                    <span class="w-2 h-2 bg-secondary rounded-full"></span>
                    <span class="w-2 h-2 bg-secondary rounded-full"></span>
                    <span class="flex-1 h-0.5 bg-primary self-center ml-1"></span>
                </div>
            </h2>
            <h2 class="text-2xl font-bold mb-4 text-balance text-[#222222]">
                Quelques-uns de nos services
            </h2>
        </div>
        <div class=" grid lg:grid-cols-2 items-center ">
            <div class="flex flex-col items-center lg:items-start">
                <div class="">
                    <img src="{{asset('/images/templates/Gemini_Generated_Image_unyfrtunyfrtunyf.png')}}" 
                         alt="cPay" 
                         class="w-full h-auto object-contain">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-12 ">
                @foreach(array_slice($services[0]["services"], 0, 4) as $index => $service)
                    <a href="{{route('public.services.detail', [$services[0]['id'] ,$services[0]['id']])}}" class="group relative overflow-hidden rounded-3xl aspect-[4/3] cursor-pointer transition-transform hover:scale-105">
                        <img src="{{ asset($service['images'][0]) }}" 
                            alt="{{$service['name']}}" 
                            class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 p-6 flex items-center gap-2 bg-[#F29100]/60 min-h-32 rounded-tl-[200px]">
                            <div class="w-12 h-12  flex items-center justify-center flex-shrink-0 transform ">
                                <img class="" src="{{$service['icon']}}" alt="">
                            </div>
                            <div class="text-white">
                                <p class="text-lg font-bold">{{$service['name']}}</p>
                            </div>
                        </div>
                        
                    </a>
                    
                @endforeach
                
            </div>
            <button
                class="inline-flex items-center justify-center bg-secondary hover:bg-secondary/90 text-white shadow-lg hover:shadow-xl transition-all duration-300 px-6 py-3 rounded-lg text-sm font-semibold backdrop-blur-sm w-32 mt-4"
                title="Voir détails"
            >
                <a href="{{route('public.services.index')}}" class="inline-flex items-center justify-center h-full w-full">
                    Voir plus
                    <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
                
            </button>
        </div>
    </section>
 --}}



    {{-- <section class="py-8 bg-gradient-to-br from-slate-50 to-gray-100" x-data="{ activeTab: 0 }">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold mb-4 text-balance text-[#222222]">
                    Quelques-uns de nos services
                </h2>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    @foreach(array_slice($services[0]["services"], 0, 3) as $index => $service)
                        <div
                            class="cursor-pointer transition-all duration-300 border rounded-xl shadow-lg p-6 bg-white hover:shadow-xl"
                            :class="activeTab === {{ $index }} ? 'border-secondary bg-gradient-to-r from-secondary/5 to-[#312782]/5 shadow-xl' : 'border-gray-200 hover:border-secondary/30'"
                            @click="activeTab = {{ $index }}"
                        >
                            <div class="flex items-start space-x-4">
                                <div
                                    class="flex-shrink-0 w-12 h-12 rounded-lg flex items-center justify-center transition-all duration-300 overflow-hidden"
                                    :class="activeTab === {{ $index }} ? 'bg-secondary shadow-lg' : 'bg-gray-100'"
                                >
                                    <img 
                                        src="{{ asset($service['images'][0]) }}" 
                                        alt="Icon for {{ $service['name'] }}"
                                        class="w-8 h-8 object-contain transition-all duration-300"
                                        :class="activeTab === {{ $index }} ? 'filter ' : 'opacity-70'"
                                    />
                                </div>

                                <div class="flex-1 space-y-3">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-xl font-semibold text-[#222222]">{{ $service['name'] }}</h3>
                                    </div>
                                    <p class="text-gray-600 leading-relaxed">{{ Str::limit($service['description'], 150, '...') }}</p>

                                    <div class="flex items-center space-x-2">
                                        <span class="text-sm font-bold text-secondary">{{ $service['price'] }}</span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <button
                        class="inline-flex items-center justify-center bg-secondary hover:bg-secondary/90 text-white shadow-lg hover:shadow-xl transition-all duration-300 px-6 py-3 rounded-lg text-sm font-semibold backdrop-blur-sm"
                        title="Voir détails"
                    >
                        <a href="{{route('public.services.index')}}" class="inline-flex items-center justify-center h-full w-full">
                            Voir plus
                            <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                        
                    </button>
                </div>


                <div class="relative">
                    <div class="relative bg-white rounded-2xl p-4 shadow-2xl overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent z-10 pointer-events-none"></div>
                        
                        @foreach($services[0]["services"] as $index => $tab)
                            <img
                                x-show="activeTab === {{ $index }}"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                src="{{ asset($tab['images'][0]) }}"
                                alt="{{ $tab['name'] }}"
                                class="w-full h-auto rounded-lg"
                            />
                        @endforeach

                        <div class="absolute bottom-6 right-6 z-20 flex flex-col gap-3">
                            @foreach($services[0]["services"] as $index => $tab)
                                <div x-show="activeTab === {{ $index }}" class="flex flex-col gap-2">
                                    <button
                                        class="inline-flex items-center justify-center bg-secondary hover:bg-secondary/90 text-white shadow-lg hover:shadow-xl transition-all duration-300 px-6 py-3 rounded-lg text-sm font-semibold backdrop-blur-sm"
                                        title="Voir détails"
                                    >
                                        <a href="{{route('public.services.detail', [$services[0]['id'] ,$tab['id']])}}" class="inline-flex items-center justify-center h-full w-full">
                                            Détails
                                            <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                            </svg>
                                        </a>
                                        
                                    </button>
                                    <button
                                        onclick="window.open('{{$parameter['login_url']}}', '_blank')"
                                        class="inline-flex items-center justify-center border-2 border-secondary text-secondary hover:text-white hover:bg-secondary transition-all duration-300  backdrop-blur-lg px-6 py-3 rounded-lg text-sm font-semibold"
                                        title="En savoir plus"
                                    >
                                        Créer un compte
                                    </button>
                                </div>
                            @endforeach
                        </div>

                        <div class="absolute top-6 left-6 z-20">
                            @foreach($services[0]["services"] as $index => $tab)
                                <div 
                                    x-show="activeTab === {{ $index }}"
                                    class="bg-primary text-white px-4 py-2 rounded-full font-bold shadow-lg"
                                >
                                    {{ $tab['price'] }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}




     {{-- <div class="max-w-7xl mx-auto">
        <div class="mb-12 text-center">
            <h2 class="text-4xl font-bold text-[#0066CC] mb-2">Notre Processus</h2>
            <p class="text-gray-600">Suivez ces étapes simples pour commencer</p>
        </div>

        <!-- Timeline Container -->
        <div class="relative" x-data="{ activeStep: null }">
            <!-- Connecting Line -->
            <div class="absolute top-16 left-0 right-0 h-1 bg-gradient-to-r from-[#0066CC] via-[#0066CC] to-[#0066CC] hidden lg:block" style="width: calc(100% - 8rem); margin-left: 4rem;"></div>
            
            <!-- Steps Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 relative">
                <!-- Step 1 -->
                <div class="group relative" 
                     @mouseenter="activeStep = 1" 
                     @mouseleave="activeStep = null">
                    <!-- Step Number Badge -->
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 w-12 h-12 bg-[#0066CC] text-white rounded-full flex items-center justify-center font-bold text-lg shadow-lg z-10 group-hover:scale-110 transition-transform duration-300">
                        1
                    </div>
                    
                    <!-- Card -->
                    <div class="bg-white rounded-2xl p-6 pt-10 shadow-md hover:shadow-2xl transition-all duration-300 border-2 border-transparent group-hover:border-[#0066CC] h-full">
                        <!-- Icon -->
                        <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:bg-[#0066CC] transition-colors duration-300">
                            <svg class="w-8 h-8 text-[#0066CC] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        
                        <!-- Content -->
                        <h3 class="text-xl font-bold text-gray-800 text-center mb-3">Inscription</h3>
                        <p class="text-gray-600 text-center text-sm leading-relaxed">Créez votre compte en quelques clics et accédez à tous nos services</p>
                        
                        <!-- Hover Indicator -->
                        <div class="mt-4 flex justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="w-12 h-1 bg-[#0066CC] rounded-full"></div>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="group relative" 
                     @mouseenter="activeStep = 2" 
                     @mouseleave="activeStep = null">
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 w-12 h-12 bg-[#0066CC] text-white rounded-full flex items-center justify-center font-bold text-lg shadow-lg z-10 group-hover:scale-110 transition-transform duration-300">
                        2
                    </div>
                    
                    <div class="bg-white rounded-2xl p-6 pt-10 shadow-md hover:shadow-2xl transition-all duration-300 border-2 border-transparent group-hover:border-[#0066CC] h-full">
                        <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:bg-[#0066CC] transition-colors duration-300">
                            <svg class="w-8 h-8 text-[#0066CC] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        
                        <h3 class="text-xl font-bold text-gray-800 text-center mb-3">Vérification</h3>
                        <p class="text-gray-600 text-center text-sm leading-relaxed">Validez votre identité pour sécuriser votre compte et vos transactions</p>
                        
                        <div class="mt-4 flex justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="w-12 h-1 bg-[#0066CC] rounded-full"></div>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="group relative" 
                     @mouseenter="activeStep = 3" 
                     @mouseleave="activeStep = null">
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 w-12 h-12 bg-[#0066CC] text-white rounded-full flex items-center justify-center font-bold text-lg shadow-lg z-10 group-hover:scale-110 transition-transform duration-300">
                        3
                    </div>
                    
                    <div class="bg-white rounded-2xl p-6 pt-10 shadow-md hover:shadow-2xl transition-all duration-300 border-2 border-transparent group-hover:border-[#0066CC] h-full">
                        <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:bg-[#0066CC] transition-colors duration-300">
                            <svg class="w-8 h-8 text-[#0066CC] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                            </svg>
                        </div>
                        
                        <h3 class="text-xl font-bold text-gray-800 text-center mb-3">Recharge</h3>
                        <p class="text-gray-600 text-center text-sm leading-relaxed">Alimentez votre compte facilement avec plusieurs moyens de paiement</p>
                        
                        <div class="mt-4 flex justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="w-12 h-1 bg-[#0066CC] rounded-full"></div>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="group relative" 
                     @mouseenter="activeStep = 4" 
                     @mouseleave="activeStep = null">
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 w-12 h-12 bg-[#0066CC] text-white rounded-full flex items-center justify-center font-bold text-lg shadow-lg z-10 group-hover:scale-110 transition-transform duration-300">
                        4
                    </div>
                    
                    <div class="bg-white rounded-2xl p-6 pt-10 shadow-md hover:shadow-2xl transition-all duration-300 border-2 border-transparent group-hover:border-[#0066CC] h-full">
                        <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:bg-[#0066CC] transition-colors duration-300">
                            <svg class="w-8 h-8 text-[#0066CC] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        
                        <h3 class="text-xl font-bold text-gray-800 text-center mb-3">Utilisation</h3>
                        <p class="text-gray-600 text-center text-sm leading-relaxed">Profitez de tous nos services et effectuez vos transactions en toute sécurité</p>
                        
                        <div class="mt-4 flex justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="w-12 h-1 bg-[#0066CC] rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Progress Indicator -->
            <div class="mt-12 flex justify-center items-center gap-2">
                <div class="w-3 h-3 rounded-full transition-all duration-300"
                     :class="activeStep === 1 ? 'bg-[#0066CC] scale-125' : 'bg-gray-300'"></div>
                <div class="w-3 h-3 rounded-full transition-all duration-300"
                     :class="activeStep === 2 ? 'bg-[#0066CC] scale-125' : 'bg-gray-300'"></div>
                <div class="w-3 h-3 rounded-full transition-all duration-300"
                     :class="activeStep === 3 ? 'bg-[#0066CC] scale-125' : 'bg-gray-300'"></div>
                <div class="w-3 h-3 rounded-full transition-all duration-300"
                     :class="activeStep === 4 ? 'bg-[#0066CC] scale-125' : 'bg-gray-300'"></div>
            </div>
        </div>
    </div> --}}











    <div 
        x-data='{
            processes: @json($solution["process"]),
            currentView: @json($solution["process"][0]["id"]),
            steps: @json($solution["process"][0]["steps"]),
            selectedStep: @json($solution["process"][0]["steps"][0]),
            visibleStart: 0,
            visibleCount: 2,

            changeProcess(index){
                this.currentView = this.processes[index].id;
                this.steps = this.processes[index].steps || [];
                this.selectedStep = (this.steps && this.steps.length) ? this.steps[0] : { id: null, name: "", description: "", link: "" };
                this.visibleStart = 0;
            },
            nextSteps(){
                if (this.visibleStart + this.visibleCount < this.steps.length) {
                    this.visibleStart += this.visibleCount;
                }
            },
            prevSteps(){
                if (this.visibleStart - this.visibleCount >= 0) {
                    this.visibleStart -= this.visibleCount;
                }
            },
            get visibleSteps(){
                return this.steps.slice(this.visibleStart, this.visibleStart + this.visibleCount);
            }
        }'
        x-cloak
    >
        <div class="max-w-screen-xl mx-auto mb-8">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold mb-4 text-balance text-[#222222]">
                    Processus <span class="font-bold text-secondary">{{ $solution['name'] }}</span>.
                </h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto italic">
                    {{ $solution['description'] }}
                </p>
            </div>

            <div class="flex justify-center mb-8">
                <div class="flex gap-2 flex-wrap justify-center">
                    @foreach($solution['process'] as $process)
                        <button
                            @click="changeProcess({{ $loop->index }})"
                            :class="currentView == {{ $process['id'] }} ? 'bg-primary ' : 'bg-secondary'"
                            class="rounded-md px-6 py-2 font-bold italic transition text-white"
                        >
                            {{ $process['name'] }}
                        </button>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="max-w-6xl mx-auto">
            <div class="bg-gradient-to-r from-manga-purple/10 to-manga-orange/10 p-6 rounded-2xl">
                <template x-if="visibleStart > 0">
                    <div class="flex justify-start mb-4">
                        <button 
                            @click="prevSteps" 
                            class="flex items-center gap-1 text-secondary border-2 border-secondary hover:text-white px-4 py-2 rounded-lg hover:bg-secondary transition"
                        >
                            <span class="text-lg">−</span> Précédent
                        </button>
                    </div>
                </template>

                <div class="flex flex-col grid-cols-9 p-2 mx-auto md:grid">
                    <template x-for="(step, index) in visibleSteps" :key="step.id">
                        <div class="flex md:contents" :class="index % 2 === 0 ? 'flex-row-reverse' : ''">
                            
                            <template x-if="index % 2 === 0">
                                <div class="relative p-4 my-6 text-gray-800 bg-white border-2 border-secondary rounded-xl col-start-1 col-end-5 mr-auto md:mr-0 md:ml-auto group hover:bg-secondary/10 transition">
                                    <h3 class="text-lg font-semibold lg:text-xl" x-text="step.name"></h3>
                                    <p class="text-gray-600 leading-relaxed" x-text="step.description"></p>

                                    <div class="absolute -top-24 left-1/2 transform -translate-x-1/2 hidden group-hover:block z-20">
                                        <div class="relative w-72">
                                            <div class="relative rounded-lg p-4 text-sm font-sans text-gray-800 shadow-md border-2 border-primary bg-white">
                                                <template x-if="step.image">
                                                    <img :src="step.image" alt="" class="object-contain rounded-md mb-2 w-full">
                                                </template>
                                                <p x-text="step.description" class="text-gray-600 leading-relaxed"></p>
                                                <template x-if="step.link">
                                                    <button
                                                        @click="window.open(step.link, '_blank')"
                                                        class="inline-flex items-center justify-center border-2 border-secondary text-secondary hover:bg-secondary hover:text-white transition-all duration-300 bg-white/10 backdrop-blur-sm px-3 py-1 mt-2 rounded-lg text-sm font-semibold"
                                                    >
                                                        Accédez
                                                    </button>
                                                </template>
                                                <template x-if="step.detail">
                                                    <button
                                                        @click="window.open(step.detail, '_blank')"
                                                        class="inline-flex items-center justify-center border-2 border-secondary text-secondary hover:bg-secondary hover:text-white transition-all duration-300 bg-white/10 backdrop-blur-sm px-3 py-1 mt-2 rounded-lg text-sm font-semibold"
                                                    >
                                                        voir plus
                                                    </button>
                                                </template>
                                                <div class="absolute -bottom-2 left-8 h-4 w-4 rotate-45 bg-primary"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>

                            <div class="relative col-start-5 col-end-6 mr-7 md:mx-auto">
                                <div class="flex items-center justify-center w-6 h-full">
                                    <div class="w-1 h-full bg-primary rounded-t-full"></div>
                                </div>
                                <div class="absolute w-6 h-6 -mt-3 bg-primary border-4 border-white rounded-full top-1/2"></div>
                            </div>

                            <template x-if="index % 2 === 1">
                                <div class="relative p-4 my-6 text-gray-800 bg-white border-2 border-secondary rounded-xl col-start-6 col-end-10 mr-auto group hover:bg-secondary/10 transition">
                                    <h3 class="text-lg font-semibold lg:text-xl" x-text="step.name"></h3>
                                    <p class="text-gray-600 leading-relaxed " x-text="step.description"></p>
                                    <div class="absolute -top-24 left-1/2 transform -translate-x-1/2 hidden group-hover:block z-20">
                                        <div class="relative w-72">
                                            <div class="relative rounded-lg p-4 border-2 border-primary text-sm font-sans text-gray-800 shadow-md bg-white">
                                                <template x-if="step.image">
                                                    <img :src="step.image" alt="" class="object-contain rounded-md mb-2 w-full">
                                                </template>
                                                <p x-text="step.description" class="text-gray-600 leading-relaxed"></p>
                                                <template x-if="step.link">
                                                    <button
                                                        @click="window.open(step.link, '_blank')"
                                                        class="inline-flex items-center justify-center border-2 border-secondary text-secondary hover:bg-secondary hover:text-white transition-all duration-300 bg-white/10 backdrop-blur-sm px-3 py-1 mt-2 rounded-lg text-sm font-semibold"
                                                    >
                                                        Accédez
                                                    </button>
                                                </template>
                                                <template x-if="step.detail">
                                                    <button
                                                        @click="window.open(step.detail, '_blank')"
                                                        class="inline-flex items-center justify-center border-2 border-secondary text-secondary hover:bg-secondary hover:text-white transition-all duration-300 bg-white/10 backdrop-blur-sm px-3 py-1 mt-2 rounded-lg text-sm font-semibold"
                                                    >
                                                        voir plus
                                                    </button>
                                                </template>
                                                <div class="absolute -bottom-2 right-8 h-4 w-4 rotate-45 bg-primary"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </template>
                </div>

                <template x-if="visibleStart + visibleCount < steps.length">
                    <div class="flex justify-center mt-6">
                        <button 
                            @click="nextSteps" 
                            class="flex items-center gap-1 text-secondary border-2 border-secondary hover:text-white px-4 py-2 rounded-lg hover:bg-secondary transition"
                        >
                            <span class="text-lg">+</span> Voir plus
                        </button>
                    </div>
                </template>
            </div>
        </div>
    </div>


   



    <section 
        id="parteners"
        x-data="partnersCarousel({{ json_encode($partners) }})" 
        x-init="init()"
        class="py-4 relative overflow-hidden">

        <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_20%,hsl(var(--primary)/0.1),transparent)] opacity-50"></div>
        <div class="absolute top-20 left-10 w-32 h-32 bg-primary/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-20 right-10 w-40 h-40 bg-accent/10 rounded-full blur-3xl animate-float delay-300"></div>

        <div class="max-w-screen-xl mx-auto relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-2xl font-bold text-foreground">
                    Nos <span class="bg-primary to-accent bg-clip-text text-transparent">Partenaires</span>
                </h2>
                <p class="text-lg text-muted-foreground max-w-3xl mx-auto">
                    Nous collaborons avec les leaders de l'industrie...
                </p>
            </div>

            <div class="relative mb-6 " @mouseenter="pause()" @mouseleave="play()">
                <div class=" backdrop-blur-xl rounded-3xl p-4 md:p-6 border border-gray-200 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/5 via-transparent to-accent/5 rounded-3xl"></div>

                    <div class="relative z-10">
                        <div class="grid gap-8" 
                            :class="visibleCards === 1 ? 'grid-cols-1' : (visibleCards === 2 ? 'grid-cols-2' : 'grid-cols-3')">
                            <template x-for="partner in visiblePartners" :key="partner.id">
                                <div class="group relative">
                                    <div class="bg-white/95 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-white/30 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 hover:scale-105 hover:bg-white">
                                        <div class="relative w-full mb-4 h-[150px] bg-white/50 rounded-xl overflow-hidden">
                                            <img :src="partner.logo" :alt="partner.name + ' logo'" class="object-contain w-full h-full transition-all duration-500">
                                        </div>
                                        <h3 class="text-lg font-semibold text-center text-foreground group-hover:text-primary transition-colors duration-300 mb-2" x-text="partner.name"></h3>
                                        <p class="text-center text-muted-foreground italic " x-text="partner.temoignage"></p>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>

                    <div class="flex justify-center mt-8 gap-2">
                        <template x-for="(p, i) in partners" :key="i">
                            <button @click="goTo(i)"
                                class="w-3 h-3 rounded-full transition-all duration-300"
                                :class="i === currentIndex ? 'bg-primary scale-125' : 'bg-primary/30 hover:bg-primary/50'">
                            </button>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function partnersCarousel(partners) {
        return {
            partners,
            currentIndex: 0,
            visibleCards: 3,
            intervalId: null,

            get visiblePartners() {
            const visible = [];
            for (let i = 0; i < this.visibleCards; i++) {
                const index = (this.currentIndex + i) % this.partners.length;
                visible.push(this.partners[index]);
            }
            return visible;
            },

            init() {
            this.updateVisibleCards();
            window.addEventListener('resize', () => this.updateVisibleCards());
            this.play();
            },

            updateVisibleCards() {
            if (window.innerWidth < 768) {
                this.visibleCards = 1;
            } else if (window.innerWidth < 1024) {
                this.visibleCards = 2;
            } else {
                this.visibleCards = 3;
            }
            },

            play() {

            if (!this.intervalId) {
                this.intervalId = setInterval(() => {
                this.currentIndex = (this.currentIndex + 1) % this.partners.length;
                }, 3000);
            }
            },

            pause() {
            if (this.intervalId) {
                clearInterval(this.intervalId);
                this.intervalId = null;
            }
            },

            goTo(i) {
            this.currentIndex = i;
            }
        }
        }
    </script>

    <section class="py-4">
        <div class="container mx-auto px-4">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold mb-4 text-balance">
                    Tarification simple et transparente
                </h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                    Choisissez l’abonnement qui correspond le mieux à vos besoins. Tous les forfaits incluent nos fonctionnalités essentielles, sans frais cachés.
                </p>
            </div>


            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                @foreach($abonnements as $abonnement)
                    <div class="relative bg-white rounded-xl shadow-lg border p-3 {{ $abonnement['plan']=='Premium' ? 'border-orange-500 scale-105' : '' }}">
                        
                        @if($abonnement['plan']=="Premium")
                            <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                                <div class="bg-gradient-to-r from-orange-500 to-yellow-500 text-white px-4 py-1 rounded-full text-xs font-medium flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 fill-current" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                                    </svg>
                                    <span>{{ $abonnement['plan'] }}</span>
                                </div>
                            </div>
                        @endif

                        <div class="text-center pb-2">
                            <h3 class="text-xl font-bold text-primary">{{ $abonnement['plan'] }}</h3>
                            <p class=" text-muted-foreground mt-2">{{ $abonnement['description'] }}</p>
                            {{-- <div class="mt-4 flex items-baseline justify-center">
                                <span class=" font-bold">{{ $abonnement['price'] }}</span>
                            </div> --}}
                        </div>

                        <div class="space-y-6">
                            <ul class="space-y-1" x-data="{ openIndex: null }">
                                @foreach($abonnement['content'] as $feature => $detail)
                                    <li class="flex flex-col space-y-2 border-b pb-2 ">
                                        <button
                                            class="flex items-center justify-between w-full text-left p-2 hover:bg-gray-100 transition-colors rounded"
                                            @click="openIndex === '{{ $feature }}' ? openIndex = null : openIndex = '{{ $feature }}'"
                                        >
                                            <span class="flex items-center space-x-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                                </svg>
                                                <span class="font-semibold text-foreground">{{ $feature }}</span>
                                            </span>
                                            <span x-show="openIndex === '{{ $feature }}'">-</span>
                                            <span x-show="openIndex !== '{{ $feature }}'">+</span>
                                        </button>

                                        <div x-show="openIndex === '{{ $feature }}'" x-transition class="pl-6 text-muted-foreground leading-relaxed italic">
                                            {{ $detail }}
                                        </div>
                                    </li>
                                @endforeach
                            </ul>

                            <a href="{{ $parameter['url_contact_form'] }}" target="_blank"
                            class="w-full inline-block text-center py-3 rounded-lg font-medium bg-gradient-to-r from-orange-500 to-yellow-500 text-white hover:from-orange-600 hover:to-yellow-600">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </section>






    
    <section id="faqs" class="py-8">
        <div class="grid grid-cols-1 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 items-center gap-6">
            <div class="text-center mb-6">
                <h2 class="text-2xl mb-4 text-balance font-bold">Questions Fréquemment Posées</h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto italic">
                    Trouvez des réponses aux questions courantes sur les outils et services ScrewFast.
                </p>
            </div>

            <div class="max-w-screen-xl mx-auto space-y-4" x-data="{ openIndex: 0 }">

                @foreach($faqs as $index => $faq)
                    <div class="bg-white rounded-2xl shadow overflow-hidden">
                        <button
                            class="w-full text-left p-6 flex items-center justify-between hover:bg-gray-100 transition-colors"
                            @click="openIndex === {{ $index }} ? openIndex = null : openIndex = {{ $index }}"
                        >
                            <span class="font-semibold text-foreground pr-4 ">{{ $faq['question'] }}</span>
                            <span class="flex-shrink-0">
                                <svg x-show="openIndex !== {{ $index }}" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-muted-foreground" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="openIndex === {{ $index }}" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-muted-foreground" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </span>
                        </button>
                        <div x-show="openIndex === {{ $index }}" x-transition class="px-6 pb-6">
                            <p class=" text-muted-foreground leading-relaxed italic">{{ $faq['reponse'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection