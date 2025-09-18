@extends('component.app')

@section('content')

<style>
    :root {
        --hero-bg-color: #080d10;
        --section-1-bg-color: #eef4ed;
    }

    /* Images carrées et uniformes */
    .temoignage-card-img {
        display: block;
        margin: 24px auto 18px auto;
        width: 120px;      /* Taille réduite */
        height: 95px;      /* Hauteur réduite */
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.07);
        background: #fff;
    }

    /* Cartes de même hauteur mais plus basses */
    .temoignage-card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        padding: 1.2rem;
        margin-bottom: 1.2rem;
        text-align: center;
        min-height: 270px; /* Hauteur réduite */
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    /* Icône de citation alignée à droite */
    .quote-icon-right {
        display: flex;
        justify-content: flex-end;
        width: 100%;
        margin-top: auto;
    }
    .quote-icon-right i {
        font-size: 1.5rem;
        color: #b6b6b6;
    }
</style>

<!-- Hero -->
<section id="slider" class="hero p-0 odd featured" style="position: relative; overflow: hidden;">
    <div class="background-blur" 
        style="
            background: url('{{ asset('/images/temoignages/te.jpg') }}') center center / cover no-repeat;
            position: absolute;
            inset: 0;
            filter: blur(6px);
            transform: scale(1.1);
        ">
    </div>
    <div class="overlay" 
        style="background: rgba(0,0,0,0.4); position: absolute; inset: 0;">
    </div>
    <div class="swiper-container no-slider animation slider-h-50 slider-h-auto" style="position: relative; z-index: 2;">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide-center">
                <div class="slide-content row text-center">
                    <div class="col-12 mx-auto inner">
                        <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Témoignages</li>
                            </ol>
                        </nav>
                        <h1 class="mb-0 title effect-static-text">Ils témoignent</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section id="testimonials" class="section-1 offers testimonials">
    <div class="container">
        <div class="row text-center intro">
            <div class="col-12">
                <span class="pre-title">Ils nous font confiance</span>
                <h2>Ils ont aimé <span class="featured"><span>travailler avec nous</span></span></h2>
                <p class="text-max-800">
                    Chaque projet est une histoire de réussite partagée. Découvrez ce que nos clients disent de leur expérience avec nous — des témoignages sincères, inspirés par des résultats concrets.
                </p>
            </div>
        </div>

        @if(empty($temoignages) || !is_array($temoignages) || count($temoignages) === 0)
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-md-8 text-center">
                    <p>Aucun témoignage disponible pour le moment.</p>
                </div>
            </div>
        @else
            <div class="row justify-content-center items">
                @foreach($temoignages as $temoignage)
                    <div data-aos="fade-up" class="col-12 col-md-6 item">
                        <div class="temoignage-card">
                            <!-- Image agrandie et uniforme du témoin -->
                            <img src="{{ asset(ltrim($temoignage['image'] ?? 'assets/images/logo-1.png', '/')) }}"
                                 alt="{{ $temoignage['name'] ?? 'Client' }}"
                                 class="temoignage-card-img">

                            <!-- Témoignage -->
                            <p style="margin-bottom: 1rem;">{{ $temoignage['content'] ?? 'Témoignage non disponible.' }}</p>

                            <!-- Nom du client -->
                            <p><strong>{{ $temoignage['name'] ?? 'Anonyme' }}</strong></p>

                            <!-- Icône de citation alignée à droite -->
                            <div class="quote-icon-right">
                                <i class="quote-right fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

@endsection