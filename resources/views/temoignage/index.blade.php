@extends('component.app')

@section('content')

<style>
    :root {
        --hero-bg-color: #080d10;
        --section-1-bg-color: #eef4ed;
    }

    /* Images carrées et uniformes */
    .temoignage-card-img {
        width: 90px;
        height: 90px;
        object-fit: cover;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.07);
        background: #fff;
        margin: 0;
        flex-shrink: 0;
    }

    /* Grille responsive personnalisée */
    .temoignage-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr); 
        gap: 1.2rem 1rem; 
        justify-content: center;
        margin-top: 2rem;
    }
    @media (min-width: 900px) {
        .temoignage-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    .temoignage-card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        padding: 1rem;
        text-align: center;
        min-height: 270px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        max-width: 450px;
        margin-left: auto;
        margin-right: auto;
    }

    /* Ligne logo + nom */
    .temoignage-header-row {
        display: flex;
        align-items: center;
        justify-content: flex-start; 
        gap: 1rem;
        margin-bottom: 3px;
        width: 100%;
        padding-left: 1.2rem;
    }
    .temoignage-header-row .temoignage-nom {
        font-weight: 600;
        font-size: 1.1rem;
        color: #212529;
        margin: 0;
        text-align: center; 
        flex: 0.5;            
        word-break: break-word;
    }

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
            <div class="temoignage-grid">
                @foreach($temoignages as $temoignage)
                    <div class="temoignage-card" data-aos="fade-up">
                        <!-- Ligne logo + nom -->
                        <div class="temoignage-header-row">
                            <img src="{{ asset(ltrim($temoignage['image'] ?? 'assets/images/logo-1.png', '/')) }}"
                                 alt="{{ $temoignage['name'] ?? 'Client' }}"
                                 class="temoignage-card-img">
                            <span class="temoignage-nom">{{ $temoignage['name'] ?? 'Anonyme' }}</span>
                        </div>

                        <!-- Témoignage -->
                        <p style="margin-bottom: 1rem;">{{ $temoignage['content'] ?? 'Témoignage non disponible.' }}</p>

                        <!-- Icône de citation alignée à droite -->
                        <div class="quote-icon-right">
                            <i class="quote-right fas fa-quote-right"></i>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

@endsection