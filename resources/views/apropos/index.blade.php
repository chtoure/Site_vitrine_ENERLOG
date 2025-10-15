@extends('component.app')

@section('content')

    <section class=" py-20">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start mb-12">

                <div>
                    <h2 class="text-5xl md:text-6xl font-bold mb-12 text-gray-900">Apropos de Nous</h2>
                    <p class="text-lg text-gray-900 mb-6 leading-relaxed">
                        {{$parameter['historique']}}
                    </p>

                    <h2 class="text-5xl md:text-6xl font-bold mb-8 text-gray-900 leading-tight">
                            Slogan
                        </h2>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            {{$parameter['slogan']}}
                    </p>
                </div>
                
                <div class="relative">
                    <img 
                    src="{{asset($parameter['images'][0])}}" 
                    alt="People collaborating" 
                    class="w-full h-auto rounded-2xl shadow-lg object-cover"
                    />
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
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
            </div>
        </div>

    </section>

    <section class="py-20 bg-gradient-to-br from-purple-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2  gap-12 items-center">

                <div>
                    <h2 class="text-5xl md:text-6xl font-bold mb-8 text-gray-900 leading-tight">
                        Notre Mission
                    </h2>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        {{$parameter['mission']}}
                    </p>
                    <br>
                    <h2 class="text-2xl md:text-3xl font-bold mb-8 text-gray-900 leading-snug italic">
                        <span class="bg-secondary px-4 py-2 rounded-lg text-gray-800">
                            Nous incarnons des valeurs fortes dans tout ce que nous faisons
                        </span>
                    </h2>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        {{$parameter['valeur']}}
                    </p>
                </div>
    
                <div class="relative h-[600px]">

                    <div class="absolute top-0 left-0 w-48 h-56 transform -rotate-3">
                        <img 
                            src="{{asset($parameter['images'][4])}}" 
                            alt="Team presentation" 
                            class="w-full h-full object-cover rounded-xl shadow-xl"
                        />
                    </div>

                    <div class="absolute top-0 right-0 w-40 h-48 transform rotate-6">
                        <img 
                            src="{{asset($parameter['images'][5])}}" 
                            alt="Outdoor collaboration" 
                            class="w-full h-full object-cover rounded-xl shadow-xl"
                        />
                    </div>

                    <div class="absolute top-32 right-4 w-44 h-52 transform rotate-2">
                        <img 
                            src="{{asset($parameter['images'][6])}}" 
                            alt="Woman working" 
                            class="w-full h-full object-cover rounded-xl shadow-xl"
                        />
                    </div>
    
                    <div class="absolute bottom-16 right-0 w-36 h-44 transform -rotate-3">
                        <img 
                            src="{{asset($parameter['images'][7])}}" 
                            alt="Person with plants" 
                            class="w-full h-full object-cover rounded-xl shadow-xl"
                        />
                    </div>

                    <div class="absolute bottom-0 left-8 w-44 h-52 transform rotate-3">
                        <img 
                            src="{{asset($parameter['images'][8])}}" 
                            alt="Team in office" 
                            class="w-full h-full object-cover rounded-xl shadow-xl"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    {{-- <section class="py-20">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-5xl md:text-6xl font-bold mb-8 text-gray-900 leading-tight">
                        Nous nous sommes fixer comme mission
                    </h2>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        {{$parameter['mission']}}
                    </p>
                </div>
                
                <div class="relative">
                    <img 
                        src="{{asset($parameter['images'][8])}}" 
                        alt="Team members" 
                        class="w-full h-auto rounded-2xl shadow-lg object-cover"
                    />
                </div>
            </div>
        </div>

    </section> --}}

    <section class="py-20 bg-gradient-to-b from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                <div class="bg-white rounded-2xl shadow-lg p-8 lg:p-10">
                    <div class="mb-8">
                        <h2 class="text-4xl font-bold text-gray-900 mb-2">Contactez-nous</h2>
                        <p class="text-gray-600">Remplissez le formulaire et nous vous répondrons rapidement</p>
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
                                    required
                                />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <input 
                                    type="email" 
                                    name="email" 
                                    placeholder="votre@email.com" 
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition-all"
                                    required
                                />
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea 
                                name="message" 
                                placeholder="Écrivez votre message ici..." 
                                rows="6" 
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent resize-none transition-all"
                                required
                            ></textarea>
                        </div>
                        
                        <button 
                            type="submit" 
                            class="w-full bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold py-4 rounded-lg shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200"
                        >
                            Envoyer le message
                        </button>
                    </form>

                    <div class="mt-6 flex items-center justify-center gap-2 text-sm text-gray-500">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Réponse sous 1 à 2 jours ouvrables</span>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="group bg-white rounded-2xl shadow-md hover:shadow-xl p-6 transition-all duration-300 border border-gray-100 hover:border-yellow-400">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Questions Fréquentes</h3>
                                <p class="text-gray-600 mb-4 leading-relaxed">Explorez nos questions et réponses pour trouver rapidement l'information dont vous avez besoin.</p>
                                <a href="{{route('public.index')}}#faqs" class="inline-flex items-center gap-2 text-yellow-600 hover:text-yellow-700 font-medium group-hover:gap-3 transition-all">
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
                                <p class="text-gray-600 mb-3 leading-relaxed">Contactez-nous par email ou utilisez le formulaire de contact ci-contre.</p>
                                <a href="mailto:{{$parameter['contact']['email']}}" class="text-gray-900 font-semibold hover:text-yellow-600 transition-colors">
                                    {{$parameter['contact']['email']}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection