{{-- <nav class=" backdrop-blur-lg sticky top-0 z-50 w-full border-b border-[#F29100]/30 shadow-lg" x-data="{ isOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="flex items-center space-x-2">
                    <div class="text-2xl font-bold">
                        <img src="{{asset($parameter['logo'])}}" alt="logo" class="h-10 w-auto">
                    </div>
                </a>
            </div>

            <div class="hidden md:flex items-center space-x-8">
                @php
                    $navigation = [
                        ['name' => 'Accueil', 'href' => route('public.index')],
                        ['name' => 'À propos', 'href' => route('public.about.index')],
                        ['name' => 'Services', 'href' => route('public.services.index')],
                        ['name' => 'News', 'href' => route('public.news.index')],
                    ];
                @endphp

                @foreach($navigation as $item)
                    <a href="{{ $item['href'] }}" class="text-black/90 hover:text-secondary text-sm font-medium transition-colors hover:bg-white/10 px-3 py-2 rounded-md">
                        {{ $item['name'] }}
                    </a>
                @endforeach
            </div>

            <div class="hidden md:flex items-center space-x-4">
                <button
                    onclick="window.open('{{$parameter['login_url']}}', '_blank')"
                    class="bg-secondary hover:bg-[#F29100]/90 text-white shadow-md border-0 px-4 py-2 rounded-md text-sm"
                >
                    Créer un compte
                </button>
            </div>
            
            <div class="md:hidden">
                <button @click="isOpen = !isOpen" class="hover:bg-white/10 text-primary p-2 rounded-md">
                    <template x-if="!isOpen">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </template>
                    <template x-if="isOpen">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </template>
                </button>
            </div>
        </div>
    </div>

    <div x-show="isOpen" class="md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 border-b border-[#F29100]/30">
            @foreach($navigation as $item)
                <a href="{{ $item['href'] }}" @click="isOpen = false" class="text-black/90 hover:text-secondary hover:bg-white/10 block px-3 py-2 rounded-md text-base font-medium transition-colors">
                    {{ $item['name'] }}
                </a>
            @endforeach
            <div class="px-3 py-2">
                <button class="w-full bg-secondary hover:bg-[#F29100]/90 text-white px-4 py-2 rounded-md text-sm">
                    <a href="{{$parameter['login_url']}}" class="w-full h-full">Créer un compte</a>
                </button>
            </div>
        </div>
    </div>
</nav> --}}




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

            <!-- Actions / Mobile button -->
            <div class="flex items-center space-x-4">
                <a 
                    href="{{ $parameter['login_url'] }}"
                    target="_blank"
                    class="text-sm font-medium text-gray-800 hover:text-[#F29100] transition-colors"
                >
                    Login
                </a>
                <a 
                    href="{{ $parameter['login_url'] }}"
                    target="_blank"
                    class="text-base font-medium text-white bg-primary rounded-lg py-2 px-3 hover:bg-opacity-90 transition-colors"
                >
                    Créer compte
                </a>

                <!-- Mobile menu button -->
                <button 
                    @click="navbarOpen = !navbarOpen"
                    class="lg:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:bg-gray-100 focus:outline-none"
                    aria-expanded="false"
                >
                    <!-- Hamburger -->
                    <svg x-show="!navbarOpen" x-cloak class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Close -->
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
