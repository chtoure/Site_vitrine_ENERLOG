@extends('component.app')

@section('content')

<style>
    :root {
        --hero-bg-color: #080d10;
        --section-1-bg-color: #eef4ed;
    }

    /* Style du logo des témoignages */
    #testimonials .card .logo {
        max-height: 300px;  /* Augmente encore la taille */
        width: auto;
        object-fit: contain;
        margin: 20px auto;  /* Ajoute de l'espace autour pour ne pas coller les textes */
        display: block;
    }

    /* Espacement supplémentaire entre les sections de la carte */
    #testimonials .card p {
        margin-top: 10px;
    }
</style>

<!-- Hero -->
<section id="slider" class="hero p-0 odd featured" style="position: relative; overflow: hidden;">

    <!-- Background flouté -->
    <div class="background-blur" 
        style="
            background: url('{{ asset('/images/temoignages/equipe.jpg') }}') center center / cover no-repeat;
            position: absolute;
            inset: 0;
            filter: blur(6px);
            transform: scale(1.1); /* évite les bords vides après le blur */
        ">
    </div>

    <!-- Overlay sombre pour lisibilité -->
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
                        <div class="card">
                            <div class="col-12 text-center">
                                <!-- Logo ou image du client -->
                                <img src="{{ asset(ltrim($temoignage['image'] ?? 'assets/images/logo-1.png', '/')) }}"
                                     alt="{{ $temoignage['name'] ?? 'Client' }}"
                                     class="logo">

                                <!-- Témoignage -->
                                <p>{{ $temoignage['content'] ?? 'Témoignage non disponible.' }}</p>

                                <!-- Nom du client -->
                                <p><strong>{{ $temoignage['name'] ?? 'Anonyme' }}</strong></p>

                                <!-- Icône de citation -->
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
