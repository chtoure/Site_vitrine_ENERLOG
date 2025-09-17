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

        <style>
            :root {
                --section-1-bg-color: #ffffff;
                --section-2-bg-color: #111117;
                --section-3-bg-color: #ffffff;
                --section-4-bg-color: #eef4ed;
            }
        </style>


<!-- Hero -->
        <section id="slider" class="hero p-0 odd featured">
            <div class="swiper-container no-slider animation slider-h-50 slider-h-auto">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">

                        <!-- Media -->
                        <img src="{{asset('images/parameters/about.png')}}" alt="Full Image" class="full-image" data-mask="80">

                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">

                                <!-- Content -->
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Apropos</li>
                                    </ol>
                                </nav>
                                <h1 class="mb-0 title effect-static-text">Apropos</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



     <!-- About -->
        <section id="about" class="section-1 highlights team image-right">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 align-self-top text">
                        <div class="row intro m-0">
                            <div class="col-12 p-0">
                                <span class="pre-title m-0">Enerlog Histoire</span>
                                <h2><span class="featured"><span>Historique </span></span></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 pr-md-5">
                                 @foreach(explode('!', $parameter['historique']) as $paragraph)
                                    @if(trim($paragraph) !== '') 
                                        <p>{!! makeLinksClickable(trim($paragraph)) !!}</p>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div data-aos="zoom-in" class="col-12 col-lg-4">
                        <div class="quote mt-5 mt-lg-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-center align-items-center">
                                    <a href="#"><i class="icon icon-rocket"></i></a>
                                    <div class="list-group-content">
                                        <h4>Mission</h4>
                                        <p>{{$parameter['mission']}}</p>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-center align-items-center">
                                    <a href="#"><i class="icon icon-eye"></i></a>
                                    <div class="list-group-content">
                                        <h4>Slogan</h4>
                                        <p>{{$parameter['slogan']}}</p>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-center align-items-center">
                                    <a href="#"><i class="icon icon-present"></i></a>
                                    <div class="list-group-content">
                                        <h4>Valeur</h4>
                                        <p>{{$parameter['valeur']}}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>












@endsection