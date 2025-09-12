@extends('component.app')

@section('content')

<style>
    :root {
        --hero-bg-color: #080d10;
        --section-1-bg-color: #eef4ed;
    }
</style>

<!-- Hero -->
<section id="slider" class="hero p-0 odd featured">
    <div class="swiper-container no-slider animation slider-h-50 slider-h-auto">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide-center">
                <img src="assets/images/bg-wide.jpg" alt="Full Image" class="full-image" data-mask="80">
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
                            <div class="col-12">
                                <!-- Logo ou image du client -->
                                <img src="{{ asset(ltrim($temoignage['image'] ?? 'assets/images/logo-1.png', '/')) }}"
                                     alt="{{ $temoignage['name'] ?? 'Client' }}"
                                     class="logo"
                                     style="max-height: 60px; width: auto; object-fit: contain;">

                                <!-- Témoignage -->
                                <p>{{ $temoignage['content'] ?? 'Témoignage non disponible.' }}</p>

                                <!-- Nom du client -->
                                <p><strong>{{ $temoignage['name'] ?? 'Anonyme' }}</strong></p>

                                <!-- Icône de citation (comme dans NEXGEN) -->
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