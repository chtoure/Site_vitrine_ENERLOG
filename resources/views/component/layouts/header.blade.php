<header id="header">

    <style>

        .menu-header {
        padding: 2rem 2rem 1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
        z-index: 2;
        backdrop-filter: blur(10px);
        }

        .menu-title {
        font-family: var(--h2-font);
        font-size: var(--h2-size);
        font-weight: var(--h2-weight);
        margin: 0;
        color: var(--white-color);
        text-transform: uppercase;
        letter-spacing: 2px;
        background: var(--primary-color);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        }

        .btn-close-custom {
        background: none;
        border: 2px solid var(--secondary-color);
        color: var(--secondary-color);
        font-size: 1.5rem;
        cursor: pointer;
        padding: 0;
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        font-weight: bold;
        }

        .btn-close-custom:hover {
        transform: rotate(90deg) scale(1.1);
        }




        .menu-footer {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 2rem;
        z-index: 2;
        backdrop-filter: blur(10px);
        }

        .social-links {
        display: flex;
        justify-content: center;
        gap: 1.2rem;
        }

        .social-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        color: var(--white-color);
        text-decoration: none;
        border-radius: 50%;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        backdrop-filter: blur(10px);
        border: 2px solid var(--primary-color);
        font-size: 1.1rem;
        }

        .social-link:hover {
        background: linear-gradient(135deg, var(--secondary-color));
        transform: translateY(-5px) scale(1.15);
        color: var(--white-color);
        border-color: var(--primary-color);
        }




        @keyframes slideInFromLeft {
        from {
            opacity: 0;
            transform: translateX(-40px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
        }

        @keyframes pulseGlow {
        0%,
        100% {
            box-shadow: 0 0 5px rgba(242, 145, 0, 0.3);
        }
        50% {
            box-shadow: 0 0 20px rgba(242, 145, 0, 0.6);
        }
        }

        .modern-nav .nav-item {
        animation: slideInFromLeft 0.7s ease forwards;
        opacity: 0;
        }

        .modern-nav .nav-item:nth-child(1) {
        animation-delay: 0.1s;
        }
        .modern-nav .nav-item:nth-child(2) {
        animation-delay: 0.2s;
        }
        .modern-nav .nav-item:nth-child(3) {
        animation-delay: 0.3s;
        }
        .modern-nav .nav-item:nth-child(4) {
        animation-delay: 0.4s;
        }


        .modal-nav {
            align-items: center;
        }


    </style>

    <nav class="navbar navbar-expand top">
        <div class="container header">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link pl-0"><i class="fas fa-clock mr-2"></i>Heures ouvertures: {{$parameter['hourly']}}</a>
                </li>
            </ul>

            <div class="ml-auto"></div>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fas fa-phone-alt mr-2"></i>{{$parameter['contact']['phone']}}</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fas fa-envelope mr-2"></i>{{$parameter['contact']['email']}}</a>
                </li>
            </ul>

            <ul class="navbar-nav icons">

                @foreach ($parameter['comptes'] as $compte)

                    <li class="nav-item social">
                        <a href="{{$compte['link']}}" class="nav-link"><i class="fab fa-{{$compte['icon']}}"></i></a>
                    </li>
                    
                @endforeach
            </ul>

        </div>
    </nav>

    <nav class="navbar navbar-expand navbar-fixed sub text-black">
        <div class="container header">

            <a class="navbar-brand" href="/">

                <img src="{{ asset($parameter['logo']) }}" 
                    alt="NEXGEN"
                    class="img-fluid"
                    style="max-width:150px; height:auto; object-fit:contain;"
                >
            </a>

            <div class="ml-auto"></div>

            <ul class="navbar-nav items " >
                <li class="nav-item dropdown">
                    <a href="{{ route('public.index')}}" class="nav-link">ACCUEIL</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{ route('public.services.index')}}" class="nav-link">SERVICES</i></a>

                </li>
                <li class="nav-item dropdown">
                    <a href="{{ route('public.equipes.index')}}" class="nav-link">EQUIPE</i></a>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{ route('public.partners.index')}}" class="nav-link">PRATENAIRE</a>

                </li>
                <li class="nav-item dropdown">
                    <a href="{{ route('public.news.index')}}" class="nav-link">ACTUALITES</a>

                </li>
                <li class="nav-item dropdown">
                    <a href="{{ route('public.temoignages.index')}}" class="nav-link">TEMOIGNAGES</a>

                </li>
                
            </ul>


            <ul class="navbar-nav action">
                <li class="nav-item ml-3">

                    <a href="#contact" class="smooth-anchor btn ml-lg-auto primary-button">CONTATER</a>
                    
                </li>
            </ul>

            <ul class="navbar-nav toggle">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                        <i class="icon-menu m-0"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content full modern-menu">

            <div class="menu-header">
                <p>{{' '}}</p>
                <h5 class="menu-title">Navigation</h5>
                <button type="button" class="btn-close-custom" data-dismiss="modal" aria-label="Close">
                    <span>&times;</span>
                </button>
            </div>

            <ul class="navbar-nav modal-nav items modern-nav">
                <li class="nav-item">
                    <a href="{{ route('public.index')}}" class="nav-link modern-link">
                        <span class="nav-text">ACCUEIL</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('public.services.index')}}" class="nav-link modern-link">
                        <i class="fas fa-cogs nav-icon"></i>
                        <span class="nav-text">SERVICES</span>
                        
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('public.equipes.index')}}" class="nav-link modern-link">

                        <span class="nav-text">ÉQUIPE</span>
                        
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('public.partners.index')}}" class="nav-link modern-link">
                        
                        <span class="nav-text">PARTENAIRE</span>
                        
                    </a>
                </li>
            </ul>

            <div class="menu-footer">
                <div class="social-links">
                    @foreach ($parameter['comptes'] as $compte)
                        <a href="{{$compte['link']}}" class="social-link"><i class="fab fa-{{$compte['icon']}}"></i></a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

