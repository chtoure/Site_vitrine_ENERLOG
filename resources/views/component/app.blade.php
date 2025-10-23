    <html lang="en">
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/default.css'])
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            {!! \Artesaos\SEOTools\Facades\SEOTools::generate() !!}

            <link rel="shortcut icon" href="{{ asset($parameter['logo']) }}">

        </head>
        <body class="font-sans text-base">
            @php
                use Illuminate\Support\Str;
            @endphp
            <main id="main-container" class="min-h-screen relative">
                @include('component.layouts.header')
                @include('component.layouts.hero')

                @yield('content')
                
                @include('component.layouts.footer')
            </main>

            <a
                href="http://127.0.0.1:8000/download"
                id="floating-btn"
                class="fixed bottom-6 right-6 bg-primary text-white shadow-lg p-1 transition-transform hover:scale-110"
            >
                <img
                    src="{{asset($parameter['qr_code'])}}"
                    alt="QR code"
                    class="object-contain h-16 w-16"
                />
            </a>
        </body>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('floating-btn');
            const footer = document.getElementById('footer');
            const margin = 16; 
            function updateButton() {
                const footerTop = footer.getBoundingClientRect().top + window.scrollY;
                const windowBottom = window.scrollY + window.innerHeight;

                const overlap = windowBottom - footerTop;

                if (overlap > 0) {
                    btn.style.bottom = `${overlap + margin}px`;
                } else {

                    btn.style.bottom = `${margin}px`;
                }
            }

            window.addEventListener('scroll', updateButton);
            window.addEventListener('resize', updateButton);
            updateButton(); 
        });
    </script>


    </html>