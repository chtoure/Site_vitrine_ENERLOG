@extends('component.app')

@section('content')


 <style>
            :root {

                --section-1-bg-color: #eef4ed;
                --section-2-bg-color: #111117;
                --section-3-bg-color: #ffffff;
            }
            
            .card p {
                display: -webkit-box;
                -webkit-line-clamp: 3; /* Limite à 3 lignes, ajuste selon besoin */
                -webkit-box-orient: vertical;
                overflow: hidden;
                text-overflow: ellipsis;
                height: 4.5em; /* Ajuste selon la taille de la police et le nombre de lignes */
                margin-bottom: 0.5em;
            }
        </style>



        <!-- Hero -->
        <section id="slider" class="hero p-0 odd featured">
            <div class="swiper-container no-slider animation slider-h-50 slider-h-auto">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">

                        <!-- Media -->
                        <img src="{{asset('/images/services/Service.jpg')}}" alt="Full Image" class="full-image" data-mask="80">

                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">

                                <!-- Content -->
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                                    </ol>
                                </nav>

                                <h1 class="mb-0 title effect-static-text">Services</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        
        <!-- Process -->
        <section id="process" class="section-1 process offers">
            <div class="container full">
                <div class="row text-center intro">
                    <div class="col-12">
                        <span class="pre-title">Enerlog Solution</span>
                        <h2><span class="featured"><span>{{ $solution['name'] }}</span></span> Plateforme</h2>
                        <p class="text-max-800">{{ $solution['description'] }}</p>
                    </div>
                </div>
                <div class="row justify-content-center text-center items">
                        @if(is_array($solution['processus']))
                                @foreach($solution['processus'] as $process)
                                    <div class="col-12 col-md-6 col-lg-2 item">
                                        <div class="step"><span> {{ $process['num'] }} </span></div>
                                        <h4>{{ $process['nameProcessus'] }}</h4>
                                        <p>{{ $process['descriptionProcessus'] }}</p>
                                    </div>
                                @endforeach
                        @endif
                </div>
            </div>
        </section>

        <!-- Services -->
        <section id="services" class="section-2 odd offers">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                        {{-- <span class="pre-title m-auto ml-md-0">Our business areas</span> --}}
                        <h2 class="mb-0"><span class="featured"><span>Services</span></span></h2>
                    </div>
                    {{-- <div class="col-12 col-md-3 align-self-end">
                        <a href="#contact" class="smooth-anchor btn mx-auto mr-md-0 ml-md-auto outline-button">GET IN TOUCH</a>
                    </div> --}}
                </div>
                <div class="row justify-content-center items">

                    @foreach ($dataServices as $service)
                        <div data-aos="fade-up" class="col-12 col-md-6 item">
                            <div class="card">
                                {{-- <i class="icon icon-organization"></i> --}}
                                <h4> {{ $service['name'] }} </h4>
                                <p> {{ $service['description']}} </p>
                                <a href="{{ route('public.services.detail', $service['id']) }}"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </section>

    {{-- @foreach ($dataServices as $service)
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
        </p>
    @endforeach --}}

@endsection








