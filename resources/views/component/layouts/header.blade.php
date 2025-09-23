<nav class=" backdrop-blur-sm sticky top-0 z-50 w-full border-b border-[#F29100]/30 shadow-lg" x-data="{ isOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="flex items-center space-x-2">
                    <div class="text-2xl font-bold">
                        <span class="text-[#F29100]">ENER</span>
                        <span class="">LOG</span>
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                @php
                    $navigation = [
                        ['name' => 'Accueil', 'href' => route('public.index')],
                        ['name' => 'À propos', 'href' => url('/about')],
                        ['name' => 'Services', 'href' => route('public.services.index')],
                        ['name' => 'Partenaire', 'href' => route('public.partners.index')],
                        ['name' => 'Contact', 'href' => url('/contact')],
                    ];
                @endphp

                @foreach($navigation as $item)
                    <a href="{{ $item['href'] }}" class="text-black/90 hover:text-[#F29100] text-sm font-medium transition-colors hover:bg-white/10 px-3 py-2 rounded-md">
                        {{ $item['name'] }}
                    </a>
                @endforeach
            </div>

            <!-- Right side contact info -->
            <div class="hidden md:flex items-center space-x-4">

                <button class="bg-[#F29100] hover:bg-[#F29100]/90 text-white shadow-md border-0 px-4 py-2 rounded-md text-sm">
                    Cree Compte
                </button>
            </div>

            <!-- Mobile menu button -->
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

    <!-- Mobile menu -->
    <div x-show="isOpen" class="md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 border-b border-[#F29100]/30">
            @foreach($navigation as $item)
                <a href="{{ $item['href'] }}" @click="isOpen = false" class="text-black/90 hover:text-[#F29100] hover:bg-white/10 block px-3 py-2 rounded-md text-base font-medium transition-colors">
                    {{ $item['name'] }}
                </a>
            @endforeach
            <div class="px-3 py-2">
                <button class="w-full bg-[#F29100] hover:bg-[#F29100]/90 text-white px-4 py-2 rounded-md text-sm">
                    Cree un Compte
                </button>
            </div>
        </div>
    </div>
</nav>










