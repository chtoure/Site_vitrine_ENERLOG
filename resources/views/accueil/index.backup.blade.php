
@extends('component.app')

@section('content')

    @php
        use Illuminate\Support\Str;
    @endphp

    <style>
        :root {
            --hero-bg-color: #080d10;

            --section-1-bg-color: #eef4ed;
            --section-2-bg-color: #ffffff;
            --section-3-bg-color: #111117;
            --section-4-bg-color: #ffffff;
            --section-5-bg-color: #eef4ed;
            --section-6-bg-color: #111117;
        }

        .video-gallery {
            padding: 2rem 0;
            min-height: 100vh;
        }



        .video-card {
            position: relative;
            width: 100%;
            height: 250px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            cursor: pointer;
            background: #000;
        }



        .video-card:hover {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }

        .video-thumbnail {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .video-card:hover .video-thumbnail {
            transform: scale(1.1);
            /* background: white; */
        }

        .play-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.3s ease;
        }

        .video-card:hover .play-overlay {
            background: rgba(0, 0, 0, 0.6);
        }

        .play-button {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
            color: #F29100;
            transition: all 0.3s ease;
            position: relative;
        }

        .play-button::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); opacity: 1; }
            100% { transform: scale(1.3); opacity: 0; }
        }

        .video-card:hover .play-button {
            transform: scale(1.1);
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #fff;
            background: rgba(255, 255, 255, 0.2);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            backdrop-filter: blur(10px);
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 1.2rem;
        }

        .swiper-pagination-bullet {
            background: rgba(255, 255, 255, 0.5);
            opacity: 1;
        }

        .video-modal {
            background: rgba(0, 0, 0, 0.95);
            backdrop-filter: blur(10px);
        }

        .video-modal .modal-dialog {
            max-width: 90vw;
            max-height: 90vh;
        }

        .video-modal .modal-content {
            background: transparent;
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }

        .video-modal .modal-header {
            border: none;
            padding: 1rem 1.5rem;
        }

        .video-modal .modal-title {
            color: white;
            font-weight: 600;
        }

        .video-modal .btn-close {
            /* background: rgba(255, 255, 255, 0.2); */
            width: 40px;
            height: 40px;
            /* opacity: 1; */
        }

        .btn-close {
            /* background: #b6d3cf; */
            color: white;

        }

        .video-modal .modal-body {
            padding: 0;
            background: #000;
        }

        .modal-video {
            width: 100%;
            height: 70vh;
            border: none;
            outline: none;
        }

        .video-controls {
            background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 100%);
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 1rem;
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .control-btn {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .control-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.1);
        }

        .gallery-title {
            text-align: center;
            color: white;
            margin-bottom: 3rem;
            font-weight: 300;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 768px) {
            .video-card {
                height: 200px;
            }
            
            .play-button {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
            
            .modal-video {
                height: 50vh;
            }
        }


    </style>  

    <section id="slider" class="hero p-0 odd">
        <div class="swiper-container no-slider animation slider-h-100 slider-h-auto">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide-center">

                    <img src="{{asset('images/templates/equipe_1.JPG')}}" alt="Full Image" class="full-image" data-mask="50">    

                    <div class="slide-content row">
                        <div class="col-12 d-flex justify-content-start inner">
                            <div class="left text-left">

                                <h1 data-aos="zoom-in" data-aos-delay="2000" class="title effect-static-text">
                                    <span class="featured bottom"><span>{{$parameter['name']}} </span></span>
                                </h1>
                                <p data-aos="zoom-in" data-aos-delay="2400" class="description bigger">{{ Str::limit($parameter['description'], 100, '...') }} </p>

                                <div data-aos="fade-up" data-aos-delay="2800" class="buttons">
                                    <div class="d-sm-inline-flex">
                                        <a href="#" class="smooth-anchor ml-sm mt-4 btn outline-button" data-toggle="modal" data-target="#description">LIRE PLUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- <section id="features" class="section-1 features offers featured">
        <div class="container">
            <div class="row justify-content-center items">

                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card">
                        <i class="icon featured icon-people"></i>
                        <h4>Capital humain</h4>
                        <p>Mettre l’humain au cœur de l’entreprise : utiliser la technologie pour améliorer la façon de travailler.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card">
                        <i class="icon featured icon-pie-chart"></i>
                        <h4>Cœur de métier</h4>
                        <p>Adopter des approches innovantes pour transformer, moderniser et exploiter les plateformes existantes.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card">
                        <i class="icon featured icon-speedometer"></i>
                        <h4>Performances</h4>
                        <p>Nous améliorons en continu notre productivité et optimisons nos ressources pour offrir des services de qualité.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="funfacts" class="section-2 highlights image-right counter funfacts featured">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 pr-md-5 align-self-center text-center text-md-left text items">
                    <div data-aos="fade-up"  class="row intro mb-4">
                        <div class="col-12 p-0">
                            <span class="pre-title m-auto m-md-0" style="color: #222222">À propos du réseau</span>
                            <h2 style="color: #F29100;"><span class="featured"><span>Notre</span></span> Entreprise</h2>
                            <p> Nous développons des solutions numériques innovantes et collaborons avec un réseau de partenaires pour accompagner nos clients dans leurs projets.</p>
                        </div>
                    </div>
                    <div class="row items">
                        <div data-aos="fade-up" class="col-12 col-md-4 p-0 pr-md-4 item">
                            <div data-percent="{{ count($equipe) }}" class="radial left">
                                <span></span>
                            </div>
                            <h4>Employés</h4>
                            <p>Une équipe dynamique et compétente.</p>
                        </div>

                        <div data-aos="fade-up" class="col-12 col-md-4 p-0 pr-md-4 item">
                            <div data-percent="{{ count($partners) }}" class="radial left">
                                <span></span>
                            </div>
                            <h4>Partenaires</h4>
                            <p>Des partenaires de confiance.</p>
                        </div>

                        <div data-aos="fade-up" class="col-12 col-md-4 p-0 pr-md-4 item">
                            <div data-percent="{{ count($services) }}" class="radial left">
                                <span></span>
                            </div>
                            <h4>Services</h4>
                            <p>Des services variés.</p>
                        </div>

                    </div>

                    <div data-aos="fade-up" class="buttons">
                        <div class="d-sm-inline-flex mb-5 mb-md-0">
                            <a href="#contact" class="smooth-anchor mx-auto mt-4 btn primary-button">NOUS CONTACTER</a>
                            <a href="{{ route('public.services.index')}}" class="mx-auto ml-sm-4 mt-4 btn outline-button">VOIR PLUS</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 p-0 image">
                    <img src="{{asset('images/templates/IMG_20241123_171652.jpg')}}" class="fit-image" alt="Fit Image">
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="section-3 odd showcase blog-grid filter-section projects">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <span class="pre-title">Nous offrons des services de qualité</span>
                        <h2 class="mb-0">Quelques & <span class="featured"><span>Services</span></span></h2>
                    </div>
                </div>
            
                <div class="swiper-container mid-slider items" data-perview="3"> 
                    <div class="swiper-wrapper">

                        @foreach ($services as $service)

                            <div class="swiper-slide slide-center item">
                                <div class="row card p-0 text-center">
                                    <div class="image-over">
                                        <img src="assets/images/news-1.jpg" alt="Lorem ipsum">
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="#"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                                    </div>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body">
                                            <a href="#">
                                                <h4>{{$service['name']}}</h4>
                                                <p>{{ Str::limit($service['description'], 100, '...') }}</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        @endforeach
                        
                    </div>

                    <div data-aos="fade-up" class="buttons">
                        <div class="d-sm-inline-flex mb-5 mb-md-0">
                            <a href="{{ route('public.services.index')}}" class="mt-2 btn outline-button">VOIR PLUS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 

    <div class="modal fade video-modal" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModalLabel">
                        <i class="fas fa-play-circle me-2"></i>
                        Lecture Vidéo
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body position-relative">
                    <video id="modalVideo" class="modal-video" controls autoplay>
                        <source src="" type="video/mp4">
                        Votre navigateur ne supporte pas la lecture vidéo.
                    </video>
                    
                    <div class="video-controls">
                        <button class="control-btn" id="prevVideo" title="Vidéo précédente">
                            <i class="fas fa-step-backward"></i>
                        </button>
                        <button class="control-btn" id="playPause" title="Lecture/Pause">
                            <i class="fas fa-pause"></i>
                        </button>
                        <button class="control-btn" id="nextVideo" title="Vidéo suivante">
                            <i class="fas fa-step-forward"></i>
                        </button>
                        <button class="control-btn" id="fullscreen" title="Plein écran">
                            <i class="fas fa-expand"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="testimonials" class="section-5 carousel testimonials">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        {{-- <span class="pre-title">NOUS INCARNONS </span> --}}
                        <h2> <span class="featured"><span>{{$parameter['valeur']}}</span></span></h2>
                        <p class="text-max-800">
                            {{$parameter['historique']}}
                        </p>
                    </div>
                </div>

                {{-- <div class="swiper-container mid-slider items" data-perview="3">
                    <div class="swiper-wrapper test">
                        @foreach ($parameter['videos'] as $index => $video)
                            <div class="swiper-slide test">
                                <div class="video-card" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-src="{{asset($video)}}" data-video-index="{{$index}}">
                                    <video class="video-card video-thumbnail" muted>
                                        <source src="{{asset($video)}}" type="video/mp4">
                                    </video>
                                    <div class="play-overlay">
                                        <div class="play-button">
                                            <i class="fas fa-play"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <section id="process" class="section-1 process offers">
        <div class="container full">
            <div class="row text-center intro">
                <div class="col-12">
                    <span class="pre-title">Enerlog Solution</span>
                    <h2><span class="featured"><span style="color: #F29100;">{{ $solution['name'] }}</span></span> Plateforme</h2>
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

    <section id="testimonials" class="section-5 carousel testimonials">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <span class="pre-title">Témoignages Clients</span>
                        <h2>Avis <span class="featured"><span>de Confiance</span></span></h2>
                        <p class="text-max-800">
                            Nous travaillons avec passion pour offrir des solutions qui ont un impact réel sur la vie de nos clients. 
                            Ces témoignages reflètent la confiance et la satisfaction de ceux qui collaborent avec nous.
                        </p>
                    </div>
                </div>
                <div class="swiper-container mid-slider items" data-perview="3"> 
                    <div class="swiper-wrapper">

                        @foreach ($temoignages as $temoignage)

                            <div class="swiper-slide slide-center item">
                                <div class="row card">
                                    <div class="col-12">
                                        <img src="{{asset($temoignage['image'])}}" alt="Logo" class="logo">
                                        <p>{{$temoignage['content']}}</p>
                                        <i class="quote-right fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            
                        @endforeach
                    </div>
                    <div data-aos="fade-up" class="buttons">
                        <div class="d-sm-inline-flex mb-5 mb-md-0">
                            <a href="{{ route('public.temoignages.index')}}" class="mt-2 btn outline-button">VOIR PLUS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="contact" class="section-6 odd form contact">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 pr-md-5 align-self-center text">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <span class="pre-title m-0">Envoyer message</span>
                            <h2>Nous <span class="featured"><span>Contacter</span></span></h2>
                            <p>Nous repondrons a votre message des que possible.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 p-0">
                            <form action="{{ route('public.emails.contact') }}" method="POST"  >
                                @csrf
                                <input type="hidden" name="section" value="nexgen_form">

                                <div class="row form-group-margin">
                                    <div class="col-12 col-md-6 m-0 p-2 input-group">
                                        <input type="text" name="name" class="form-control field-name" placeholder="Nom" required>
                                    </div>
                                    <div class="col-12 col-md-6 m-0 p-2 input-group">
                                        <input type="email" name="email" class="form-control field-email" placeholder="Email" required>
                                    </div>
                                    
                                    <div class="col-12 m-0 p-2 input-group">
                                        <textarea name="message" class="form-control field-message" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="col-12 col-12 m-0 p-2 input-group">
                                        <span class="form-alert"></span>
                                    </div>
                                    <div class="col-12 input-group m-0 p-2">
                                        <button class="btn primary-button" type="submit">ENVOYER</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>                        
                </div>
                <div class="col-12 col-md-4">
                    <div class="contacts">
                        <h4>Example Inc.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p>Praesent diam lacus, dapibus sed imperdiet consectetur.</p>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-phone-alt mr-2"></i>
                                    {{$parameter['contact']['phone']}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="mailto:{{ $parameter['contact']['email'] }}" class="nav-link">
                                    <i class="fas fa-envelope mr-2"></i>
                                    {{ $parameter['contact']['email'] }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-map-marker-alt mr-2"></i>
                                    {{$parameter['contact']['adress']}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="mt-2 btn outline-button" data-toggle="modal" data-target="#map">LOCALISER</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <div id="description" class="p-0 modal fade" role="dialog" aria-labelledby="description" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header" data-dismiss="modal">
                    <i class="icon-close fas fa-arrow-right"></i>
                </div>
                <div class="menu modal-body">
                        <p data-aos="zoom-in" data-aos-delay="2400" class="description bigger">{{ $parameter['description']}} </p>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="map" class="p-0 modal fade" role="dialog" aria-labelledby="map" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header absolute" data-dismiss="modal">
                    <i class="icon-close fas fa-arrow-right"></i>
                </div>
                <div class="modal-body p-0">
                    <iframe src="{{$parameter['map_url']}}" width="600" height="450" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> --}}
    
    {{-- <script>

        let currentVideoIndex = 0;
        let videoSources = @json(array_map(function($video) { return asset($video); }, $parameter['videos']));

        const videoModal = document.getElementById('videoModal');
        const modalVideo = document.getElementById('modalVideo');
        const playPauseBtn = document.getElementById('playPause');
        const prevBtn = document.getElementById('prevVideo');
        const nextBtn = document.getElementById('nextVideo');
        const fullscreenBtn = document.getElementById('fullscreen');

        document.addEventListener('DOMContentLoaded', function() {
            const thumbnails = document.querySelectorAll('.video-thumbnail');
            thumbnails.forEach(video => {
                video.currentTime = 1; 
            });
        });

        videoModal.addEventListener('show.bs.modal', function (event) {
            const trigger = event.relatedTarget;
            const videoSrc = trigger.getAttribute('data-video-src');
            const videoIndex = parseInt(trigger.getAttribute('data-video-index'));
            
            currentVideoIndex = videoIndex;
            modalVideo.src = videoSrc;
            modalVideo.load();
        });

        videoModal.addEventListener('hide.bs.modal', function () {
            modalVideo.pause();
            modalVideo.currentTime = 0;
        });

        playPauseBtn.addEventListener('click', function() {
            if (modalVideo.paused) {
                modalVideo.play();
                this.innerHTML = '<i class="fas fa-pause"></i>';
            } else {
                modalVideo.pause();
                this.innerHTML = '<i class="fas fa-play"></i>';
            }
        });

        prevBtn.addEventListener('click', function() {
            currentVideoIndex = currentVideoIndex > 0 ? currentVideoIndex - 1 : videoSources.length - 1;
            changeVideo();
        });

        nextBtn.addEventListener('click', function() {
            currentVideoIndex = currentVideoIndex < videoSources.length - 1 ? currentVideoIndex + 1 : 0;
            changeVideo();
        });

        fullscreenBtn.addEventListener('click', function() {
            if (modalVideo.requestFullscreen) {
                modalVideo.requestFullscreen();
            } else if (modalVideo.webkitRequestFullscreen) {
                modalVideo.webkitRequestFullscreen();
            } else if (modalVideo.msRequestFullscreen) {
                modalVideo.msRequestFullscreen();
            }
        });

        function changeVideo() {
            modalVideo.src = videoSources[currentVideoIndex];
            modalVideo.load();
            modalVideo.play();
            playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
        }

        modalVideo.addEventListener('play', function() {
            playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
        });

        modalVideo.addEventListener('pause', function() {
            playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
        });

        document.addEventListener('keydown', function(e) {
            if (videoModal.classList.contains('show')) {
                switch(e.key) {
                    case ' ':
                        e.preventDefault();
                        playPauseBtn.click();
                        break;
                    case 'ArrowLeft':
                        prevBtn.click();
                        break;
                    case 'ArrowRight':
                        nextBtn.click();
                        break;
                    case 'f':
                    case 'F':
                        fullscreenBtn.click();
                        break;
                }
            }
        });
    </script> --}}

@endsection