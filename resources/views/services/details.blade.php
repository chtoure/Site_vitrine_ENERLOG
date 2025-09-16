@extends("component.app")

@section('content')
    @php
        $hasSidebar = is_array($service['content']) && count($service['content']) > 0;
    @endphp

            <style>
            :root {
                --hero-bg-color: #080d10;

                --section-1-bg-color: #ffffff;
                --section-2-bg-color: #eef4ed;
                --section-3-bg-color: #111117; 
                --section-3-bg-image: url('../../assets/images/bg-7.jpg');
                --section-4-bg-color: #ffffff;
            }
        </style>

        <!-- Hero -->
        <section id="slider" class="hero p-0 odd featured">
            <div class="swiper-container no-slider animation slider-h-50 slider-h-auto">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">

                        <!-- Media -->
                        {{-- <video class="full-image to-bottom" data-mask="70" playsinline autoplay muted loop>
                            <source src="assets/videos/work.mp4" type="video/mp4" />
                        </video>  --}}

                        <!-- Media -->
                        <img src="{{ asset($service['images'][0]) }}" alt="Full Image" class="full-image" data-mask="80">

                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">

                                <!-- Content -->
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{$service['name']}}</li>
                                    </ol>
                                </nav>
                                <h1 class="mb-0 title effect-static-text">{{$service['name']}}</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Single -->
        <section id="single" class="section-1 single">
            <div class="container">
                <div class="row">

                    <!-- Main -->
                    <div class="{{ $hasSidebar ? 'col-12 col-lg-8 p-0 text' : 'col-12 p-0 text' }}">
                        <div class="row intro m-0">
                            <div class="col-12">
                                <span class="pre-title m-0">presentation service</span>
                                <div class="title-icon">                                    
                                    <h2>
                                        <span class="featured"><span><i class="icon icon-globe-alt"></i></span></span> 
                                        {{ $service['name'] }}
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 align-self-center">
                                @foreach(explode('!', $service['description']) as $paragraph)
                                    @if(trim($paragraph) !== '') 
                                        <p>{{ trim($paragraph) }}</p>
                                    @endif
                                @endforeach
                            </div>
                        </div>        
                    </div>

                    <!-- Sidebar -->
                    @if($hasSidebar)
                        <aside class="col-12 col-lg-4 pl-lg-5 p-0 float-right sidebar">                    
                            <div class="row">
                                <div class="col-12 align-self-center text-left">
                                    <h4>Contenu Service</h4>
                                    <ul class="list-group list-group-flush">
                                        
                                        @foreach($service['content'] as $content)
                                            <li class="list-group-item d-flex ">{{ $content }}</li>
                                        @endforeach
                                        
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    @endif

                </div>
            </div>
        </section>




        <!-- About 2 -->
        <section id="about-2" class="section-3 odd highlights team image-right">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 align-self-top text">
                        <div class="row intro m-0">
                            <div class="col-12 p-0">
                                <span class="pre-title m-0">Services</span>
                                <h2><span class="featured"><span>Decouvrez</span></span> plus de services</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 pr-md-5">
                                <p>Explorer la collection complete des services de ENERLOG TECHNOLOGY & DIGITAL SAS ( C'est une société par actions simplifiée avec un conseil d’administration) </p>
                            </div>
                        </div>
                        
                        <!-- Action -->
                        <div data-aos="fade-up" class="buttons">
                            <div class="d-sm-inline-flex">
                                <a href="{{ route('public.services.index') }}" class=" mt-4 btn primary-button">Services</a>
                            </div>
                        </div>
                    </div>
                    <div data-aos="zoom-in" class="col-12 col-lg-4 align-self-end">
                        <div class="quote">
                            <div class="quote-content">
                                <h4>Discours Radio</h4>
                                <p>Enerlog est spécialisée dans la création des solutions numériques innovantes.</p>
                                <p>Nous accompagnons nos partenaires en les proposant des technologies stratégiques et performantes, conçues pour répondre aux besoins spécifiques de leur secteur afin de les booster.</p>
                                <h5> TAIROU Mouhamed<br>Abdoul Tawab</h5>
                            </div>
                            <i class="quote-right fas fa-quote-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection










{{-- 
        <p>
            <td>ID: {{ $service['id'] }}</td>
            <td>Name: {{ $service['name'] }}</td>
            <td>Description: {{ $service['description'] }}</td>
            <td>
    Images:
    @if(is_array($service['images']))
        <ul>
            @foreach($service['images'] as $img)
                <li>{{ $img }}</li>
            @endforeach
        </ul>
    @else
        {{ $service['images'] }}
    @endif
</td>
            <td>
    Content:
    @if(is_array($service['content']))
        <ul>
            @foreach($service['content'] as $content)
                <li>{{ $content }}</li>
            @endforeach
        </ul>
    @else
        {{ $service['content'] }}
    @endif
</td>
        </p> --}}