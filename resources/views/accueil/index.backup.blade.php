
@extends('component.app')

@section('content')

    @php
        use Illuminate\Support\Str;
    @endphp

    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('/modern-digital-dashboard-interface.jpg') }}" 
                alt="Interface moderne de gestion digitale ENERLOG" 
                class="w-full h-full object-cover">
            {{-- Overlay plus subtil avec dégradé noir dominant --}}
            <div class="absolute inset-0 bg-gradient-to-br from-[#222222]/95 via-[#222222]/90 to-[#312782]/80"></div>
            {{-- Overlay pattern subtil --}}
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.03\"%3E%3Ccircle cx=\"30\" cy=\"30\" r=\"1\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
        </div>
        
        {{-- Éléments animés plus discrets --}}
        <div class="absolute inset-0 z-5">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-[#F29100]/8 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-[#312782]/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center max-w-5xl mx-auto space-y-12">
                {{-- Badge avec design plus élégant --}}
                <div class="inline-flex items-center px-8 py-4 rounded-full bg-[#222222]/60 border border-[#F29100]/20 backdrop-blur-xl">
                    <div class="w-3 h-3 bg-[#F29100] rounded-full mr-4 animate-pulse"></div>
                    <span class="text-white text-sm font-medium tracking-wide">Solutions Digitales Innovantes</span>
                </div>

                {{-- Titre avec typographie améliorée --}}
                <div class="space-y-8">
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold leading-tight">
                        <span class="text-white italic">{{$parameter["name"]}}</span>
                        <br>
                        
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-300 max-w-4xl mx-auto leading-relaxed font-light italic">
                        {{ Str::limit($parameter['description'], 100, '...') }}
                    </p>
                </div>

                {{-- Boutons avec design plus raffiné --}}
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center pt-4">
                    <a href="#services" class="group relative inline-flex items-center justify-center px-12 py-6 text-xl font-semibold text-white bg-[#F29100] rounded-2xl shadow-2xl hover:shadow-[#F29100]/40 transition-all duration-300 hover:scale-105 hover:bg-[#F29100]/90">
                        <span class="relative z-10">Découvrir nos services</span>
                        <svg class="ml-3 w-6 h-6 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="#devis" class="inline-flex items-center justify-center px-12 py-6 text-xl font-semibold text-white border-2 border-white/20 rounded-2xl backdrop-blur-md hover:bg-white/10 hover:border-white/30 transition-all duration-300">
                        Cree un compte
                    </a>
                </div>

            </div>

            {{-- Éléments décoratifs simplifiés --}}
            <div class="absolute top-20 right-20 w-20 h-20 bg-[#F29100]/10 rounded-3xl backdrop-blur-sm border border-[#F29100]/20 flex items-center justify-center animate-float">
                <div class="w-3 h-3 bg-[#F29100] rounded-full"></div>
            </div>

            <div class="absolute bottom-32 left-20 w-16 h-16 bg-[#312782]/15 rounded-2xl backdrop-blur-sm border border-[#312782]/30 flex items-center justify-center animate-pulse">
                <div class="w-2 h-2 bg-[#312782] rounded-full"></div>
            </div>

        </div>

        {{-- Animation CSS personnalisée --}}
        <style>
            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-10px); }
            }
            .animate-float {
                animation: float 3s ease-in-out infinite;
            }
        </style>
    </section>



{{-- @php
$features = [
    [
        'icon' => 'ticket',
        'title' => 'Gestion de Tickets Événements',
        'description' => 'Solutions complètes pour la gestion et la distribution de tickets d\'événements. Plateforme sécurisée avec suivi en temps réel et analytics avancés.',
    ],
    [
        'icon' => 'package',
        'title' => 'Livraison de Colis',
        'description' => 'Service de livraison optimisé avec tracking GPS en temps réel. Gestion complète de la chaîne logistique pour vos expéditions.',
    ],
    [
        'icon' => 'credit-card',
        'title' => 'Cartes Pétrolières & Paiement',
        'description' => 'Solutions de paiement digital sécurisées et cartes pétrolières pour entreprises. Gestion centralisée des transactions et reporting détaillé.',
    ],
    [
        'icon' => 'map-pin',
        'title' => 'Tracking & Géolocalisation',
        'description' => 'Systèmes de tracking avancés avec géolocalisation précise. Suivi en temps réel de vos assets et optimisation des parcours.',
    ],
];
@endphp --}}

{{-- <section class="py-20 bg-gradient-to-b from-accent/10 via-primary/5 to-accent/15 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-primary/5 to-transparent"></div>
    <div class="absolute top-1/4 left-0 w-64 h-64 bg-primary/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-1/4 right-0 w-64 h-64 bg-accent/10 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
                Nos <span class="text-primary">Solutions</span> Digitales
            </h2>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                Des technologies innovantes pour optimiser vos processus métier
            </p>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            @foreach($features as $feature)
                <div class="bg-gradient-to-br from-card/95 to-primary/5 backdrop-blur-sm border border-primary/20 hover:border-primary/40 transition-all duration-300 hover:shadow-2xl shadow-lg rounded-xl group">
                    <div class="p-8 flex items-start space-x-6">
                        <div class="flex-shrink-0">
                            <div class="w-14 h-14 bg-gradient-to-br from-primary/30 to-accent/30 rounded-xl flex items-center justify-center group-hover:from-primary/40 group-hover:to-accent/40 transition-all duration-300 shadow-lg">
                                @if($feature['icon'] === 'ticket')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m2 0a2 2 0 010 4H7a2 2 0 010-4m0-8h10a2 2 0 012 2v2H5V6a2 2 0 012-2z"/>
                                    </svg>
                                @elseif($feature['icon'] === 'package')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V7a2 2 0 00-2-2H6a2 2 0 00-2 2v6M2 13l10 6 10-6M2 13v6a2 2 0 002 2h16a2 2 0 002-2v-6"/>
                                    </svg>
                                @elseif($feature['icon'] === 'credit-card')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18v8a2 2 0 01-2 2H5a2 2 0 01-2-2v-8z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6h18v4H3V6z"/>
                                    </svg>
                                @elseif($feature['icon'] === 'map-pin')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5s-3 1.343-3 3 1.343 3 3 3z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4.5 8-10c0-4.418-3.582-8-8-8s-8 3.582-8 8c0 5.5 8 10 8 10z"/>
                                    </svg>
                                @endif
                            </div>
                        </div>

                        <div class="space-y-3">
                            <h3 class="text-xl font-semibold text-foreground group-hover:text-primary transition-colors">
                                {{ $feature['title'] }}
                            </h3>
                            <p class="text-muted-foreground leading-relaxed">{{ $feature['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section> --}}









@php
$tabs = [
    [
        'id' => 'tools',
        'heading' => "Cutting-Edge Tools",
        'content' => "Empower your projects with ScrewFast's cutting-edge tools. Experience enhanced efficiency in construction management with our sophisticated automated solutions.",
        'icon' => '/modern-construction-project-management-dashboard-i.jpg', // Changed from 'wrench' to image path
        'image' => '/yellow-and-black-heavy-construction-equipment-on-c.jpg',
        'alt' => 'Yellow and black heavy equipment on brown grass field',
        'redirectUrl' => '/tools',
        'price' => '49.99'
    ],
    [
        'id' => 'dashboard',
        'heading' => "Intuitive Dashboards",
        'content' => "Navigate with ease using ScrewFast's intuitive dashboards. Set up and oversee your projects seamlessly, with user-friendly interfaces designed for quick and effective workflow management.",
        'icon' => '/modern-construction-project-management-dashboard-i.jpg', // Changed from 'bar-chart' to image path
        'image' => '/modern-construction-project-management-dashboard-i.jpg',
        'alt' => 'A screenshot or graphic representation of the intuitive dashboard',
        'redirectUrl' => '/dashboard',
        'price' => '49.99'
    ],
    [
        'id' => 'features',
        'heading' => "Robust Features",
        'content' => "Minimize complexity, maximize productivity. ScrewFast's robust features are engineered to streamline your construction process, delivering results that stand out for their excellence.",
        'icon' =>'/modern-construction-project-management-dashboard-i.jpg', // Changed from 'home' to image path
        'image' => '/gray-metal-building-frame-construction-site-with-t.jpg',
        'alt' => 'Gray metal building frame near tower crane during daytime',
        'redirectUrl' => '/features',
        'price' => '49.99'
    ],
];
@endphp

<section class="py-20 bg-gradient-to-br from-slate-50 to-gray-100" x-data="{ activeTab: 0 }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Title --}}
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-balance text-[#222222]">
                Customize ScrewFast's offerings to perfectly suit your hardware and construction needs.
            </h2>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
            {{-- Tabs --}}
            <div class="space-y-6">
                @foreach($tabs as $index => $tab)
                    <div
                        class="cursor-pointer transition-all duration-300 border rounded-xl shadow-lg p-6 bg-white hover:shadow-xl"
                        :class="activeTab === {{ $index }} ? 'border-[#F29100] bg-gradient-to-r from-[#F29100]/5 to-[#312782]/5 shadow-xl' : 'border-gray-200 hover:border-[#F29100]/30'"
                        @click="activeTab = {{ $index }}"
                    >
                        <div class="flex items-start space-x-4">
                            {{-- Replaced SVG icons with images --}}
                            <div
                                class="flex-shrink-0 w-12 h-12 rounded-lg flex items-center justify-center transition-all duration-300 overflow-hidden"
                                :class="activeTab === {{ $index }} ? 'bg-[#F29100] shadow-lg' : 'bg-gray-100'"
                            >
                                <img 
                                    src="{{ $tab['icon'] }}" 
                                    alt="Icon for {{ $tab['heading'] }}"
                                    class="w-8 h-8 object-contain transition-all duration-300"
                                    :class="activeTab === {{ $index }} ? 'filter ' : 'opacity-70'"
                                />
                            </div>

                            {{-- Text Content --}}
                            <div class="flex-1 space-y-3">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-xl font-semibold text-[#222222]">{{ $tab['heading'] }}</h3>
                                    {{-- Added price display --}}
                                    <div class="flex items-center space-x-2">
                                        <span class="text-2xl font-bold text-[#F29100]">${{ $tab['price'] }}</span>
                                        <span class="text-sm text-gray-500">/month</span>
                                    </div>
                                </div>
                                <p class="text-gray-600 leading-relaxed">{{ $tab['content'] }}</p>
                                
                                {{-- Added feature highlights --}}
                                {{-- <div class="flex items-center space-x-4 pt-2">
                                    <div class="flex items-center text-sm text-[#312782]">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        24/7 Support
                                    </div>
                                    <div class="flex items-center text-sm text-[#312782]">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        Free Updates
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Tab Image --}}
            <div class="relative">
                <div class="relative bg-white rounded-2xl p-4 shadow-2xl overflow-hidden">
                    {{-- Added gradient overlay for better button visibility --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent z-10 pointer-events-none"></div>
                    
                    @foreach($tabs as $index => $tab)
                        <img
                            x-show="activeTab === {{ $index }}"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            src="{{ $tab['image'] }}"
                            alt="{{ $tab['alt'] }}"
                            class="w-full h-auto rounded-lg"
                        />
                    @endforeach

                    {{-- Improved action buttons with better styling and positioning --}}
                    <div class="absolute bottom-6 right-6 z-20 flex flex-col gap-3">
                        @foreach($tabs as $index => $tab)
                            <div x-show="activeTab === {{ $index }}" class="flex flex-col gap-2">
                                <button
                                    @click="window.open('{{ $tab['redirectUrl'] }}', '_blank')"
                                    class="inline-flex items-center justify-center bg-[#F29100] hover:bg-[#F29100]/90 text-white shadow-lg hover:shadow-xl transition-all duration-300 px-6 py-3 rounded-lg text-sm font-semibold backdrop-blur-sm"
                                    title="Voir détails"
                                >
                                    Détails
                                    <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                    </svg>
                                </button>
                                <button
                                    @click="window.open('{{ $tab['redirectUrl'] }}', '_blank')"
                                    class="inline-flex items-center justify-center border-2 border-white text-white hover:bg-white hover:text-[#312782] transition-all duration-300 bg-white/10 backdrop-blur-sm px-6 py-3 rounded-lg text-sm font-semibold"
                                    title="En savoir plus"
                                >
                                    En savoir plus
                                    <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </button>
                            </div>
                        @endforeach
                    </div>

                    {{-- Added price badge on image --}}
                    <div class="absolute top-6 left-6 z-20">
                        @foreach($tabs as $index => $tab)
                            <div 
                                x-show="activeTab === {{ $index }}"
                                class="bg-[#312782] text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg"
                            >
                                À partir de ${{ $tab['price'] }}/mois
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






{{--processus --}}
<div 
    x-data="{ currentView: 'web' }" 
    class="min-h-screen bg-gradient-to-br from-background via-muted/20 to-background p-4 md:p-8">

    {{-- Header --}}
    <div class="max-w-7xl mx-auto mb-8">
        <div class="text-center mb-8">
            <div class="inline-flex items-center gap-4 mb-6">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-balance text-[#222222]">
                    Prpocessus.
                </h2>

            </div>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                Schémas dessinés dans le style manga pour illustrer notre processus de traitement
            </p>
        </div>

        {{-- View Toggle --}}
        <div class="flex justify-center mb-8">
            <div class="bg-card border-2 border-manga-purple/20 rounded-full p-3 shadow-lg">
                <button 
                    @click="currentView = 'web'"
                    :class="currentView === 'web' ? 'bg-primary text-white ' : 'bg-secondary' "
                    class="rounded-full px-6 py-2">
                    Version Web
                </button>
                <button 
                    @click="currentView = 'mobile'"
                    :class="currentView === 'mobile' ? 'bg-primary text-white' : 'bg-secondary'"
                    class="rounded-full px-6 py-2">
                    Version Mobile
                </button>
            </div>
        </div>
    </div>

    {{-- Manga Drawings Display --}}
    <div class="max-w-6xl mx-auto">
        <div class="border-4 border-foreground shadow-2xl overflow-hidden bg-white rounded-xl">
            <div class="p-8">
                {{-- Web view --}}
                <div x-show="currentView === 'web'" class="text-center">
                    <h2 class="text-2xl font-bold text-foreground mb-6 flex items-center justify-center gap-3">
                        Processus Web - Style Manga
                    </h2>
                    <div class="relative inline-block">
                        <img
                            src="{{asset('/processus-web-manga.jpg')}}"
                            alt="Processus de traitement - Version Web - Style Manga"
                            class="max-w-full h-auto rounded-2xl border-4 border-foreground shadow-xl">
                        <div class="absolute -top-4 -left-4 w-8 h-8 bg-manga-purple rounded-full border-2 border-foreground animate-pulse"></div>
                        <div class="absolute -top-4 -right-4 w-6 h-6 bg-manga-orange rounded-full border-2 border-foreground animate-pulse" style="animation-delay:0.5s"></div>
                        <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-manga-pink rounded-full border-2 border-foreground animate-pulse" style="animation-delay:1s"></div>
                        <div class="absolute -bottom-4 -right-4 w-8 h-8 bg-manga-blue rounded-full border-2 border-foreground animate-pulse" style="animation-delay:1.5s"></div>
                    </div>
                </div>

                {{-- Mobile view --}}
                <div x-show="currentView === 'mobile'" class="text-center">
                    <h2 class="text-2xl font-bold text-foreground mb-6 flex items-center justify-center gap-3">
                        Processus Mobile - Style Manga
                    </h2>
                    <div class="relative inline-block">
                        <img
                            src="{{asset('/processus-mobile-manga.jpg')}}"
                            alt="Processus de traitement - Version Mobile - Style Manga"
                            class="max-w-full h-auto rounded-2xl border-4 border-foreground shadow-xl">
                        <div class="absolute -top-4 -left-4 w-8 h-8 bg-manga-green rounded-full border-2 border-foreground animate-pulse"></div>
                        <div class="absolute -top-4 -right-4 w-6 h-6 bg-manga-purple rounded-full border-2 border-foreground animate-pulse" style="animation-delay:0.3s"></div>
                        <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-manga-orange rounded-full border-2 border-foreground animate-pulse" style="animation-delay:0.7s"></div>
                        <div class="absolute -bottom-4 -right-4 w-8 h-8 bg-manga-pink rounded-full border-2 border-foreground animate-pulse" style="animation-delay:1.2s"></div>
                    </div>
                </div>
            </div>

            {{-- Steps legend --}}
            <div class="bg-gradient-to-r from-manga-purple/10 to-manga-orange/10 p-6 border-t-4 border-foreground">
                <h3 class="text-xl font-bold text-foreground mb-4 text-center"> Étapes du Processus</h3>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    @foreach([
                        ['1','🌐','Web','Interface web moderne'],
                        ['2','⚡','Gay Process','Traitement spécialisé'],
                        ['3','📱','Mobile','Optimisation mobile'],
                        ['4','🖼️','Image','Traitement d\'images'],
                        ['5','🔍','Image D\'Etim','Estimation d\'images'],
                        ['6','📝','Description','Génération descriptions'],
                    ] as [$step,$icon,$label,$desc])
                        <div class="flex items-center gap-3 p-3 bg-white/50 rounded-xl border-2 border-foreground/20">
                            <div class="w-8 h-8 bg-manga-purple text-white rounded-full flex items-center justify-center font-bold text-sm">
                                {{ $step }}
                            </div>
                            <div class="text-2xl">{{ $icon }}</div>
                            <div>
                                <div class="font-bold text-foreground text-sm">{{ $label }}</div>
                                <div class="text-xs text-muted-foreground">{{ $desc }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Action Panel --}}
        {{-- <div class="mt-8 text-center">
            <div class="bg-gradient-to-r from-manga-purple to-manga-orange border-4 border-foreground shadow-xl rounded-xl">
                <div class="p-6 text-white">
                    <div class="text-4xl mb-3"></div>
                    <h3 class="text-xl font-bold mb-2">Dessins Manga Authentiques</h3>
                    <p class="text-sm opacity-90">
                        Schémas créés avec une esthétique manga pour visualiser votre processus de traitement
                    </p>
                </div>
            </div>
        </div> --}}
    </div>
</div>















@php
$partners = [
    [
        'id'=>'strabag','name'=>'STRABAG',
        'logo'=>'/strabag-construction-company-logo.jpg',
        'temoignage'=>'Leader européen de la construction'],
    ['id'=>'hochtief','name'=>'HOCHTIEF','logo'=>'/hochtief-construction-company-logo.jpg','temoignage'=>'Expertise internationale en construction'],
    ['id'=>'vinci','name'=>'VINCI','logo'=>'/vinci-construction-company-logo.jpg','temoignage'=>'Groupe mondial de construction'],
    ['id'=>'bouygues','name'=>'BOUYGUES','logo'=>'/bouygues-construction-company-logo.jpg','temoignage'=>'Innovation dans la construction'],
    ['id'=>'eiffage','name'=>'EIFFAGE','logo'=>'/eiffage-construction-company-logo.jpg','temoignage'=>'Solutions durables de construction'],
    ['id'=>'skanska','name'=>'SKANSKA','logo'=>'/skanska-construction-company-logo.jpg','temoignage'=>'Construction responsable et durable'],
];

$stats = [
    ['icon'=>'building','value'=>'50+','label'=>'Partenaires Actifs','color'=>'text-primary'],
    ['icon'=>'handshake','value'=>'200+','label'=>'Projets Collaboratifs','color'=>'text-accent'],
    ['icon'=>'users','value'=>'15+','label'=>"Années d'Expérience",'color'=>'text-primary'],
];
@endphp

<section class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-background to-muted/30 relative overflow-hidden" x-data="{ hoveredPartner: null }">
    {{-- Background --}}
    <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
    <div class="absolute top-20 left-10 w-32 h-32 bg-primary/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 right-10 w-40 h-40 bg-accent/10 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto relative z-10">
        {{-- Header --}}
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-primary to-accent rounded-2xl mb-6 shadow-lg">
                {{-- Handshake icon (Heroicons inline) --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14s1.5-2 4-2 4 2 4 2M8 14v4m8-4v4m-5-4v4m0-10a4 4 0 014 4H7a4 4 0 014-4z"/>
                </svg>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-foreground mb-6 text-balance">
                Nos <span class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Partenaires</span>
            </h2>
            <p class="text-xl text-muted-foreground max-w-3xl mx-auto text-pretty">
                Nous collaborons avec les leaders de l'industrie pour offrir des solutions exceptionnelles et construire l'avenir ensemble
            </p>
        </div>

        {{-- Stats --}}
        {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            @foreach($stats as $stat)
            <div class="bg-card/80 backdrop-blur-sm rounded-2xl p-6 border border-border/50 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="flex items-center space-x-4">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-primary/20 to-accent/20 flex items-center justify-center">
                        @if($stat['icon'] === 'building')
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 {{ $stat['color'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21V7a2 2 0 012-2h4V3h6v2h4a2 2 0 012 2v14M8 21h8"/>
                        </svg>
                        @elseif($stat['icon'] === 'handshake')
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 {{ $stat['color'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14s1.5-2 4-2 4 2 4 2M8 14v4m8-4v4m-5-4v4m0-10a4 4 0 014 4H7a4 4 0 014-4z"/>
                        </svg>
                        @elseif($stat['icon'] === 'users')
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 {{ $stat['color'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87M16 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        @endif
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-foreground">{{ $stat['value'] }}</div>
                        <div class="text-sm text-muted-foreground">{{ $stat['label'] }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div> --}}

        {{-- Partners Grid --}}
        <div class="bg-gradient-to-r from-card/60 to-card/40 backdrop-blur-xl rounded-3xl p-8 md:p-12 border border-white/20 shadow-2xl mb-12 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-primary/5 via-transparent to-accent/5 rounded-3xl"></div>
            <div class="relative z-10">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
                    @foreach($partners as $partner)
                    <div class="group relative" @mouseenter="hoveredPartner='{{ $partner['id'] }}'" @mouseleave="hoveredPartner=null">
                        <div class="bg-white/95 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-white/30 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 hover:scale-105 hover:bg-white">
                            <div class="relative w-full mb-4" style="height: 150px;">
                                <img src="{{ $partner['logo'] }}" alt="{{ $partner['name'] }} logo" class="object-contain w-full h-full transition-all duration-500" :class="hoveredPartner === '{{ $partner['id'] }}' ? 'grayscale-0 scale-110' : 'grayscale hover:grayscale-0'">
                            </div>
                            <h3 class="text-sm font-semibold text-center text-foreground group-hover:text-primary transition-colors duration-300">
                                {{ $partner['name'] }}
                            </h3>
                            <div>

                                <p class="text-center italic">
                                    {{ $partner['temoignage'] }}
                                </p>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="text-center">
            <div class="bg-gradient-to-r from-card/90 to-card/70 backdrop-blur-xl rounded-3xl p-8 md:p-10 border border-white/20 shadow-2xl relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-primary/10 via-transparent to-accent/10 rounded-3xl"></div>
                <div class="relative z-10">
                    <h3 class="text-2xl md:text-3xl font-bold text-foreground mb-4">Rejoignez Notre Réseau de Partenaires</h3>
                    <p class="text-muted-foreground mb-8 max-w-2xl mx-auto text-lg leading-relaxed">
                        Découvrez comment nos partenariats stratégiques nous permettent de livrer des projets d'exception et d'innover constamment dans le secteur de la construction.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/partners" class="inline-flex items-center justify-center bg-primary text-primary-foreground shadow-lg hover:shadow-xl transition-all duration-300 px-8 py-3 rounded-lg text-lg font-semibold">
                            Voir Tous Nos Partenaires
                            <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="/become-partner" class="inline-flex items-center justify-center border-2 border-accent text-accent hover:bg-accent hover:text-accent-foreground transition-all duration-300 bg-white/50 backdrop-blur-sm px-8 py-3 rounded-lg text-lg font-semibold">
                            Devenir Partenaire
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


















<section class="py-20">
    <div class="container mx-auto px-4">
        {{-- Header --}}
        <div class="text-center space-y-4 mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-balance">Fast-Track Your Projects</h2>
            <p class="text-muted-foreground max-w-2xl mx-auto">
                ScrewFast dramatically boosted our project efficiency. Setup was instant, and their rapid response times are phenomenal. Truly a game-changer in hardware and construction support!
            </p>
        </div>

        {{-- Testimonial Card --}}
        <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-lg border border-border/50">
            <div class="p-8">
                <blockquote class="text-lg text-center text-muted-foreground mb-6">
                    "ScrewFast dramatically boosted our project efficiency. Setup was instant, and their rapid response times are phenomenal. Truly a game-changer in hardware and construction support!"
                </blockquote>
                <div class="flex items-center justify-center space-x-4">
                    {{-- Avatar --}}
                    <div class="w-12 h-12 rounded-full overflow-hidden bg-gray-200 flex items-center justify-center">
                        <img src="/construction-manager-headshot.png" alt="Samantha Ruiz" class="w-full h-full object-cover">
                    </div>
                    <div class="text-center">
                        <div class="font-semibold text-foreground">Samantha Ruiz</div>
                        <div class="text-sm text-muted-foreground">Chief Operations Officer</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="grid md:grid-cols-3 gap-8 mt-16">
            <div class="text-center">
                <div class="text-4xl font-bold text-primary mb-2">70k+</div>
                <div class="text-sm text-muted-foreground">
                    <span class="font-semibold text-foreground">customers equipped</span> – from DIY to major construction firms
                </div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-primary mb-2">35%</div>
                <div class="text-sm text-muted-foreground">
                    <span class="font-semibold text-foreground">boost in project efficiency</span> with ScrewFast tools and services
                </div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-primary mb-2">15.3%</div>
                <div class="text-sm text-muted-foreground">
                    <span class="font-semibold text-foreground">reduction in project delays</span> reported by long-term clients
                </div>
            </div>
        </div> --}}
    </div>
</section>




































{{-- <section class="py-20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-balance">Simple, Transparent Pricing</h2>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                Choose the plan that fits your project needs. All plans include our core features with no hidden fees.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            @php
                $plans = [
                    [
                        'name' => 'Starter Kit',
                        'price' => 49,
                        'period' => 'month',
                        'description' => 'Perfect for small projects and individual contractors',
                        'features' => [
                            'Basic tool access',
                            'Email support',
                            'Monthly maintenance',
                            'Standard documentation',
                            'Community access',
                        ],
                        'popular' => false,
                    ],
                    [
                        'name' => 'Professional Toolbox',
                        'price' => 99,
                        'period' => 'month',
                        'description' => 'Ideal for growing businesses and regular projects',
                        'features' => [
                            'Premium tool access',
                            'Priority support',
                            'Weekly maintenance',
                            'Custom integrations',
                            'Advanced documentation',
                            'Training resources',
                            'Project management tools',
                        ],
                        'popular' => true,
                    ],
                    [
                        'name' => 'Enterprise Suite',
                        'price' => 199,
                        'period' => 'month',
                        'description' => 'For large organizations with complex requirements',
                        'features' => [
                            'Full tool suite access',
                            '24/7 dedicated support',
                            'Daily maintenance',
                            'Custom integrations',
                            'White-label options',
                            'On-site training',
                            'Advanced analytics',
                            'API access',
                        ],
                        'popular' => false,
                    ],
                ];
            @endphp

            @foreach($plans as $plan)
                <div class="relative bg-white rounded-2xl shadow-lg border p-6 {{ $plan['popular'] ? 'border-orange-500 shadow-lg scale-105' : '' }}">
                    @if($plan['popular'])
                        <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                            <div class="bg-gradient-to-r from-orange-500 to-yellow-500 text-white px-4 py-1 rounded-full text-xs font-medium flex items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 fill-current" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                                </svg>
                                <span>MOST POPULAR</span>
                            </div>
                        </div>
                    @endif

                    <div class="text-center pb-8">
                        <h3 class="text-2xl font-bold">{{ $plan['name'] }}</h3>
                        <p class="text-sm text-muted-foreground mt-2">{{ $plan['description'] }}</p>
                        <div class="mt-4 flex items-baseline justify-center">
                            <span class="text-4xl font-bold">${{ $plan['price'] }}</span>
                            <span class="text-muted-foreground ml-1">/{{ $plan['period'] }}</span>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <ul class="space-y-3">
                            @foreach($plan['features'] as $feature)
                                <li class="flex items-center space-x-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span class="text-sm text-muted-foreground">{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <a href="#" class="w-full inline-block text-center py-3 rounded-lg font-medium
                            {{ $plan['popular'] ? 'bg-gradient-to-r from-orange-500 to-yellow-500 text-white hover:from-orange-600 hover:to-yellow-600' : 'border border-gray-300 text-gray-700 hover:bg-gray-100' }}">
                            {{ $plan['popular'] ? 'Get Started' : 'Choose Plan' }}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <p class="text-muted-foreground mb-4">
                Need a custom solution? We offer tailored packages for enterprise clients.
            </p>
            <a href="#" class="inline-block px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-100">
                Contact Sales
            </a>
        </div>
    </div>
</section> --}}


























<section class="py-20">
    <div class="container mx-auto px-4">
        {{-- Header --}}
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-balance">Frequently Asked Questions</h2>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                Find answers to common questions about ScrewFast tools and services.
            </p>
        </div>

        {{-- FAQ List --}}
        <div class="max-w-3xl mx-auto space-y-4" x-data="{ openIndex: 0 }">
            @php
                $faqs = [
                    [
                        'question' => 'What types of projects are ScrewFast tools suitable for?',
                        'answer' => 'ScrewFast tools are designed for a wide range of construction and hardware projects, from residential renovations to large-scale commercial builds. Our tools are engineered to meet professional standards and handle demanding applications.',
                    ],
                    [
                        'question' => 'How do I know which ScrewFast product is right for my needs?',
                        'answer' => 'Our expert team provides personalized consultations to help you select the perfect tools for your specific project requirements. Contact our sales team for detailed product recommendations based on your needs.',
                    ],
                    [
                        'question' => 'What kind of warranty and support do you offer?',
                        'answer' => 'All ScrewFast tools come with comprehensive warranties and our dedicated support team provides 24/7 assistance. We also offer extensive documentation and training resources to ensure you get the most out of your tools.',
                    ],
                    [
                        'question' => 'Can I integrate ScrewFast tools with my existing workflow?',
                        'answer' => 'ScrewFast tools are designed for seamless integration with existing construction workflows. Our team can help you implement our solutions with minimal disruption to your current processes.',
                    ],
                    [
                        'question' => 'Do you offer training for new users?',
                        'answer' => 'Yes, we provide comprehensive training programs for all our tools and services. This includes on-site training, online resources, and ongoing support to ensure your team can effectively use our products.',
                    ],
                    [
                        'question' => 'What makes ScrewFast different from other tool providers?',
                        'answer' => 'ScrewFast combines cutting-edge technology with proven reliability. Our tools are built to professional standards, backed by exceptional customer service, and supported by comprehensive documentation and training resources.',
                    ],
                ];
            @endphp

            @foreach($faqs as $index => $faq)
                <div class="bg-white rounded-2xl shadow overflow-hidden">
                    <button
                        class="w-full text-left p-6 flex items-center justify-between hover:bg-gray-100 transition-colors"
                        @click="openIndex === {{ $index }} ? openIndex = null : openIndex = {{ $index }}"
                    >
                        <span class="font-semibold text-foreground pr-4">{{ $faq['question'] }}</span>
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
                        <p class="text-muted-foreground leading-relaxed">{{ $faq['answer'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>







@endsection