<header id="header">

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

    <nav class="navbar navbar-expand navbar-fixed sub">
        <div class="container header">

            <a class="navbar-brand" href="/">

                <img src="{{ asset($parameter['logo']) }}" 
                    alt="NEXGEN"
                    class="img-fluid"
                    style="max-width:200px; height:auto; object-fit:contain;"
                >
            </a>

            <div class="ml-auto"></div>

            <ul class="navbar-nav items">
                <li class="nav-item dropdown">
                    <a href="{{ route('public.index')}}" class="nav-link">ACCUEIL</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{ route('public.services.index')}}" class="nav-link">SERVICES</i></a>

                </li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link">EQUIPE</i></a>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{ route('public.partners.index')}}" class="nav-link">PRATENAIRE</a>

                </li>
            </ul>


            <ul class="navbar-nav action">
                <li class="nav-item ml-3">

                    <a href="#contact" class="smooth-anchor btn ml-lg-auto primary-button">NOUS CONTATER</a>
                    
                </li>
            </ul>
        </div>
    </nav>

</header>