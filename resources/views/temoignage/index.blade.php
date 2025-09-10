@extends('component.app')

@section('content')

<style>
    :root {
        --hero-bg-color: #080d10;
        --section-1-bg-color: #ffffff;
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
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Témoignages</li>
                            </ol>
                        </nav>
                        <h1 class="mb-0 title effect-static-text">Ils nous font confiance</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section id="testimonials" class="section-1 highlights">
    <div class="container">
        <div class="row text-center intro">
            <div class="col-12">
                <span class="pre-title m-auto">Ce que disent nos clients</span>
                <h2><span class="featured"><span>Témoignages</span></span> Clients</h2>
            </div>
        </div>

        @if(empty($temoignages) || !is_array($temoignages) || count($temoignages) === 0)
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-md-8 text-center">
                    <div class="alert alert-info">
                        <i class="fas fa-comment-slash me-2"></i>
                        Aucun témoignage disponible pour le moment.
                    </div>
                </div>
            </div>
        @else
            <div class="row justify-content-center">
                @foreach($temoignages as $temoignage)
                    <div class="col-12 col-md-10 text-center item mb-4">
                        <div class="row">
                            <!-- Logo ou photo du client -->
                            <div class="col-12 col-md-4 align-self-center text-center text-md-left">
                                <img src="{{ asset(ltrim($temoignage['image'] ?? 'assets/images/testimonial-1.jpg', '/')) }}"
                                     alt="Client {{ $temoignage['name'] }}"
                                     class="person"
                                     style="max-width: 120px; height: auto; border-radius: 8px; object-fit: contain;">
                            </div>

                            <!-- Témoignage -->
                            <div class="col-12 col-md-8 align-self-center text-left">
                                <blockquote style="font-style: italic; font-size: 1.1rem; color: #555; margin: 1.5rem 0; position: relative; padding-left: 2rem;">
                                    <i class="fas fa-quote-left" style="position: absolute; left: 0; top: 0; color: #0d6efd; font-size: 1.5rem;"></i>
                                    {{ $temoignage['content'] ?? 'Témoignage non disponible.' }}
                                </blockquote>
                                <h4 style="margin: 0.5rem 0; font-weight: 600; color: #222;">{{ $temoignage['name'] ?? 'Nom du client' }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

@endsection