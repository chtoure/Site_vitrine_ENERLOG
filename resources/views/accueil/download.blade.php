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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .hero-title {
            font-size: clamp(2rem, 4vw, 3rem);
            line-height: 1.1;
            font-weight: 900;
            letter-spacing: -0.02em;
        }
        
        .phone-mockup {
            filter: drop-shadow(0 25px 50px rgba(0, 0, 0, 0.15));
        }
        
        .qr-code {
            background: #fff;
        }
    </style>
</head>
<body class="bg-gray-50">

    <header 
        x-data="{ navbarOpen: false }"
        class="sticky top-0 z-50 w-full border-b border-[#F29100]/30 backdrop-blur-lg shadow-lg bg-white/70"
    >
        <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center space-x-4">
                    <a href="{{ route('public.index') }}" class="block">
                        <img 
                            src="{{ asset($parameter['logo']) }}"
                            alt="Logo"
                            class="h-10 w-auto"
                        />
                    </a>
                    
                </div>
                <div class="flex items-center space-x-4 font-bold">
                    <a 
                        href="{{ $parameter['login_url'] }}"
                        target="_blank"
                        class="text-base text-secondary hover:bg-secondary hover:text-white border-2 border-secondary rounded-xl py-2 px-3 hover:bg-opacity-90 transition-colors"
                    >
                        Login
                    </a>
                    <a 
                        href="{{ $parameter['login_url'] }}"
                        target="_blank"
                        class="text-base  text-white bg-primary rounded-xl py-2 px-3 hover:bg-opacity-90 transition-colors"
                    >
                        Créer compte
                    </a>
                </div> 
            </div>
        </div>
    </header>

    <main class="min-h-screen flex items-center justify-center py-12 overflow-hidden">
        <div class="max-w-[1800px] w-full px-4 sm:px-6 lg:px-12 xl:px-20">
            
            <div class="grid grid-cols-1 lg:grid-cols-[1.4fr_0.8fr] gap-10 items-center">

                <div class="space-y-4 max-w-2xl mx-auto text-center lg:text-left">
                    <div>
                        <h1 class="hero-title  mb-6">
                            {{$download['title']}}
                        </h1>
                        <p class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-semibold ">
                            {{$download['subtitle']}}
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        @foreach ($download['downloads'] as $down)
                            <div class="flex flex-col items-center space-y-4">
                                <div class="qr-code shadow-md">
                                    <img 
                                        src="{{asset($down['code_qr'])}}" 
                                        alt="QR Code {{ $down['plateforme'] }}"
                                        class="w-40 h-40 object-contain"
                                    />
                                </div>
                                <div class="text-center">
                                    <h2 class="text-lg font-semibold text-gray-800 mb-3">
                                        {{$down['plateforme']}}
                                    </h2>
                                    <a 
                                        href="{{$down['link']}}"
                                        target="_blank"
                                        class="inline-flex items-center bg-black text-white px-5 py-2.5 rounded-xl font-medium hover:bg-gray-800 transition-colors"
                                    >
                                        <img src="{{$down['icon']}}" alt="{{$down['name']}}" class="w-5 h-5 mr-2"/>
                                        {{$down['name']}}
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="flex justify-end lg:justify-end relative">
                    <div class="phone-mockup relative transform scale-100 sm:scale-110 lg:scale-125 xl:scale-150 transition-transform duration-500">
                        <img 
                            src="{{ asset($download['image']) }}" 
                            alt="Application sur mobile"
                            class="block w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl h-auto m-0 p-0"
                        />
                    </div>
                </div>

            </div>
        </div>
    </main>
    @include('component.layouts.footer')
</body>
</html>
