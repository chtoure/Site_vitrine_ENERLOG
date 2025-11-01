@extends('component.app')

@section('content')

<section class="py-4">
   <section class="py-6">
        <div class="max-w-7xl mx-auto px-4">
            <div class="mb-8">
            <h2 class="text-3xl font-extrabold text-gray-900">Notre Mission</h2>
            <p class="mt-3 text-gray-600 max-w-3xl">{{$parameter['mission']}}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @php
                $cards = [
                ['title'=>'Valeur','text'=>$parameter['valeur']],
                ['title'=>'Slogan','text'=>$parameter['slogan']],
                ['title'=>'Innovation','text'=>$parameter['innovation']],
                ['title'=>'Engagement','text'=>$parameter['engagement']],
                ];
            @endphp

            @foreach($cards as $c)
                <article class="p-6 bg-white rounded-lg border border-gray-100 shadow-sm">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $c['title'] }}</h3>
                <p class="text-gray-600 leading-relaxed">{{ $c['text'] }}</p>
                </article>
            @endforeach
            </div>
        </div>
    </section>


    <section class=" py-4">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start mb-12">

                <div class="relative">
                    <img 
                    src="{{asset($parameter['images'][0])}}" 
                    alt="People collaborating" 
                    class="w-full h-auto rounded-2xl shadow-lg object-cover"
                    />
                </div>

                <div>
                    <h2 class="text-3xl font-extrabold text-gray-900  mb-10">Historique</h2>
                    <p class="mt-3 text-gray-600 max-w-3xl">
                        {{$parameter['historique']}}
                    </p>
                </div>
                
                
            </div>

            {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="relative h-64 md:h-80">
                    <img 
                    src="{{asset($parameter['images'][1])}}" 
                    alt="Team at beach" 
                    class="w-full h-full object-cover rounded-2xl shadow-lg"
                    />
                </div>
                <div class="relative h-64 md:h-80">
                    <img 
                    src="{{asset($parameter['images'][2])}}" 
                    alt="Team meeting" 
                    class="w-full h-full object-cover rounded-2xl shadow-lg"
                    />
                </div>
                <div class="relative h-64 md:h-80">
                    <img 
                    src="{{asset($parameter['images'][3])}}" 
                    alt="Team sports" 
                    class="w-full h-full object-cover rounded-2xl shadow-lg"
                    />
                </div>
            </div> --}}
        </div>

    </section>

    <section class="py-4">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- Texte -->
        <div>
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
            <span class="inline-block">Message de notre</span>
            <br>
            <span>Directeur Général</span>
            </h2>

            <div class="mt-6 space-y-4 text-gray-700">
            <p>
                Nous sommes votre partenaire pour la transformation numérique au Togo et en Afrique, engagés à rendre chaque entreprise et institution plus connectée, performante et durable.
            </p>
            <p>
                Avec des solutions comme Enerlog cPay, nous modernisons les services, facilitons les transactions et accompagnons nos partenaires vers une économie plus intelligente et inclusive.
            </p>
            <p>
                Grâce à votre confiance, nous ne sommes pas seulement un fournisseur de technologies, mais un véritable acteur du changement numérique.            </p>
            <p>
                Prêts à avancer ensemble dans cette ère d’innovation, nous continuerons à innover, à connecter et à grandir pour construire un futur numérique solide et inclusif.
            </p>
            </div>

            <h5 class="mt-6 text-lg font-medium text-gray-800">Ensemble, donnons vie au futur numérique de l’Afrique.</h5>
            <h4 class="mt-1 text-xl font-semibold text-gray-900">Abdou-Djalilou NEKERE</h4>
        </div>

        <!-- Image -->
        <div class="flex justify-center md:justify-end">
            <img
            src="{{asset("/images/parameters/directeur.png")}}"
            alt="Directeur Général"
            class="w-full max-w-md rounded-lg shadow-lg object-cover"
            width="703" height="660"
            />
        </div>
        </div>
    </div>
    </section>


    <section class="py-8 bg-gradient-to-b from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                <div class="bg-white rounded-2xl shadow-lg p-8 lg:p-10">
                    <div class="mb-8">
                        <h2 class="text-4xl font-bold text-gray-900 mb-2">Laissez nous un commentaire</h2>
                        {{-- <p class="text-gray-600"></p> --}}
                    </div>

                    <form class="space-y-6" method="POST" action="{{ route('public.emails.contact') }}">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nom complet</label>
                                <input 
                                    type="text" 
                                    name="name" 
                                    placeholder="Prénom & Nom" 
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition-all"
                                />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <input 
                                    type="email" 
                                    name="email" 
                                    placeholder="votre@email.com" 
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition-all"
                                />
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Commentaire<i class="text-secondary">*</i></label>
                            <textarea 
                                name="message" 
                                placeholder="Écrivez votre commentaire ici..." 
                                rows="6" 
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent resize-none transition-all"
                                required
                            ></textarea>
                        </div>
                        
                        <button 
                            type="submit" 
                            class="w-full bg-primary hover:bg-secondary text-white font-semibold py-4 rounded-lg shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200"
                        >
                            Envoyer
                        </button>
                    </form>

                </div>

                <div class="space-y-6">
                    <div class="group bg-white rounded-2xl shadow-md hover:shadow-xl p-6 transition-all duration-300 border border-gray-100 hover:border-yellow-400">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-secondary rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Questions Fréquentes</h3>
                                <p class="text-gray-600 mb-4 leading-relaxed">Explorez nos questions et réponses pour trouver rapidement l'information dont vous avez besoin.</p>
                                <a href="{{route('public.index')}}#faqs" class="inline-flex items-center gap-2 text-secondary hover:text-primary font-medium group-hover:gap-3 transition-all">
                                    Consulter la FAQ
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="group bg-white rounded-2xl shadow-md hover:shadow-xl p-6 transition-all duration-300 border border-gray-100 hover:border-yellow-400">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-blue-500 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Visitez Notre Agence</h3>
                                <p class="text-gray-600 mb-2 leading-relaxed">Venez nous rencontrer à notre bureau</p>
                                <p class="text-gray-900 font-semibold">Lomé, Togo</p>
                                <p class="text-gray-600">{{$parameter['contact']['adress']}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="group bg-white rounded-2xl shadow-md hover:shadow-xl p-6 transition-all duration-300 border border-gray-100 hover:border-yellow-400">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-green-500 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Contact par Email</h3>
                                <p class="text-gray-600 mb-3 leading-relaxed">Cliquez le lien ci-dessous pour nous contactez en utilisant le formulaire de contact.</p>
                                <a href="{{$parameter['url_contact_form']}}"  target="_blank" class="inline-flex items-center gap-2 text-secondary hover:text-primary font-medium group-hover:gap-3 transition-all">
                                    Nous Contactez
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

@endsection