    <html lang="en">
        <head>
            @vite(['resources/css/app.css', 'resources/js/app.js'])
            <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

            <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">

        </head>
      <body className="font-sans">
        <main className="min-h-screen">
            @include('component.layouts.header')
        
                @yield('content')
            
            @include('component.layouts.footer')
        </main>

      </body>
    </html>