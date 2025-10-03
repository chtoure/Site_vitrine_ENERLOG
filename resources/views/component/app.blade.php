    <html lang="en">
        <head>
            @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/default.css'])
            <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            {!! \Artesaos\SEOTools\Facades\SEOTools::generate() !!}

            <link rel="shortcut icon" href="{{ asset($parameter['logo']) }}">

            {{-- <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}"> --}}

        </head>
        <body className="font-sans">
          <main className="min-h-screen">
              @include('component.layouts.header')
          
                  @yield('content')
              
              @include('component.layouts.footer')
          </main>

        </body>
    </html>