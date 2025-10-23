
@php
    $navigation = [
        ['name' => 'Services', 'href' => route('public.services.index')],
        ['name' => 'News', 'href' => route('public.news.index')],
        ['name' => 'Tarifs', 'href' => route('public.tarif.index')],
    ];
@endphp

<header 
    x-data="{ navbarOpen: false }"
    class="sticky top-0 z-50 w-full border-b border-[#F29100]/30 backdrop-blur-lg shadow-lg bg-white/70"
>
    <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between py-4">

            <!-- Logo + Desktop nav -->
            <div class="flex items-center space-x-4">
                <a href="{{ route('public.index') }}" class="block">
                    <img 
                        src="{{ asset($parameter['logo']) }}"
                        alt="Logo"
                        class="h-10 w-auto"
                    />
                </a>

                <nav class="hidden lg:flex items-center space-x-6">
                    @foreach($navigation as $item)
                        <a 
                            href="{{ $item['href'] }}" 
                            class="text-base font-medium text-gray-800 hover:text-secondary py-2"
                        >
                            {{ $item['name'] }}
                        </a>
                    @endforeach
                </nav>
            </div>

            <div class="flex items-center space-x-4 font-bold">
                <a 
                    href="{{ $parameter['login_url'] }}"
                    target="_blank"
                    class="text-base  text-white bg-primary rounded-xl py-2 px-3 hover:bg-opacity-90 transition-colors"
                >
                    Connexion
                </a>

                <button 
                    @click="navbarOpen = !navbarOpen"
                    class="lg:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:bg-gray-100 focus:outline-none"
                    aria-expanded="false"
                >

                    <svg x-show="!navbarOpen" x-cloak class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <svg x-show="navbarOpen" x-cloak class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
        </div>
    </div>

    <!-- Mobile menu -->
    <div 
        x-show="navbarOpen" 
        x-transition
        class="lg:hidden border-t border-[#F29100]/30 backdrop-blur-lg"
    >
        <div class="px-4 py-3 space-y-2">
            @foreach($navigation as $item)
                <a 
                    href="{{ $item['href'] }}" 
                    @click="navbarOpen = false"
                    class="block text-gray-800 hover:text-[#F29100] hover:bg-gray-50 rounded-md px-3 py-2 text-base font-medium transition-colors"
                >
                    {{ $item['name'] }}
                </a>
            @endforeach
        </div>
    </div>
</header>
