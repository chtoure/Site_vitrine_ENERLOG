@extends('component.app')

@section('content')

<style>
    :root {
        --section-1-bg-color: #ffffff;
    }

    /* ===== TEAM SECTION — GRID LAYOUT ===== */
    .team-grid {
        display: grid;
        grid-template-columns: repeat(1, 1fr); 
        gap: 1.5rem;
        margin-top: 2rem;
    }

    @media (min-width: 768px) {
        .team-grid {
            grid-template-columns: repeat(2, minmax(300px, 1fr));
        }
    }

    @media (min-width: 992px) {
        .team-grid {
            grid-template-columns: repeat(3, minmax(300px, 1fr));
        }
    }

    .team-grid .team-card {
        background: #fff;
        padding: 1.5rem;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        display: flex;
        flex-direction: column;
        align-items: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .team-grid .team-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    /* === TOP SECTION (image + prénom nom) === */
    .team-grid .team-card .top-section {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 1rem; /* espace fixe entre image et nom */
        width: 100%;
        margin-bottom: 1rem;
    }

    .team-grid .team-card .person {
        width: 100px;
        height: 100px;
        border-radius: 8px;
        object-fit: cover;
        box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        flex-shrink: 0; /* empêche l’image de rétrécir */
    }

    .team-grid .team-card .text-content {
        flex: 1; /* prend tout l’espace dispo à droite */
        min-width: 0; /* permet au texte long de se couper */
        text-align: left; 
    }

    .team-grid .team-card h4 {
        margin: 0;
        font-size: 1.1rem;
        font-weight: 600;
        color: #212529;
        line-height: 1.3;
        word-wrap: break-word; /* casse les longs mots si besoin */
        white-space: normal;   /* permet retour à la ligne */
    }

    .team-grid .team-card .poste-centre {
        text-align: center;
        font-weight: 600;
        font-size: 0.95rem;
        color: #212529;
        margin: 0.5rem 0 1rem 0;
        letter-spacing: 0.03em;
        width: 100%;
    }

    .team-grid .team-card .bottom-section {
        width: 100%;
        text-align: left; 
    }

    .team-grid .team-card .bottom-section .text-content {
        margin-left: 0;
        padding-left: 0;
    }

    .team-grid .team-card .bottom-section .text-content p {
        margin: 0 0 0.5rem 0;
        font-size: 0.9rem;
        color: #6c757d;
        line-height: 1.5;
        font-weight: normal;
        text-transform: none;
        text-align: left; 
    }

    .team-grid .team-card .bottom-section .social.share-list {
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        align-items: center;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .team-grid .team-card .bottom-section .social.share-list .nav-item {
        margin-left: 1rem;
    }

    .team-grid .team-card .bottom-section .social.share-list .nav-item:first-child {
        margin-left: 0;
    }

    .team-grid .team-card .bottom-section .social.share-list .nav-link {
        display: inline-block;
        padding: 0;
        color: #6c757d;
        font-size: 0.9rem;
        font-weight: normal;
    }

    .team-grid .team-card .bottom-section .social.share-list .nav-link:hover {
        color: #0d6efd;
        text-decoration: none;
    }
</style>

<!-- Hero -->
<section id="slider" class="hero p-0 odd featured">
    <div class="swiper-container no-slider animation slider-h-50 slider-h-auto">
        <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide slide-center">

                <!-- Media -->
                <img src="{{ asset('images/equipes/equipe.jpg') }}" alt="Full Image" class="full-image" data-mask="80">

                <!-- Content -->
                <div class="slide-content row text-center">
                    <div class="col-12 mx-auto inner">

                        <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Notre équipe</li>
                            </ol>
                        </nav>

                        <h1 class="mb-0 title effect-static-text">Notre équipe</h1>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Team -->
<section id="team" class="section-1 team">
    <div class="container">
        <div class="row">
            <div class="col-12 align-self-top text-center text-md-left text">
                <div class="row text-center intro">
                    <div class="col-12">
                        <span class="pre-title m-auto">Nous aimons ce que nous faisons</span>
                        <h2><span class="featured"><span>Équipe</span></span></h2>
                    </div>
                </div>

                @if(empty($equipes) || !is_array($equipes) || count($equipes) === 0)
                    <div class="row justify-content-center mt-5">
                        <div class="col-12 col-md-8 text-center">
                            <p>Aucun membre trouvé.</p>
                        </div>
                    </div>
                @else
                    
                    <div class="team-grid">
                        @foreach($equipes as $membre)
                            <div class="team-card">
                                
                                <div class="top-section">
                                    <img src="{{ asset(ltrim($membre['image'] ?? 'assets/images/team-1.jpg', '/')) }}"
                                         alt="Photo de {{ trim($membre['first_name'] . ' ' . $membre['last_name']) }}"
                                         class="person"
                                         loading="lazy">

                                    <div class="text-content">
                                        <h4 class="mb-0">{{ trim($membre['first_name'] . ' ' . $membre['last_name']) }}</h4>
                                    </div>
                                </div>

                                <p class="poste-centre">
                                    {{ $membre['poste'] ?? 'Poste non spécifié' }}
                                </p>

                                <div class="bottom-section">
                                    <div class="text-content">
                                        <p>{{ $membre['description'] ?? 'Description non disponible.' }}</p>
                                        <ul class="navbar-nav social share-list">
                                            @php
                                                $reseaux = $membre['reseaux'] ?? [];
                                                if (isset($reseaux['fecebook'])) {
                                                    $reseaux['facebook'] = $reseaux['fecebook'];
                                                    unset($reseaux['fecebook']);
                                                }
                                            @endphp
                                            @if(isset($reseaux['facebook']) && !empty(trim($reseaux['facebook'])))
                                                <li class="nav-item">
                                                    <a href="{{ trim($reseaux['facebook']) }}" class="nav-link" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                            @endif
                                            @if(isset($reseaux['twitter']) && !empty(trim($reseaux['twitter'])))
                                                <li class="nav-item">
                                                    <a href="{{ trim($reseaux['twitter']) }}" class="nav-link" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                                                </li>
                                            @endif
                                            @if(isset($reseaux['linkedin']) && !empty(trim($reseaux['linkedin'])))
                                                <li class="nav-item">
                                                    <a href="{{ trim($reseaux['linkedin']) }}" class="nav-link" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
                                                </li>
                                            @endif
                                            @if(isset($reseaux['instagram']) && !empty(trim($reseaux['instagram'])))
                                                <li class="nav-item">
                                                    <a href="{{ trim($reseaux['instagram']) }}" class="nav-link" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection
