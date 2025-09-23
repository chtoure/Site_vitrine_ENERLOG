
@extends('component.app')

@section('content')



<section class="relative py-20 lg:py-28 bg-gradient-to-br from-primary/20 via-accent/15 to-primary/10 overflow-hidden">
    {{-- Background gradients --}}
    <div class="absolute inset-0 bg-gradient-to-r from-primary/5 via-transparent to-accent/5"></div>
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-accent/10 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            {{-- Texte principal --}}
            <div class="space-y-8">
                <div class="space-y-6">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-balance leading-tight">
                        Solutions Digitales <span class="text-primary">Innovantes</span> pour Votre Entreprise
                    </h1>
                    <p class="text-xl text-muted-foreground text-pretty max-w-xl">
                        Spécialiste en gestion de tickets événements, livraison de colis, cartes pétrolières, tracking et
                        solutions de paiement digital.
                    </p>
                </div>

                {{-- Boutons --}}
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#services" class="inline-flex items-center justify-center bg-primary hover:bg-primary/90 text-primary-foreground font-semibold px-8 py-3 rounded-lg shadow-lg text-lg">
                        Découvrir nos services
                        {{-- ArrowRight Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="#devis" class="inline-flex items-center justify-center border border-accent text-accent hover:bg-accent hover:text-accent-foreground font-semibold px-8 py-3 rounded-lg shadow-lg text-lg bg-transparent">
                        Demander un devis
                    </a>
                </div>

                {{-- Stats --}}
                <div class="grid grid-cols-3 gap-6 pt-8">
                    {{-- Clients satisfaits --}}
                    <div class="text-center bg-primary/15 border border-primary/20 rounded-lg p-4 shadow-lg">
                        <div class="flex items-center justify-center mb-2">
                            {{-- Users Icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87M16 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                            <span class="text-2xl font-bold text-primary">500+</span>
                        </div>
                        <p class="text-sm text-foreground font-medium">Clients satisfaits</p>
                    </div>

                    {{-- Disponibilité --}}
                    <div class="text-center bg-accent/20 border border-accent/30 rounded-lg p-4 shadow-lg">
                        <div class="flex items-center justify-center mb-2">
                            {{-- Zap Icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                            <span class="text-2xl font-bold text-accent">99.9%</span>
                        </div>
                        <p class="text-sm text-foreground font-medium">Disponibilité</p>
                    </div>

                    {{-- Support --}}
                    <div class="text-center bg-primary/15 border border-primary/20 rounded-lg p-4 shadow-lg">
                        <div class="flex items-center justify-center mb-2">
                            {{-- Shield Icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12l8-4-8-4-8 4 8 4z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12v8"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12L4 8v8l8 4 8-4V8l-8 4z"/>
                            </svg>
                            <span class="text-2xl font-bold text-primary">24/7</span>
                        </div>
                        <p class="text-sm text-foreground font-medium">Support</p>
                    </div>
                </div>
            </div>

            {{-- Image --}}
            <div class="relative lg:pl-8">
                <div class="relative">
                    <div class="bg-gradient-to-br from-primary/25 to-accent/25 rounded-2xl p-8 backdrop-blur-sm border border-primary/20 shadow-2xl">
                        <img src="{{ asset('/modern-digital-dashboard-interface.jpg') }}" alt="Interface moderne de gestion digitale ENERLOG" class="w-full h-auto rounded-lg shadow-lg">
                    </div>
                    <div class="absolute -top-4 -right-4 bg-primary text-primary-foreground rounded-full p-3 shadow-xl">
                        {{-- Zap Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <div class="absolute -bottom-4 -left-4 bg-accent text-accent-foreground rounded-full p-3 shadow-xl">
                        {{-- Shield Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12l8-4-8-4-8 4 8 4z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12v8"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12L4 8v8l8 4 8-4V8l-8 4z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>










@php
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
@endphp

<section class="py-20 bg-gradient-to-b from-accent/10 via-primary/5 to-accent/15 relative overflow-hidden">
    {{-- Background gradients --}}
    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-primary/5 to-transparent"></div>
    <div class="absolute top-1/4 left-0 w-64 h-64 bg-primary/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-1/4 right-0 w-64 h-64 bg-accent/10 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Title --}}
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
                Nos <span class="text-primary">Solutions</span> Digitales
            </h2>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                Des technologies innovantes pour optimiser vos processus métier
            </p>
        </div>

        {{-- Features Grid --}}
        <div class="grid md:grid-cols-2 gap-8">
            @foreach($features as $feature)
                <div class="bg-gradient-to-br from-card/95 to-primary/5 backdrop-blur-sm border border-primary/20 hover:border-primary/40 transition-all duration-300 hover:shadow-2xl shadow-lg rounded-xl group">
                    <div class="p-8 flex items-start space-x-6">
                        {{-- Icon --}}
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

                        {{-- Text --}}
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
</section>










@php
$tabs = [
    [
        'id' => 'tools',
        'heading' => "Cutting-Edge Tools",
        'content' => "Empower your projects with ScrewFast's cutting-edge tools. Experience enhanced efficiency in construction management with our sophisticated automated solutions.",
        'icon' => 'wrench',
        'image' => '/yellow-and-black-heavy-construction-equipment-on-c.jpg',
        'alt' => 'Yellow and black heavy equipment on brown grass field',
        'redirectUrl' => '/tools',
    ],
    [
        'id' => 'dashboard',
        'heading' => "Intuitive Dashboards",
        'content' => "Navigate with ease using ScrewFast's intuitive dashboards. Set up and oversee your projects seamlessly, with user-friendly interfaces designed for quick and effective workflow management.",
        'icon' => 'bar-chart',
        'image' => '/modern-construction-project-management-dashboard-i.jpg',
        'alt' => 'A screenshot or graphic representation of the intuitive dashboard',
        'redirectUrl' => '/dashboard',
    ],
    [
        'id' => 'features',
        'heading' => "Robust Features",
        'content' => "Minimize complexity, maximize productivity. ScrewFast's robust features are engineered to streamline your construction process, delivering results that stand out for their excellence.",
        'icon' => 'home',
        'image' => '/gray-metal-building-frame-construction-site-with-t.jpg',
        'alt' => 'Gray metal building frame near tower crane during daytime',
        'redirectUrl' => '/features',
    ],
];
@endphp

<section class="py-20" x-data="{ activeTab: 0 }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Title --}}
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-balance">
                Customize ScrewFast's offerings to perfectly suit your hardware and construction needs.
            </h2>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
            {{-- Tabs --}}
            <div class="space-y-6">
                @foreach($tabs as $index => $tab)
                    <div
                        class="cursor-pointer transition-all duration-300 border rounded-xl shadow-lg p-6"
                        :class="activeTab === {{ $index }} ? 'border-orange-500 bg-orange-50' : 'hover:border-muted-foreground/20'"
                        @click="activeTab = {{ $index }}"
                    >
                        <div class="flex items-start space-x-4">
                            {{-- Icon --}}
                            <div
                                class="flex-shrink-0 w-12 h-12 rounded-lg flex items-center justify-center"
                                :class="activeTab === {{ $index }} ? 'bg-orange-500 text-white' : 'bg-muted text-muted-foreground'"
                            >
                                @if($tab['icon'] === 'wrench')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.7 7.3l7 7-3.4 3.4-7-7 3.4-3.4zM3 21v-4.5l6-6 4.5 4.5-6 6H3z"/>
                                    </svg>
                                @elseif($tab['icon'] === 'bar-chart')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3v18h18M9 17v-6m4 6v-10m4 10v-4"/>
                                    </svg>
                                @elseif($tab['icon'] === 'home')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9v9a3 3 0 01-3 3H6a3 3 0 01-3-3v-9z"/>
                                    </svg>
                                @endif
                            </div>

                            {{-- Text --}}
                            <div class="space-y-2">
                                <h3 class="text-xl font-semibold">{{ $tab['heading'] }}</h3>
                                <p class="text-muted-foreground leading-relaxed">{{ $tab['content'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Tab Image --}}
            <div class="relative">
                <div class="relative bg-card rounded-2xl p-4 shadow-xl group">
                    @foreach($tabs as $index => $tab)
                        <img
                            x-show="activeTab === {{ $index }}"
                            src="{{ $tab['image'] }}"
                            alt="{{ $tab['alt'] }}"
                            class="w-full h-auto rounded-lg"
                        />
                    @endforeach

                    {{-- Buttons --}}
                    <div class="absolute top-6 right-6 z-10 flex gap-2">
                        @foreach($tabs as $index => $tab)
                            <button
                                x-show="activeTab === {{ $index }}"
                                @click="window.open('{{ $tab['redirectUrl'] }}', '_blank')"
                                class="w-10 h-10 bg-orange-500 hover:bg-orange-600 text-white rounded-full flex items-center justify-center shadow-lg transition-all duration-300 hover:scale-110"
                                title="Voir plus"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 13v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6"/>
                                </svg>
                            </button>

                            <button
                                x-show="activeTab === {{ $index }}"
                                @click="window.location.href='{{ $tab['redirectUrl'] }}'"
                                class="w-10 h-10 bg-[#4A3B8C] hover:bg-[#5B4C9D] text-white rounded-full flex items-center justify-center shadow-lg transition-all duration-300 hover:scale-110"
                                title="Accéder"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







{{-- procesus --}}

@php
$steps = [
    ['id'=>'web','label'=>'Web','image'=>'/computer-monitor-web-interface.jpg','color'=>'bg-gradient-to-br from-[#4A3B8C] to-[#5B4C9D]','shadowColor'=>'shadow-[#4A3B8C]/30'],
    ['id'=>'gay-process','label'=>'Gay Process','image'=>'/document-processing-workflow.jpg','color'=>'bg-gradient-to-br from-[#F29100] to-[#FF9F1A]','shadowColor'=>'shadow-[#F29100]/30'],
    ['id'=>'mobile','label'=>'Mobile','image'=>'/smartphone-mobile-device.jpg','color'=>'bg-gradient-to-br from-[#4A3B8C] to-[#5B4C9D]','shadowColor'=>'shadow-[#4A3B8C]/30'],
    ['id'=>'image','label'=>'Image','image'=>'/image-gallery-photo.jpg','color'=>'bg-gradient-to-br from-[#F29100] to-[#FF9F1A]','shadowColor'=>'shadow-[#F29100]/30'],
    ['id'=>'image-detim','label'=>"Image D'Etim",'image'=>'/image-estimation-analysis.jpg','color'=>'bg-gradient-to-br from-[#4A3B8C] to-[#5B4C9D]','shadowColor'=>'shadow-[#4A3B8C]/30'],
    ['id'=>'description','label'=>'Description','image'=>'/document-text-description.jpg','color'=>'bg-gradient-to-br from-[#F29100] to-[#FF9F1A]','shadowColor'=>'shadow-[#F29100]/30'],
];

$descriptions = [
    'web'=>['title'=>'Interface Web','description'=>'Point d\'entrée intuitif via notre interface web moderne pour initier le processus de traitement avec une expérience utilisateur optimisée.'],
    'gay-process'=>['title'=>'Processus Gay','description'=>'Étape de traitement spécialisé et personnalisé des données selon les paramètres définis avec une précision maximale.'],
    'mobile'=>['title'=>'Optimisation Mobile','description'=>'Adaptation intelligente et optimisation complète pour toutes les plateformes mobiles avec une performance exceptionnelle.'],
    'image'=>['title'=>"Traitement d'Images",'description'=>"Traitement avancé et optimisation professionnelle des éléments visuels et graphiques avec des algorithmes de pointe."],
    'image-detim'=>['title'=>"Estimation d'Images",'description'=>"Analyse approfondie et validation précise des images selon des critères spécifiques avec intelligence artificielle."],
    'description'=>['title'=>'Génération de Descriptions','description'=>"Création automatique et intelligente des descriptions détaillées et métadonnées optimisées pour le référencement."],
];
@endphp

<section class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-background via-muted/20 to-background relative overflow-hidden" x-data="{ activeStep: null }">
    <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
    <div class="absolute top-20 left-10 w-32 h-32 bg-[#4A3B8C]/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 right-10 w-40 h-40 bg-[#F29100]/10 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-[#4A3B8C] to-[#F29100] rounded-2xl mb-6 shadow-lg">
                <div class="w-8 h-8 bg-white rounded-lg flex items-center justify-center">
                    <div class="w-4 h-4 bg-gradient-to-br from-[#4A3B8C] to-[#F29100] rounded-sm"></div>
                </div>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-foreground mb-6 text-balance">
                Notre <span class="bg-gradient-to-r from-[#4A3B8C] to-[#F29100] bg-clip-text text-transparent">Processus</span>
            </h2>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto text-pretty">
                Découvrez notre flux de travail optimisé pour des résultats exceptionnels
            </p>
        </div>

        {{-- Desktop view --}}
        <div class="hidden md:block">
            <div class="bg-gradient-to-r from-card/50 to-card/30 backdrop-blur-xl rounded-3xl p-8 shadow-2xl border border-white/10">
                <div class="flex items-center justify-between">
                    @foreach($steps as $index => $step)
                        <div class="flex items-center group">
                            <div class="flex flex-col items-center">
                                <button @click="activeStep = (activeStep === '{{ $step['id'] }}' ? null : '{{ $step['id'] }}')"
                                    class="relative w-20 h-20 lg:w-24 lg:h-24 rounded-xl {{ $step['color'] }} flex items-center justify-center overflow-hidden cursor-pointer transition-all duration-500 ease-out hover:scale-110 hover:-translate-y-2 shadow-xl {{ $step['shadowColor'] }}"
                                    :class="activeStep === '{{ $step['id'] }}' ? 'scale-110 -translate-y-2 ring-4 ring-white/30' : ''">
                                    <img src="{{ $step['image'] }}" alt="{{ $step['label'] }}" class="object-cover w-full h-full relative z-10" />
                                    <div x-show="activeStep === '{{ $step['id'] }}'" class="absolute inset-0 rounded-xl bg-white/30 animate-ping"></div>
                                </button>
                                <span class="mt-4 text-sm lg:text-base font-semibold text-foreground text-center max-w-[100px] text-balance transition-colors duration-300 group-hover:text-[#4A3B8C]">{{ $step['label'] }}</span>
                            </div>
                            @if($index < count($steps)-1)
                                <div class="flex-1 mx-6 lg:mx-8 relative">
                                    <div class="border-t-3 border-dashed border-muted-foreground/30 relative overflow-hidden">
                                        <div class="absolute inset-0 border-t-3 border-dashed border-[#4A3B8C]/50 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-1000 ease-out"></div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Mobile view --}}
        <div class="md:hidden space-y-6">
            @foreach($steps as $index => $step)
                <div class="relative">
                    <div class="bg-gradient-to-r from-card/80 to-card/60 backdrop-blur-sm rounded-2xl border border-white/10 shadow-lg p-4 flex items-center space-x-4">
                        <button @click="activeStep = (activeStep === '{{ $step['id'] }}' ? null : '{{ $step['id'] }}')"
                            class="relative w-16 h-16 rounded-lg {{ $step['color'] }} flex items-center justify-center flex-shrink-0 overflow-hidden cursor-pointer transition-all duration-300 shadow-lg {{ $step['shadowColor'] }}"
                            :class="activeStep === '{{ $step['id'] }}' ? 'scale-105 ring-4 ring-white/30' : ''">
                            <img src="{{ $step['image'] }}" alt="{{ $step['label'] }}" class="object-cover w-full h-full rounded-lg" />
                            <div x-show="activeStep === '{{ $step['id'] }}'" class="absolute inset-0 rounded-lg bg-white/30 animate-ping"></div>
                        </button>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-foreground">{{ $step['label'] }}</h3>
                            <div class="w-full bg-muted/50 h-1 rounded-full mt-2">
                                <div class="h-1 bg-gradient-to-r from-[#4A3B8C] to-[#FF9F1A] rounded-full transition-all duration-500" :style="'width: '+(({{ $index+1 }} / {{ count($steps) }})*100)+'%'"></div>
                            </div>
                        </div>
                    </div>

                    @if($index < count($steps)-1)
                        <div class="flex justify-center py-2">
                            <div class="w-1 h-6 bg-gradient-to-b from-muted-foreground/30 to-transparent rounded-full"></div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>

        {{-- Step details --}}
        <div x-show="activeStep" class="mt-8">
            <div class="bg-gradient-to-r from-card/90 to-card/70 backdrop-blur-sm rounded-2xl p-8 border border-border/50 shadow-xl flex items-start space-x-6">
                <div class="w-12 h-12 rounded-xl flex items-center justify-center shadow-lg flex-shrink-0"
                     :class="$steps.filter(s => s.id === activeStep)[0].color ?? ''">
                    <img :src="$steps.filter(s => s.id === activeStep)[0].image" class="w-6 h-6" alt="">
                </div>
                <div class="flex-1">
                    <h3 class="text-2xl font-bold text-foreground mb-3" x-text="@json($descriptions) [activeStep].title"></h3>
                    <p class="text-muted-foreground text-lg leading-relaxed" x-text="@json($descriptions) [activeStep].description"></p>
                </div>
            </div>
        </div>
    </div>
</section>
















@php
$partners = [
    ['id'=>'strabag','name'=>'STRABAG','logo'=>'/strabag-construction-company-logo.jpg','description'=>'Leader européen de la construction'],
    ['id'=>'hochtief','name'=>'HOCHTIEF','logo'=>'/hochtief-construction-company-logo.jpg','description'=>'Expertise internationale en construction'],
    ['id'=>'vinci','name'=>'VINCI','logo'=>'/vinci-construction-company-logo.jpg','description'=>'Groupe mondial de construction'],
    ['id'=>'bouygues','name'=>'BOUYGUES','logo'=>'/bouygues-construction-company-logo.jpg','description'=>'Innovation dans la construction'],
    ['id'=>'eiffage','name'=>'EIFFAGE','logo'=>'/eiffage-construction-company-logo.jpg','description'=>'Solutions durables de construction'],
    ['id'=>'skanska','name'=>'SKANSKA','logo'=>'/skanska-construction-company-logo.jpg','description'=>'Construction responsable et durable'],
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
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
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
        </div>

        {{-- Partners Grid --}}
        <div class="bg-gradient-to-r from-card/60 to-card/40 backdrop-blur-xl rounded-3xl p-8 md:p-12 border border-white/20 shadow-2xl mb-12 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-primary/5 via-transparent to-accent/5 rounded-3xl"></div>
            <div class="relative z-10">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
                    @foreach($partners as $partner)
                    <div class="group relative" @mouseenter="hoveredPartner='{{ $partner['id'] }}'" @mouseleave="hoveredPartner=null">
                        <div class="bg-white/95 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-white/30 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 hover:scale-105 hover:bg-white">
                            <div class="relative w-full h-16 mb-4">
                                <img src="{{ $partner['logo'] }}" alt="{{ $partner['name'] }} logo" class="object-contain w-full h-full transition-all duration-500" :class="hoveredPartner === '{{ $partner['id'] }}' ? 'grayscale-0 scale-110' : 'grayscale hover:grayscale-0'">
                            </div>
                            <h3 class="text-sm font-semibold text-center text-foreground group-hover:text-primary transition-colors duration-300">
                                {{ $partner['name'] }}
                            </h3>
                        </div>

                        {{-- Tooltip --}}
                        <div x-show="hoveredPartner === '{{ $partner['id'] }}'" class="absolute -top-16 left-1/2 transform -translate-x-1/2 bg-foreground text-background px-3 py-2 rounded-lg text-xs whitespace-nowrap z-20 shadow-xl">
                            {{ $partner['description'] }}
                            <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-foreground"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Call to Action --}}
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

        {{-- Stats Grid --}}
        <div class="grid md:grid-cols-3 gap-8 mt-16">
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
        </div>
    </div>
</section>




































<section class="py-20">
    <div class="container mx-auto px-4">
        {{-- Header --}}
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-balance">Simple, Transparent Pricing</h2>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                Choose the plan that fits your project needs. All plans include our core features with no hidden fees.
            </p>
        </div>

        {{-- Pricing Cards --}}
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
                                {{-- Star Icon --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 fill-current" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                                </svg>
                                <span>MOST POPULAR</span>
                            </div>
                        </div>
                    @endif

                    {{-- Card Header --}}
                    <div class="text-center pb-8">
                        <h3 class="text-2xl font-bold">{{ $plan['name'] }}</h3>
                        <p class="text-sm text-muted-foreground mt-2">{{ $plan['description'] }}</p>
                        <div class="mt-4 flex items-baseline justify-center">
                            <span class="text-4xl font-bold">${{ $plan['price'] }}</span>
                            <span class="text-muted-foreground ml-1">/{{ $plan['period'] }}</span>
                        </div>
                    </div>

                    {{-- Features --}}
                    <div class="space-y-6">
                        <ul class="space-y-3">
                            @foreach($plan['features'] as $feature)
                                <li class="flex items-center space-x-3">
                                    {{-- Check Icon --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span class="text-sm text-muted-foreground">{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>

                        {{-- Button --}}
                        <a href="#" class="w-full inline-block text-center py-3 rounded-lg font-medium
                            {{ $plan['popular'] ? 'bg-gradient-to-r from-orange-500 to-yellow-500 text-white hover:from-orange-600 hover:to-yellow-600' : 'border border-gray-300 text-gray-700 hover:bg-gray-100' }}">
                            {{ $plan['popular'] ? 'Get Started' : 'Choose Plan' }}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Contact Sales --}}
        <div class="text-center mt-12">
            <p class="text-muted-foreground mb-4">
                Need a custom solution? We offer tailored packages for enterprise clients.
            </p>
            <a href="#" class="inline-block px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-100">
                Contact Sales
            </a>
        </div>
    </div>
</section>


























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