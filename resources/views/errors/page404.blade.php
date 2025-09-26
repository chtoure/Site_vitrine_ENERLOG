@extends('component.app')

@section('content')


        <section class="bg-gray-50 py-16">
            <div class="max-w-5xl mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center md:items-start">
                
                <!-- Texte principal -->
                <div class="w-full md:w-9/12 text-center md:text-left">
                    <span class="block text-orange-500 font-semibold mb-2">Oups !</span>
                    <h2 class="text-3xl font-bold mb-4">
                    <span class="text-orange-600">Page</span> Introuvable
                    </h2>
                    <p class="text-gray-600 mb-6">
                    Il semble que la page que vous cherchez ait pris un chemin différent. Pas de panique, cela arrive même aux meilleurs d’entre nous.
                    </p>

                    <!-- Tags -->
                    <div class="flex flex-wrap gap-2 justify-center md:justify-start">
                    <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm">Erreur 404</span>
                    <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm">Page manquante</span>
                    <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm">Navigation perdue</span>
                    <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm">Retour à l'accueil</span>
                    </div>
                </div>

                <!-- Bouton -->
                <div class="w-full md:w-3/12 mt-6 md:mt-0 flex justify-center md:justify-end">
                    <a href="/" 
                    class="px-6 py-3 border-2 border-orange-500 text-orange-500 font-semibold rounded-lg hover:bg-orange-500 hover:text-white transition">
                    RETOUR À L'ACCUEIL
                    </a>
                </div>
                </div>

                <!-- Carte -->
                <div class="mt-12 flex justify-center">
                <div class="bg-white shadow-md rounded-lg p-6 max-w-2xl text-center">
                    <p class="text-gray-700">
                    🔍 Vous pouvez consulter notre menu pour retrouver votre chemin.
                    </p>
                </div>
                </div>
            </div>
        </section>


@endsection