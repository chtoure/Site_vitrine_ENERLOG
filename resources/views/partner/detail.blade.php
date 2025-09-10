@extends('component.app')

@section('content')

    <style>
        :root {
            --hero-bg-color: #080d10;

            --section-1-bg-color: #ffffff;
            --section-2-bg-color: #eef4ed;
        }
    </style>

    <section id="slider" class="hero p-0 odd featured">
        <div class="swiper-container no-slider animation slider-h-50 slider-h-auto">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide-center">

                    <img src="{{ asset($partner['logo']) }}" 
                        alt="Full Image" 
                        class="full-image" 
                        data-mask="80"
                    >

                    <div class="slide-content row text-center">
                        <div class="col-12 mx-auto inner">

                            <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('public.index')}}">">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('public.partners.index')}}">Partenaires</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Partenaire</li>
                                </ol>
                            </nav>
                            <h1 class="mb-0 title effect-static-text">Mon Partenaire</h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="section-1 form contact">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 pr-md-5 align-self-center text">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <span class="pre-title m-0">Mon Partenaire</span>
                            <h2>Partenaire <span class="featured"><span>{{$partner['name']}}</span></span></h2>
                            <p>{{$partner['description']}}</p>
                        </div>
                    </div>                       
                </div>
                <div class="col-12 col-md-4">
                    <div class="contacts">
                        <h4>Address.</h4>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-phone-alt mr-2"></i>
                                    {{$partner['contact']}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-envelope mr-2"></i>
                                    {{$partner['email']}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-map-marker-alt mr-2"></i>
                                    {{$partner['adress']}}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection






        

