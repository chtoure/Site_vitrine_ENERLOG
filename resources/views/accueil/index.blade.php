
@extends('component.app')

@section('content')

    @php
        use Illuminate\Support\Str;
    @endphp

    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('/images/templates/equipe_1.JPG') }}" 
                alt="Interface moderne de gestion digitale ENERLOG" 
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-[#222222]/95 via-[#222222]/90 to-[#312782]/80"></div>
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.03\"%3E%3Ccircle cx=\"30\" cy=\"30\" r=\"1\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
        </div>
        
        <div class="absolute inset-0 z-5">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-[#F29100]/8 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-[#312782]/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center max-w-5xl mx-auto space-y-12">
                <div class="inline-flex items-center px-8 py-4 rounded-full bg-[#222222]/60 border border-[#F29100]/20 backdrop-blur-xl">
                    <div class="w-3 h-3 bg-[#F29100] rounded-full mr-4 animate-pulse"></div>
                    <span class="text-white text-sm font-medium tracking-wide">Solutions Digitales Innovantes</span>
                </div>

                <div class="space-y-8">
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold leading-tight">
                        <span class="text-white italic">{{$parameter["name"]}}</span>
                        <br>
                        
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-300 max-w-4xl mx-auto leading-relaxed font-light italic">
                        {{ Str::limit($parameter['description'], 100, '...') }}
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center pt-4">
                    <a href="{{route('public.services.index')}}" class="group relative inline-flex items-center justify-center px-12 py-6 text-xl font-semibold text-white bg-[#F29100] rounded-2xl shadow-2xl hover:shadow-[#F29100]/40 transition-all duration-300 hover:scale-105 hover:bg-[#F29100]/90">
                        <span class="relative z-10">Découvrir nos services</span>
                        <svg class="ml-3 w-6 h-6 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <button
                        onclick="window.open('{{$parameter['login_url']}}', '_blank')"
                        class="inline-flex items-center justify-center px-12 py-6 text-xl font-semibold text-white border-2 border-white/20 rounded-2xl backdrop-blur-md hover:bg-white/10 hover:border-white/30 transition-all duration-300"
                    >
                        Créer un compte
                    </button>
                </div>

            </div>


        </div>

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

    <section class="py-20 bg-gradient-to-br from-slate-50 to-gray-100" x-data="{ activeTab: 0 }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-balance text-[#222222]">
                    Nous développons des solutions numériques innovantes et collaborons avec un réseau de partenaires pour accompagner nos clients dans leurs projets.
                </h2>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    @foreach(array_slice($services, 0, 3) as $index => $service)
                        <div
                            class="cursor-pointer transition-all duration-300 border rounded-xl shadow-lg p-6 bg-white hover:shadow-xl"
                            :class="activeTab === {{ $index }} ? 'border-[#F29100] bg-gradient-to-r from-[#F29100]/5 to-[#312782]/5 shadow-xl' : 'border-gray-200 hover:border-[#F29100]/30'"
                            @click="activeTab = {{ $index }}"
                        >
                            <div class="flex items-start space-x-4">
                                <div
                                    class="flex-shrink-0 w-12 h-12 rounded-lg flex items-center justify-center transition-all duration-300 overflow-hidden"
                                    :class="activeTab === {{ $index }} ? 'bg-[#F29100] shadow-lg' : 'bg-gray-100'"
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
                                        <div class="flex items-center space-x-2">
                                            <span class="text-xl font-bold text-[#F29100]">{{ $service['price'] }}fcfa</span>
                                            <span class="text-sm text-gray-500">/mois</span>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 leading-relaxed">{{ Str::limit($service['description'], 150, '...') }}</p>
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="relative">
                    <div class="relative bg-white rounded-2xl p-4 shadow-2xl overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent z-10 pointer-events-none"></div>
                        
                        @foreach($services as $index => $tab)
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
                            @foreach($services as $index => $tab)
                                <div x-show="activeTab === {{ $index }}" class="flex flex-col gap-2">
                                    <button
                                        class="inline-flex items-center justify-center bg-[#F29100] hover:bg-[#F29100]/90 text-white shadow-lg hover:shadow-xl transition-all duration-300 px-6 py-3 rounded-lg text-sm font-semibold backdrop-blur-sm"
                                        title="Voir détails"
                                    >
                                        <a href="{{route('public.services.index')}}#{{$service['id']}}" class="inline-flex items-center justify-center h-full w-full">
                                            Détails
                                            <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                            </svg>
                                        </a>
                                        
                                    </button>
                                    <button
                                        onclick="window.open('{{$parameter['login_url']}}', '_blank')"
                                        class="inline-flex items-center justify-center border-2 border-white text-white hover:bg-white hover:text-[#312782] transition-all duration-300 bg-white/10 backdrop-blur-sm px-6 py-3 rounded-lg text-sm font-semibold"
                                        title="En savoir plus"
                                    >
                                        Créer un compte
                                    </button>
                                </div>
                            @endforeach
                        </div>

                        <div class="absolute top-6 left-6 z-20">
                            @foreach($services as $index => $tab)
                                <div 
                                    x-show="activeTab === {{ $index }}"
                                    class="bg-[#312782] text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg"
                                >
                                    À partir de {{ $tab['price'] }}FCFA/mois
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>[x-cloak]{display:none !important;}</style>

    <section class="py-20 relative">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
                    Nos Actualités
                </h2>
                <p class="text-muted-foreground text-lg max-w-2xl mx-auto italic">
                    Suivez nos dernières innovations et collaborations
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach(array_slice($news, 0, 3)  as $new)
                    <article 
                        class="group border border-border rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-500 hover:-translate-y-2"
                    >
                        <div class="relative overflow-hidden">
                            <div class="w-full h-56 object-cover">
                                <img
                                    src="{{ $new['images'][0] }}"
                                    alt="{{ $new['name'] }}"
                                    class="object-contain w-full h-full group-hover:scale-110 transition-transform duration-700"
                                />
                            </div>
                            
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                            <div class="absolute top-4 right-4">
                                <span class="bg-primary text-primary-foreground px-3 py-1 rounded-full text-sm font-medium">
                                    {{ $new['id'] }}
                                </span>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-card-foreground mb-3 line-clamp-2 group-hover:text-primary transition-colors">
                                {{ $new['name'] }}
                            </h3>
                            <p class="text-muted-foreground text-sm leading-relaxed mb-6 line-clamp-3 italic">
                                {{ $new['content'] }}
                            </p>
                            
                            <div class="flex flex-col gap-3">
                                <a 
                                    href="{{ route('public.news.detail',  $new['id']) }}" 
                                    class="w-full inline-flex items-center justify-center gap-2 bg-primary hover:bg-primary/90 text-primary-foreground px-4 py-2 rounded-lg transition"
                                >
                                    Lire l'article
                                    <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                    </svg>
                                </a>
                                
                                @if(count($new['link']) > 1)
                                    <a 
                                        href="{{ $new['link'][0] }}" 
                                        target="_blank"
                                        class="w-full inline-flex items-center justify-center gap-2 border border-primary text-primary hover:bg-primary hover:text-primary-foreground px-4 py-2 rounded-lg transition"
                                    >
                                        Source alternative
                                    </a>
                                @endif
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
            <div class="mt-6">
                <a href="{{route('public.news.index')}}" 
                    class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg">
                    Voir plus
                </a>
            </div>
        </div>
    </section>

    <div 
        x-data='{
            processes: @json($solution['process']),
            currentView: @json($solution['process'][0]['id']),
            steps: @json($solution['process'][0]['steps']),
            selectedStep: @json($solution['process'][0]['steps'][0]),
            changeProcess(index){
                this.currentView = this.processes[index].id;
                this.steps = this.processes[index].steps || [];
                this.selectedStep = (this.steps && this.steps.length) ? this.steps[0] : { id: null, name: "", description: "", link: "" };
            }
        }'
        x-cloak
        class="min-h-screen p-4 md:p-8">
        <div class="max-w-7xl mx-auto mb-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-balance text-[#222222]">
                    Processus <span class="font-bold text-[#F29100]">{{$solution['name']}}</span>.
                </h2>
                <p class="text-xl text-muted-foreground max-w-2xl mx-auto italic">
                    {{$solution['description']}}
                </p>
            </div>

            <div class="flex justify-center mb-8">
                <div class="bg-card border-2 border-manga-purple/20 rounded-full p-1 shadow-lg flex gap-2">
                    @foreach($solution['process'] as $process)
                        <button
                            @click="changeProcess({{ $loop->index }})"
                            :class="currentView == {{ $process['id'] }} ? 'bg-primary text-white' : 'bg-[#F29100]'"
                            class="rounded-full px-6 py-2 font-bold"
                        >
                            {{ $process['name'] }}
                        </button>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="max-w-6xl mx-auto">
            <div class="border-4 border-foreground shadow-2xl overflow-hidden bg-white rounded-xl">
                <div class="p-8">
                    @foreach ($solution['process'] as $process)
                        <div x-show="currentView == {{ $process['id'] }}" class="text-center" x-cloak>
                            <h2 class="text-2xl font-bold text-foreground mb-6">
                                {{ $process['name'] }} — {{ $process['description'] }}
                            </h2>
                            <div class="relative inline-block">
                                <img src="{{ asset($process['image']) }}" alt="Processus - {{ $process['name'] }}" class="max-w-full h-auto rounded-2xl border-4 border-foreground shadow-xl">
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="bg-gradient-to-r from-manga-purple/10 to-manga-orange/10 p-6 border-t-4 border-foreground">
                    <h3 class="text-xl font-bold text-foreground mb-4 text-center">Étapes du Processus</h3>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <template x-for="step in steps" :key="step.id">
                            <div 
                                @click="selectedStep = step"
                                class="flex items-center gap-3 p-3 bg-white/50 rounded-xl border-2 border-foreground/20 cursor-pointer hover:bg-white transition"
                            >
                                <div class="w-8 h-8 bg-manga-purple text-white rounded-full flex items-center justify-center font-bold text-sm">
                                    <span x-text="step.id"></span>
                                </div>
                                <div>
                                    <div class="font-bold text-foreground text-sm" x-text="step.name"></div>
                                    <div class="text-xs text-muted-foreground" x-text="(step.description && step.description.length > 20) ? step.description.slice(0,20) + '...' : step.description"></div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center">
                <div class="border-4 border-foreground shadow-xl rounded-xl">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2" x-text="selectedStep ? ('Détails étape ' + selectedStep.id + ' - ' + selectedStep.name) : 'Aucune étape sélectionnée'"></h3>
                        <p class="text-sm opacity-90" x-text="selectedStep ? selectedStep.description : ''"></p>

                        <template x-if="selectedStep && selectedStep.link">
                            <p class="mt-3 italic">
                                veuillez cliquer sur le lien:
                                <a :href="selectedStep.link" target="_blank" class="underline text-[#F29100]" x-text="selectedStep.link"></a>
                            </p>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section 
        x-data="partnersCarousel({{ json_encode($partners) }})" 
        x-init="init()"
        class="py-20 px-4 sm:px-6 lg:px-8  relative overflow-hidden">

        <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_20%,hsl(var(--primary)/0.1),transparent)] opacity-50"></div>
        <div class="absolute top-20 left-10 w-32 h-32 bg-primary/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-20 right-10 w-40 h-40 bg-accent/10 rounded-full blur-3xl animate-float delay-300"></div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-foreground mb-6">
                    Nos <span class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Partenaires</span>
                </h2>
                <p class="text-xl text-muted-foreground max-w-3xl mx-auto">
                    Nous collaborons avec les leaders de l'industrie...
                </p>
            </div>

            <div class="relative mb-12" @mouseenter="pause()" @mouseleave="play()">
                <div class="bg-card/60 backdrop-blur-xl rounded-3xl p-8 md:p-12 border border-white/20 relative overflow-hidden">
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
                                        <p class="text-center text-muted-foreground italic text-sm" x-text="partner.temoignage"></p>
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
            // ⚠️ ne recrée un interval que s’il n’existe pas déjà
            if (!this.intervalId) {
                this.intervalId = setInterval(() => {
                this.currentIndex = (this.currentIndex + 1) % this.partners.length;
                }, 3000);
            }
            },

            pause() {
            if (this.intervalId) {
                clearInterval(this.intervalId);
                this.intervalId = null; // ⚠️ reset ici
            }
            },

            goTo(i) {
            this.currentIndex = i;
            }
        }
        }
    </script>

    <section id="faqs" class="py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 items-center gap-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-balance">Questions Fréquemment Posées</h2>
                <p class="text-xl text-muted-foreground max-w-2xl mx-auto italic">
                    Trouvez des réponses aux questions courantes sur les outils et services ScrewFast.
                </p>
            </div>


            <div class=" max-w-3xl mx-auto space-y-4" x-data="{ openIndex: 0 }">

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
                            <p class="text-muted-foreground leading-relaxed italic">{{ $faq['reponse'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection