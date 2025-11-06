<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Télécharger l'Application</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/default.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {!! \Artesaos\SEOTools\Facades\SEOTools::generate() !!}

    <link rel="shortcut icon" href="{{ asset($parameter['logo']) }}">
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class="bg-gray-50">
  @include('component.layouts.header')

<section class="bg-gray-50 py-16">
  <div class="max-w-5xl mx-auto px-4">
    <div class="flex flex-col md:flex-row items-center md:items-start">
      
      <!-- Texte principal -->
      <div class="w-full md:w-9/12 text-center md:text-left">
        <span class="block text-orange-500 font-semibold mb-2">Oups !</span>
        <h2 class="text-3xl font-bold mb-4">
          <span class="text-orange-600">Erreur</span> Serveur
        </h2>
        <p class="text-gray-600 mb-6">
          Un problème technique est survenu. Notre équipe technique est déjà en train de résoudre le problème. Veuillez réessayer dans quelques instants.
        </p>

        <!-- Tags -->
        <div class="flex flex-wrap gap-2 justify-center md:justify-start">
          <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm">Erreur 500</span>
          <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm">Serveur occupé</span>
          <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm">Maintenance en cours</span>
          <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm">Revenez bientôt</span>
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
          🛠️ Notre équipe travaille activement à rétablir le service. Merci pour votre patience.
        </p>
      </div>
    </div>
  </div>
</section>
    @include('component.layouts.footer')
</body>
</html>