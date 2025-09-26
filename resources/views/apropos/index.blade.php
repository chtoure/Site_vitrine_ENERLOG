@extends('component.app')

@section('content')
     @php
        function makeLinksClickable($text) {
            return preg_replace(
                '/(https?:\/\/[^\s]+)/',
                '<a href="$1" target="_blank">$1</a>',
                $text
            );

        }
     @endphp


<div class="min-h-screen bg-gray-50">


    {{-- Hero Section --}}
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl">
                <h1 class="text-3xl font-bold text-foreground mb-4">Apropos</h1>
                <p class="text-lg text-gray-600 mb-8">
                    Chez ENERLOG TECHNOLOGY & DIGITAL SAS, la page « À propos » présente notre identité, notre histoire et la mission qui nous pousse à concevoir des solutions digitales innovantes pour le Togo, notamment via la plateforme CPay.
                </p>
            </div>
        </div>
    </section>

    {{-- Histoire Section --}}
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-1 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-foreground mb-4">Histoire</h2>
                        <p class="text-lg text-gray-600 mb-8">{{$parameter['historique']}}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Mission & Valeurs & Slogan --}}
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12">
                <h2 class="text-3xl font-bold text-foreground mb-4">Principes</h2>
                <p class="text-xl text-muted-foreground">Les principes qui guident notre action au quotidien</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                {{-- Innovation --}}
                <div class="text-center p-6 bg-card rounded-lg border">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        {{-- Icône --}}
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-foreground mb-3">Mission</h3>
                    <p class="text-muted-foreground">{{$parameter['mission']}}</p>
                </div>

                {{-- Qualité --}}
                <div class="text-center p-6 bg-card rounded-lg border">
                    <div class="w-16 h-16 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-foreground mb-3">Slogan</h3>
                    <p class="text-muted-foreground">{{$parameter['slogan']}}</p>
                </div>

                {{-- Proximité --}}
                <div class="text-center p-6 bg-card rounded-lg border">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-foreground mb-3">Valeurs</h3>
                    <p class="text-muted-foreground">{{$parameter['valeur']}}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact --}}
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                {{-- Contact Form --}}
                <div>
                    <div class="flex items-center gap-2 mb-6">
                        <h2 class="text-2xl font-bold text-gray-900">Contact</h2>
                    </div>

                    <form class="space-y-6" method="POST" action="{{ route('public.emails.contact') }}">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <input type="text" name="name" placeholder="First Name & Last Name" class="bg-white border rounded px-3 py-2 w-full"  required/>
                            <input type="email" name="email" placeholder="Email" class="bg-white border rounded px-3 py-2 w-full" required/>
                        </div>
                        <textarea name="message" placeholder="Message" rows="6" class="bg-white border rounded px-3 py-2 w-full resize-none" required></textarea>
                        <button type="submit" class="w-full bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-3 rounded">
                            Envoyez
                        </button>
                    </form>

                    <p class="text-center text-gray-600 mt-4">Le retour se fera dans l'espace de 1 à 2 jours</p>
                </div>

                {{-- Contact Information --}}
                <div class="space-y-8">

                    {{-- FAQ --}}
                    <div class="border rounded-lg shadow-sm bg-white">
                        <div class="p-6 flex items-start gap-4">
                            <div class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center">
                                {{-- Help Icon --}}
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 10h.01M12 14v.01m-6.938 4h13.856c1.054 0 1.985-.816 1.993-1.87L21.993 6.87C22 5.816 21.07 5 20.016 5H3.984C2.93 5 2 5.816 2.007 6.87l.064 9.26c.008 1.054.939 1.87 1.993 1.87z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">FAQ</h3>
                                <p class="text-gray-600 mb-3">Explorez nos questions et reponses.</p>
                                <a href="{{route('public.accueil')}}#faqs" class="flex items-center gap-2 text-gray-700 hover:text-gray-900">
                                    Visiter FAQ
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Visit our office --}}
                    <div class="border rounded-lg shadow-sm bg-white">
                        <div class="p-6 flex items-start gap-4">
                            <div class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center">
                                {{-- MapPin Icon --}}
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5 9 6.343 9 8s1.343 3 3 3z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 22s8-4.5 8-12c0-4.418-3.582-8-8-8s-8 3.582-8 8c0 7.5 8 12 8 12z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">Visiter Notre Agence</h3>
                                <p class="text-gray-600 mb-1">Togo - Lomé</p>
                                <p class="text-gray-600">{{$parameter['contact']['adress']}}</</p>
                            </div>
                        </div>
                    </div>

                    {{-- Contact us by email --}}
                    <div class="border rounded-lg shadow-sm bg-white">
                        <div class="p-6 flex items-start gap-4">
                            <div class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center">
                                {{-- Mail Icon --}}
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 12H8m8 0l-8 5m8-5l-8-5m16 5a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">Contact par email</h3>
                                <p class="text-gray-600 mb-3">Nous contactez par gmail ou par le formulaire de contact </p>
                                <p class="text-gray-900 font-medium">{{$parameter['contact']['email']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


@endsection