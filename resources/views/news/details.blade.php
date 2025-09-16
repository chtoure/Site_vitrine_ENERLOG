@extends('component.app')

@section('content')

    @php
        function makeLinksClickable($text) {
            return preg_replace(
                '/(https?:\/\/[^\s]+)/',
                '<a href="$1" target="_blank">$1</a>',
                $text
            );

        }

        function getDomain($url) {
            $host = parse_url($url, PHP_URL_HOST);
            return $host ?? $url;
        }


    @endphp
  <style>
            :root {
                --section-1-bg-color: #ffffff;
                --section-2-bg-color: #eef4ed;
                --section-3-bg-color: #111117; --section-3-bg-image: url('../../assets/images/bg-1.jpg');
                --section-4-bg-color: #ffffff;
            }
        </style>



            <!-- Hero -->
        <section id="slider" class="hero p-0 odd featured">
            <div class="swiper-container no-slider animation slider-h-50 slider-h-auto">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">

                        <!-- Media -->
                        <img src="{{asset($news['images'][0])}}" alt="Full Image" class="full-image" data-mask="80"> 

                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">

                                <!-- Content -->
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $news['name'] }}</li>
                                    </ol>
                                </nav>
                                <h1 class="mb-0 title effect-static-text">{{ $news['name'] }}</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Single -->
        <section id="single" class="section-1 single">
            <div class="container">
                <div class="row">
                    
                    <!-- Main -->
                    <div class="col-12 col-lg-8 p-0 text">
                        <div class="row intro m-0">
                            <div class="col-12">
                                <span class="pre-title m-0">Enerlog Actualité</span>
                                <div class="title-icon">
                                    
                                    <h2><span class="featured"><span><i class="icon icon-present"></i></span></span>{{ $news['name'] }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 align-self-center">
                                 @foreach(explode('!', $news['content']) as $paragraph)
                                    @if(trim($paragraph) !== '') 
                                        <p>{!! makeLinksClickable(trim($paragraph)) !!}</p>
                                    @endif
                                @endforeach
                            </div>
                        </div>        
                    </div>
                    
                    <!-- Sidebar -->
                    <aside class="col-12 col-lg-4 pl-lg-5 p-0 float-right sidebar">                    
                        <div class="row">
                            <div class="col-12 align-self-center text-left">
                                <h4>Actualité Photos</h4>
                                
                                <!-- Gallery -->
                                <div class="row justify-content-center">
                                     @if(is_array($news['images']))
                                            @foreach($news['images'] as $img)
                                                <a class="col-6 pl-0 item" href="{{asset($img)}}">
                                                    <img src="{{asset($img)}}" alt="Project" class="w-100">
                                                </a>
                                            @endforeach
                                    @endif
                            
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <!-- About -->
        @if(is_array($news['link']) && count($news['link']) > 0)
            <section id="about" class="section-2 highlights image-right">
                <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 pr-md-5 align-self-center text">
                        <div data-aos="fade-up"  class="row intro">
                            <div class="col-12 p-0">
                                <span class="pre-title m-0">Liens De l'Actualité</span>
                                <h2><span class="featured"><span>Liens</span></span> Disponibles</h2>
                                <p>Cette Actualité {{ $news['name'] }} est un evenement dans le quel la société ENERLOG TECHNOLOGY & DIGITAL SAS a mis plus d'effort pour faire que cet evenement est plus de visibilté. Ainsi vous pouvez voir les liens qui font la publicités a droite.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 pr-md-5 align-self-center text">
                        <div class="row items">
                                @foreach($news['link'] as $link)
                                    <div data-aos="fade-up" class="col-12 col-md-6 p-0 item">
                                        <a href="{{$link}}">{{getDomain($link)}}</a>
                                    </div> 
                                @endforeach                      
                        </div>
                        
                    </div>
                </div>
                </div>
            </section>
        @endif   











@endsection




 {{-- <p> 
            <td>ID: {{ $news['id'] }}</td>
            <td>Name:</td>
            <td >
                <ul>Content :</ul> 
                <ul> {{ $news['content'] }} </ul>
            </td>
            <td>
                Images:
                @if(is_array($news['images']))
                    <ul>
                        @foreach($news['images'] as $img)
                            <li>{{ $img }}</li>
                        @endforeach
                    </ul>
                @else
                    {{ $news['images'] }}
                @endif
            </td>
            <td>
                Link:
                @if(is_array($news['link']))
                    <ul>
                        @foreach($news['link'] as $link)
                            <li>{{ $link }}</li>
                        @endforeach
                    </ul>
                @else
                    {{ $news['link'] }}
                @endif
            </td>
        </p> --}}