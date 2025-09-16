@extends('component.app')

@section('content')

 @php
        use Illuminate\Support\Str;
    @endphp

     <style>
            :root {
                --section-1-bg-color: #eef4ed;
                --section-2-bg-color: #ffffff;
                --section-3-bg-color: #111117; --section-3-bg-image: url('../../assets/images/bg-1.jpg');
            }
        </style>

                <!-- Hero -->
        <section id="slider" class="hero p-0 odd featured">
            <div class="swiper-container no-slider animation slider-h-50 slider-h-auto">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">

                        <!-- Media -->
                        <img src="{{ asset('images\news\news.jpg') }}" alt="Full Image" class="full-image" data-mask="80">

                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">

                                <!-- Content -->
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Actualités</li>
                                    </ol>
                                </nav>

                                <h1 class="mb-0 title effect-static-text">Actualités</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Blog -->
        <section id="blog" class="section-1 showcase blog-grid filter-section projects">
            <div class="overflow-holder">
                <div class="container">
                    <div class="row items filter-items">
                        @foreach ($dataNews as $news)
                            <div class="col-12 col-md-6 col-lg-4 item filter-item d-flex align-items-stretch">
                                <div class="card p-0 text-center w-100">
                                    <div class="image-over">
                                    @if(!empty($news['images']) && isset($news['images'][0]))
                                            <img src="{{ asset($news['images'][0]) }}" alt="Lorem ipsum" class="card-img-top img-fluid" style="object-fit: cover; height: 200px;">
                                        @endif
                                    </div>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body d-flex flex-column">
                                            <a href="{{route('public.news.detail', $news['id'])}}">
                                                <h4>{{ $news['name'] }}</h4>
                                                <p>{{ Str::limit($news['content'], 100, '...')}}</p>
                                            </a>
                                            <div class="mt-auto">
                                                {{-- Bouton ou lien si besoin --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        @endforeach
                    </div>


                    <!-- Pagination -->
                   <div class="row mt-4">
                        <div class="col-12">
                            <nav>
                                <ul class="pagination justify-content-center">

                                    {{-- Précédent --}}
                                    <li class="page-item {{ $dataNews->onFirstPage() ? 'disabled' : '' }}">
                                        <a class="page-link" href="{{ $dataNews->previousPageUrl() }}" tabindex="-1">
                                            <i class="icon-arrow-left"></i>
                                        </a>
                                    </li>

                                    {{-- Pages --}}
                                    @for ($i = 1; $i <= $dataNews->lastPage(); $i++)
                                        <li class="page-item {{ $i == $dataNews->currentPage() ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $dataNews->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor

                                    {{-- Suivant --}}
                                    <li class="page-item {{ $dataNews->hasMorePages() ? '' : 'disabled' }}">
                                        <a class="page-link" href="{{ $dataNews->nextPageUrl() }}">
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    

@endsection




{{-- @foreach ($dataNews as $news)
        <p>
            <td>ID: {{ $news['id'] }}</td>
            <td>Name: {{ $news['name'] }}</td>
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
        </p>
    @endforeach --}}