
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
                                        <a href="{{route('public.apropos.index')}}" class=" ml-sm mt-4 btn outline-button"  >LIRE PLUS</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section id="blog" class="section-1 showcase blog-grid filter-section projects">
        <div class="overflow-holder">
            <div class="row text-center intro">
                <div class="col-12">
                    <h2> <span class="featured"><span>Actualités</span></span></h2>
                </div>
            </div>

            <div class="container" data-perview="3">
                <div class="row items filter-items" data-perview="3">
                    @foreach (array_slice($news, 0, 3) as $new)
                        <div class="col-12 col-md-6 col-lg-4 item filter-item d-flex align-items-stretch">
                            <div class="card p-0 text-center w-100">
                                <div class="image-over">
                                @if(!empty($new['images']) && isset($new['images'][0]))
                                    <img src="{{ asset($new['images'][0]) }}" alt="Lorem ipsum" class="card-img-top img-fluid" style="object-fit: cover; height: 200px;">
                                @endif
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body d-flex flex-column">
                                        <a href="{{route('public.news.detail', $new['id'])}}">
                                            <h4>{{ $new['name'] }}</h4>
                                            <p>{{ Str::limit($new['content'], 100, '...')}}</p>
                                        </a>
                                        <div class="mt-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    @endforeach
                </div>
                <div class="buttons pl-3">
                    <div class="d-sm-inline-flex mb-5 mb-md-0">
                        <a href="{{ route('public.services.index')}}" class="mt-2 btn outline-button">VOIR PLUS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                            <a href="{{ route('public.services.index')}}" class="mx-auto ml-sm-4 mt-4 btn  outline-button">VOIR PLUS</a>
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
                        <h2 class="mb-0">Quelques <span class="featured"><span>Services</span></span></h2>
                    </div>
                </div>

            
                <div class="swiper-container mid-slider items" data-perview="3"> 
                    <div class="swiper-wrapper">
                        @foreach (array_slice($services, 0, 3) as $service)

                            <div class="col-12 col-md-6 col-lg-4 item filter-item d-flex align-items-stretch ">
                                <div class="row card p-0 text-center">
                                    <div class="image-over">
                                        @if (!empty($service['images']))
                                            <img src="{{asset($service['images'][0])}}" alt="Lorem ipsum" class="card-img-top img-fluid" style="object-fit: cover; height: 200px;">  
                                        @else
                                            <img src="assets/images/news-1.jpg" alt="Lorem ipsum">  
                                        @endif

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
                        <div class="d-sm-inline-flex mb-5 mb-md-0 ml-3">
                            <a href="{{ route('public.services.index')}}" class="mt-2 btn outline-button">VOIR PLUS</a>
                        </div>
                    </div>
                </div>
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





    <section id="testimonials" class="section-1 offers featured">
        <div class="container">
            <div class="row items">
                <div class="col-12 col-md-4 pr-md-5 text">
                    <div data-aos="fade-up"  class="row intro">
                        <div class="col-12 p-0">
                            <span class="pre-title m-0">Témoignages Clients</span>
                            <h2>Avis <span class="featured"><span>de Confiance</span></span></h2>
                            <p>Nous travaillons avec passion pour offrir des solutions qui ont un impact réel sur la vie de nos clients. 
                            Ces témoignages reflètent la confiance et la satisfaction de ceux qui collaborent avec nous.</p>
                            <div class="row">
                                <div class="col-12 p-0 input-group align-self-center">
                                    <a href="{{ route('public.temoignages.index')}}" class="btn primary-button">VOIR PLUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach (array_slice($temoignages, 0, 2) as $temoignage)
                    <div data-aos="fade-up" class="col-12 col-md-4 item">
                        <div class="card">
                            <div class="col-12">
                                <img src="{{asset($temoignage['image'])}}" alt="Logo" class="logo" style="width: 100%; height: 150px;">
                                <h4>{{$temoignage['name']}}</h4>
                                <p>{{ Str::limit($temoignage['content'], 50, '...') }}</</p>
                            </div>
                        </div>
                    </div>
                @endforeach


                


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
                        <h4>Nos Contacts.</h4>
                        <p>Nous accompagnons nos clients dans la conception et la mise en œuvre de solutions innovantes.</p>
                        <p>Notre équipe est à votre disposition pour répondre à toutes vos questions et besoins spécifiques.</p>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-phone-alt mr-2"></i>
                                    {{ $parameter['contact']['phone'] }}
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
                                    {{ $parameter['contact']['adress'] }}
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

    <div id="map" class="p-0 modal fade" role="dialog" aria-labelledby="map" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header absolute" data-dismiss="modal">
                    <button type="button" class="btn-close-custom"  aria-label="Close">
                    <span>&times;</span>
                </button>
                </div>
                <div class="modal-body p-0">
                    <iframe src="{{$parameter['map_url']}}" width="600" height="450" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>


@endsection