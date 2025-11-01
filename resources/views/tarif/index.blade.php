@extends('component.app')

@section('content')


<body class="bg-gray-50">

<section class="py-8">
        <div class="container mx-auto px-4">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold mb-4 text-balance">
                    Tarification simple et transparente
                </h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                    Choisissez l’abonnement qui correspond le mieux à vos besoins. Tous les forfaits incluent nos fonctionnalités essentielles, sans frais cachés.
                </p>
            </div>


            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                @foreach($abonnements as $abonnement)
                    <div class="relative bg-white rounded-xl shadow-lg border p-3 {{ $abonnement['plan']=='Premium' ? 'border-orange-500 scale-105' : '' }}">
                        
                        @if($abonnement['plan']=="Premium")
                            <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                                <div class="bg-gradient-to-r from-orange-500 to-yellow-500 text-white px-4 py-1 rounded-full text-xs font-medium flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 fill-current" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                                    </svg>
                                    <span>{{ $abonnement['plan'] }}</span>
                                </div>
                            </div>
                        @endif

                        <div class="text-center pb-2">
                            <h3 class="text-xl font-bold text-primary">{{ $abonnement['plan'] }}</h3>
                            <p class=" text-muted-foreground mt-2">{{ $abonnement['description'] }}</p>
                            <div class="mt-4 flex items-baseline justify-center">
                                <span class=" font-bold">{{ $abonnement['price'] }}</span>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <ul class="space-y-1" x-data="{ openIndex: null }">
                                @foreach($abonnement['content'] as $feature => $detail)
                                    <li class="flex flex-col space-y-2 border-b pb-2 ">
                                        <button
                                            class="flex items-center justify-between w-full text-left p-2 hover:bg-gray-100 transition-colors rounded"
                                            @click="openIndex === '{{ $feature }}' ? openIndex = null : openIndex = '{{ $feature }}'"
                                        >
                                            <span class="flex items-center space-x-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                                </svg>
                                                <span class="font-semibold text-foreground">{{ $feature }}</span>
                                            </span>
                                            <span x-show="openIndex === '{{ $feature }}'">-</span>
                                            <span x-show="openIndex !== '{{ $feature }}'">+</span>
                                        </button>

                                        <div x-show="openIndex === '{{ $feature }}'" x-transition class="pl-6 text-muted-foreground leading-relaxed italic">
                                            {{ $detail }}
                                        </div>
                                    </li>
                                @endforeach
                            </ul>

                            <a href="{{ $parameter['login_url'] }}" target="_blank"
                            class="w-full inline-block text-center py-3 rounded-lg font-medium bg-gradient-to-r from-orange-500 to-yellow-500 text-white hover:from-orange-600 hover:to-yellow-600">
                                Choisir ce plan
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </section>


<div class="max-w-7xl mx-auto px-4 py-8">
  <div class="text-center mb-8">
    <h1 class="text-2xl font-bold text-gray-900 mb-4">Comparer toutes les fonctionnalités</h1>
  </div>

  <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-6">
    <div class="p-6 border-b border-gray-200">
      <h2 class="text-xl font-semibold text-gray-900"></h2>
    </div>

    <!-- Scroll horizontal si besoin -->
    <div class="w-full overflow-x-auto">
      <!-- min-w forcer la largeur minimale pour éviter le wrap des colonnes -->
      <table class="min-w-[900px] w-full table-auto text-left">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-4 w-2/5 font-medium text-gray-700">Services Enerlog</th>
            <th class="px-6 py-4 text-center font-semibold text-gray-700">Basic</th>
            <th class="px-6 py-4 text-center font-semibold text-gray-700">Pro+</th>
            <th class="px-6 py-4 text-center font-semibold text-gray-700 pr-8">Premium</th>
            <th class="px-6 py-4 text-center font-semibold text-gray-700 pr-8">Commentaire</th>
          </tr>
        </thead>

        <tbody class="divide-y divide-gray-100">

          @foreach ($services as $service)
            <tr>
              <td class="px-6 py-6">
                <div class="font-medium text-gray-900"> {{$service["name"]}} </div>
              </td>
              @if ($service["plan"]=="basic")
                <td class="px-6 py-6 text-center"><span class="text-gray-400 text-lg">✔️</span></td>
                <td class="px-6 py-6 text-center"><span class="text-gray-400 text-lg">✔️</span></td>
                <td class="px-6 py-6 text-center"><span class="text-purple-700 text-lg">✔️</span></td>
                <td class="px-6 py-6 text-center pr-8"><span class="text-purple-700 text-lg"> {{$service["commentaire"]}} </span></td>
              @else
                <td class="px-6 py-6 text-center"><span class="text-gray-400 text-lg">❌</span></td>
                <td class="px-6 py-6 text-center"><span class="text-gray-400 text-lg">✔️</span></td>
                <td class="px-6 py-6 text-center"><span class="text-purple-700 text-lg">✔️</span></td>
                <td class="px-6 py-6 text-center pr-8"><span class="text-purple-700 text-lg"> {{$service["commentaire"]}} </span></td>
              @endif
             
            </tr>
          @endforeach

          

          {{-- <tr>
            <td class="px-6 py-6">
              <div class="font-medium text-gray-900">Historique des messages et fichiers</div>
            </td>
            <td class="px-6 py-6 text-center"><span class="text-sm text-gray-600">Limite 90j</span></td>
            <td class="px-6 py-6 text-center">
              <svg class="w-5 h-5 inline-block text-purple-700" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                <path d="M7.629 13.59L4.04 9.999 5.454 8.586l2.175 2.176 5.75-5.75L15.58 6.9l-7.95 6.689z"/>
              </svg>
            </td>
            <td class="px-6 py-6 text-center">
              <svg class="w-5 h-5 inline-block text-purple-700" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                <path d="M7.629 13.59L4.04 9.999 5.454 8.586l2.175 2.176 5.75-5.75L15.58 6.9l-7.95 6.689z"/>
              </svg>
            </td>
            <td class="px-6 py-6 text-center pr-8">
              <svg class="w-5 h-5 inline-block text-purple-700" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                <path d="M7.629 13.59L4.04 9.999 5.454 8.586l2.175 2.176 5.75-5.75L15.58 6.9l-7.95 6.689z"/>
              </svg>
            </td>
          </tr> --}}

          <!-- Ajoute autant de <tr> que tu veux -->
        </tbody>
      </table>
    </div>
  </div>
</div>




</body>


    

























@endsection