@extends('component.app')

@section('content')

    <section id="slider" class="hero p-0 odd featured">
        <div class="swiper-container no-slider animation slider-h-50 slider-h-auto">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide-center">

                    <video class="full-image to-bottom" data-mask="70" playsinline autoplay muted loop>
                        <source src="{{asset('videos/templates/partners_1.mp4')}}" type="video/mp4" />
                    </video> 
    

                    <div class="slide-content row text-center">
                        <div class="col-12 mx-auto inner">

                            <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('public.index') }}">Accueil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Partenaire</li>
                                </ol>
                            </nav>

                            <h1 class="mb-0 title effect-static-text">Partenaires</h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="section-2 showcase blog-grid projects">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    <span class="pre-title">Une union qui obtient des résultats</span>
                    <h2>Réseau de <span class="featured"><span>Partenariat</span></span></h2>

                    <p class="text-max-800">Nous travaillons en partenariat avec les entreprises les plus réputées du marché actuel.</p>
                </div>
            </div>

            <div class="partners-carousel-wrapper">
                <div class="partners-carousel" id="partnersCarousel">
                    @foreach ($partners as $partner)
                        <div class="partner-card">
                            <div class="card p-0 text-center h-100">
                                <div class="image-over">
                                    <img src="{{ asset($partner['logo']) }}" 
                                        alt="{{ $partner['name'] }}"
                                        class="img-fluid"
                                    >
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4>{{$partner['name']}}</h4>
                                            <p>{{$partner['description']}}</p>
                                        </a>
                                    </div>
                                </div>
                                <a href="{{ route('public.partners.detail', $partner['id']) }}">
                                    <i class="btn-icon pulse fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($partners as $partner)
                        <div class="partner-card">
                            <div class="card p-0 text-center h-100">
                                <div class="image-over">
                                    <img src="{{ asset($partner['logo']) }}" 
                                        alt="{{ $partner['name'] }}"
                                        class="img-fluid"
                                    >
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4>{{$partner['name']}}</h4>
                                            <p>{{$partner['description']}}</p>
                                        </a>
                                    </div>
                                </div>
                                <a href="{{ route('public.partners.detail', $partner['id']) }}">
                                    <i class="btn-icon pulse fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <style>
        .partners-carousel-wrapper {
            overflow: hidden;
            width: 100%;
            margin: 2rem 0;
        }

        .partners-carousel {
            display: flex;
            width: max-content;
            animation: scrollLeft 20s linear infinite;
            gap: 1.5rem;
        }

        .partner-card {
            flex: 0 0 auto;
            width: 300px;
            min-height: 350px;
        }

        .partner-card .card {
            border: 1px solid #dee2e6;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .partner-card .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .partner-card .image-over img {
            max-height: 80px;
            max-width: 100%;
            object-fit: contain;
        }


        .partner-card .card-body p {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 0;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            line-height: 1.4;
            max-height: 4.2em; 
        }

        .partner-card .btn-icon {
            position: absolute;
            bottom: 1rem;
            right: 1rem;
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        @keyframes scrollLeft {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        .partners-carousel:hover {
            animation-play-state: paused;
        }

        @media (max-width: 768px) {
            .partner-card {
                width: 250px;
                min-height: 320px;
            }
            
            .partners-carousel {
                gap: 1rem;
            }
        }

        @media (max-width: 576px) {
            .partner-card {
                width: 220px;
                min-height: 300px;
            }
            
            .partner-card .image-over {
                height: 100px;
                padding: 1rem;
            }
            
            .partner-card .image-over img {
                max-height: 60px;
            }
        }

        .partners-carousel-wrapper::-webkit-scrollbar {
            display: none;
        }

        .partners-carousel-wrapper {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('partnersCarousel');
            
            if (carousel) {
                carousel.addEventListener('mouseenter', function() {
                    this.style.animationPlayState = 'paused';
                });
                
                carousel.addEventListener('mouseleave', function() {
                    this.style.animationPlayState = 'running';
                });
                
                const partnerCards = carousel.querySelectorAll('.partner-card');
                if (partnerCards.length > 0) {
                    const cardWidth = 300 + 24; 
                    const totalWidth = partnerCards.length * cardWidth;
                    const duration = Math.max(15, totalWidth / 60);
                    carousel.style.animationDuration = duration + 's';
                }
            }
        });
    </script>


@endsection

        


