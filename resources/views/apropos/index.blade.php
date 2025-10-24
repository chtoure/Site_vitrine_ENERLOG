@extends('component.app')

@section('content')

<section class="py-4">
    <section class="py-4">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Titre -->
        <div class="mb-8">
        <h2 class="text-3xl font-extrabold text-gray-900">
            <span class="mr-1">Notre</span>
            <span>Mission</span>
        </h2>
        <p class="mt-3 text-gray-600 max-w-3xl">
            {{$parameter['mission']}}
        </p>
        </div>

        <!-- Grille d'icônes / valeurs -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Item 1 : Audace -->
        <div class="flex items-start gap-4 p-6 bg-white rounded-lg shadow-sm border border-gray-200">
            <div class="flex-shrink-0">
            <!-- SVG original (Audace) -->
            <div class="w-16 h-16 flex items-center justify-center">
                <!-- paste du svg -->
                <svg xmlns="http://www.w3.org/2000/svg" width="92" height="96" viewBox="0 0 92 96" fill="none" class="w-14 h-14">
                <path d="M85.4903 10.9711C82.6324 6.14288 77.756 3.0016 72.1251 2.35201C58.9013 0.820152 35.0571 3.90326 18.9754 9.2163C12.5711 11.3299 7.44946 15.78 4.56325 21.7523C1.49783 28.0737 1.12054 35.7621 3.51629 42.8397C6.07237 50.3923 9.07177 57.8383 12.4107 64.9547C15.7497 72.0613 18.9943 78.1112 22.6256 83.9963C26.3607 90.0462 31.7276 93.5946 37.7452 94.0018C38.132 94.0309 38.5187 94.0406 38.9054 94.0406C44.7061 94.0406 50.271 91.1029 54.6946 85.6639C67.8429 69.5212 78.803 50.179 86.3864 29.751C88.9236 22.9061 88.6123 16.2357 85.4903 10.9711ZM82.4626 28.2094C75.0396 48.2012 64.3248 67.107 51.4689 82.891C47.63 87.6029 42.8668 90.0365 38.0188 89.6874C33.3688 89.3772 29.1621 86.5267 26.1721 81.6791C22.6256 75.9395 19.4565 70.0253 16.193 63.0738C12.9201 56.1028 9.98668 48.812 7.47775 41.4144C5.44986 35.4227 5.75168 28.956 8.31721 23.672C10.7318 18.6789 14.8631 15.1014 20.2582 13.3174C33.0103 9.09995 51.4311 6.26892 64.4757 6.26892C67.1167 6.26892 69.5407 6.38526 71.6535 6.62765C75.9922 7.1318 79.7273 9.52655 81.9061 13.2011C84.3396 17.3022 84.5377 22.6249 82.4626 28.1997V28.2094Z" fill="#00377D"/>
                <path d="M27 24V51.825C27 54.1865 27.9381 56.4513 29.6079 58.1211C31.2777 59.7909 33.5425 60.729 35.904 60.729H63.729" stroke="#00377D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M34.791 46.2599L42.1212 38.9297C42.5387 38.5124 43.1048 38.278 43.695 38.278C44.2853 38.278 44.8514 38.5124 45.2688 38.9297L48.2427 41.9037C48.6602 42.321 49.2263 42.5554 49.8165 42.5554C50.4068 42.5554 50.9729 42.321 51.3903 41.9037L61.503 31.7909L62.9455 30.3463M62.9455 30.3463C62.4624 29.8632 61.7946 29.5649 61.0578 29.5649H52.599M62.9455 30.3463C63.4307 30.8315 63.729 31.4993 63.729 32.2361V40.6949" stroke="#00377D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            </div>

            <div class="flex-1">
            <h4 class="text-lg font-semibold text-gray-900 mb-1">Valeur</h4>
            <p class="text-gray-600">{{$parameter['valeur']}}</p>
            </div>
        </div>

        <!-- Item 2 : Passion -->
        <div class="flex items-start gap-4 p-6 bg-white rounded-lg shadow-sm border border-gray-200">
            <div class="flex-shrink-0">
            <div class="w-16 h-16 flex items-center justify-center">
                <!-- svg Passion -->
                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="92" viewBox="0 0 96 92" fill="none" class="w-14 h-14">
                <g clip-path="url(#clip0_206_6574)"><path d="M85.0288 85.4903C89.8571 82.6324 92.9984 77.756 93.648 72.1251C95.1798 58.9013 92.0967 35.0571 86.7837 18.9754C84.6701 12.5711 80.22 7.44945 74.2477 4.56324C67.9263 1.49782 60.2379 1.12054 53.1603 3.51628C45.6077 6.07237 38.1617 9.07177 31.0453 12.4107C23.9387 15.7497 17.8888 18.9943 12.0037 22.6256C5.95385 26.3607 2.40536 31.7276 1.99816 37.7452C1.96908 38.1319 1.95938 38.5187 1.95938 38.9054C1.95938 44.7061 4.89706 50.271 10.3361 54.6946C26.4788 67.8429 45.821 78.803 66.249 86.3864C73.0939 88.9236 79.7643 88.6123 85.0288 85.4903ZM67.7906 82.4626C47.7988 75.0396 28.893 64.3248 13.109 51.4689C8.39707 47.63 5.96354 42.8668 6.31258 38.0188C6.62283 33.3688 9.47325 29.1621 14.3209 26.1721C20.0605 22.6256 25.9747 19.4565 32.9262 16.193C39.8972 12.92 47.188 9.98668 54.5856 7.47775C60.5773 5.44986 67.044 5.75168 72.328 8.3172C77.3211 10.7318 80.8986 14.8631 82.6826 20.2582C86.9 33.0103 89.7311 51.4311 89.7311 64.4757C89.7311 67.1167 89.6147 69.5407 89.3724 71.6535C88.8682 75.9922 86.4735 79.7273 82.7989 81.9061C78.6978 84.3396 73.3751 84.5377 67.8003 82.4626L67.7906 82.4626Z" fill="#00377D"></path><path d="M56.6888 60.308V46.5267M56.6888 46.5267C58.017 46.528 59.34 46.3613 60.6263 46.0306M56.6888 46.5267C55.3607 46.528 54.0377 46.3613 52.7513 46.0306M62.5951 65.6603C58.6922 66.399 54.6854 66.399 50.7826 65.6603M60.6263 71.9157C58.0085 72.1899 55.3692 72.1899 52.7513 71.9157M62.5951 60.308V59.804C62.5951 57.2236 64.3223 55.0186 66.5536 53.7245C70.3021 51.5537 73.23 48.2073 74.8838 44.2037C76.5375 40.2001 76.8247 35.7629 75.7008 31.5796C74.577 27.3962 72.1048 23.7003 68.6674 21.0644C65.23 18.4286 61.0192 17 56.6875 17C52.3558 17 48.145 18.4286 44.7076 21.0644C41.2702 23.7003 38.798 27.3962 37.6742 31.5796C36.5503 35.7629 36.8375 40.2001 38.4912 44.2037C40.145 48.2073 43.0729 51.5537 46.8214 53.7245C49.0527 55.0186 50.7826 57.2236 50.7826 59.804V60.308" stroke="#00377D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_206_6574"><rect width="92" height="96" fill="white" transform="translate(96) rotate(90)"></rect></clipPath></defs>
                </svg>
            </div>
            </div>

            <div class="flex-1">
            <h4 class="text-lg font-semibold text-gray-900 mb-1">Slogan</h4>
            <p class="text-gray-600">{{$parameter['slogan']}}</p>
            </div>
        </div>

        <!-- Item 3 : Innovation -->
        <div class="flex items-start gap-4 p-6 bg-white rounded-lg shadow-sm border border-gray-200">
            <div class="flex-shrink-0">
            <div class="w-16 h-16 flex items-center justify-center">
                <!-- svg Innovation -->
                <svg xmlns="http://www.w3.org/2000/svg" width="88" height="94" viewBox="0 0 88 94" fill="none" class="w-14 h-14">
                <path d="M3.50968 84.0288C6.3676 88.8571 11.244 91.9984 16.8749 92.648C30.0987 94.1798 53.9429 91.0967 70.0246 85.7837C76.4289 83.6701 81.5505 79.22 84.4368 73.2477C87.5022 66.9263 87.8795 59.2379 85.4837 52.1603C82.9276 44.6077 79.9282 37.1617 76.5893 30.0453C73.2503 22.9387 70.0057 16.8888 66.3744 11.0037C62.6393 4.95385 57.2724 1.40536 51.2548 0.998158C50.8681 0.969075 50.4813 0.959378 50.0946 0.959378C44.2939 0.959377 38.729 3.89706 34.3054 9.33613C21.1571 25.4788 10.197 44.821 2.61364 65.249C0.0764178 72.0939 0.387674 78.7643 3.50968 84.0288ZM6.53737 66.7906C13.9604 46.7988 24.6752 27.893 37.5311 12.109C41.37 7.39707 46.1332 4.96354 50.9812 5.31258C55.6312 5.62283 59.8379 8.47325 62.8279 13.3209C66.3744 19.0605 69.5435 24.9747 72.807 31.9262C76.08 38.8972 79.0133 46.188 81.5223 53.5856C83.5501 59.5773 83.2483 66.044 80.6828 71.328C78.2682 76.3211 74.1369 79.8986 68.7418 81.6826C55.9897 85.9 37.5689 88.7311 24.5243 88.7311C21.8833 88.7311 19.4593 88.6147 17.3465 88.3723C13.0078 87.8682 9.27268 85.4734 7.09387 81.7989C4.66039 77.6978 4.46232 72.3751 6.53737 66.8003L6.53737 66.7906Z" fill="#00377D"/>
                <path d="M35.6594 42.1531L23.3439 45.453M36.14 68.5779L29.9823 70.2278M29.8861 57.5532L26.8072 58.3782M55.7874 63.7072L64.0101 65.5518C64.355 65.6378 64.7174 65.6224 65.0538 65.5077C65.3902 65.393 65.6864 65.1837 65.907 64.905C66.1339 64.6259 66.2776 64.2885 66.3215 63.9315C66.3582 63.5813 66.3036 63.2276 66.163 62.9048L62.6262 55.2638C62.4824 54.9879 62.4009 54.6838 62.3875 54.373C62.4048 54.059 62.4991 53.7542 62.6623 53.4854L66.9623 46.2569C67.1392 45.9492 67.2299 45.5997 67.225 45.2448C67.2202 44.89 67.1198 44.543 66.9346 44.2404C66.7421 43.9419 66.4702 43.703 66.1496 43.5504C65.8289 43.3977 65.4721 43.3374 65.119 43.3761L56.7546 44.3853C56.4456 44.4169 56.1336 44.3745 55.8443 44.2615C55.555 44.1484 55.2968 43.9681 55.0911 43.7355L49.52 37.3612C49.293 37.0945 48.9965 36.8961 48.6634 36.788C48.3303 36.6799 47.9737 36.6665 47.6334 36.7491C47.2851 36.836 46.971 37.026 46.7323 37.2942C46.4804 37.55 46.3159 37.879 46.2625 38.234L44.5367 46.5635C44.4747 46.8639 44.3437 47.1458 44.1539 47.3868C43.9642 47.6278 43.721 47.8213 43.4435 47.952L35.8039 51.231C35.4743 51.3731 35.1897 51.6022 34.9805 51.8938C34.7735 52.187 34.6563 52.5341 34.6432 52.8928C34.6446 53.2489 34.7402 53.5983 34.9203 53.9055C35.1004 54.2127 35.3585 54.4668 35.6685 54.6421L43.0108 58.751C43.2819 58.9145 43.5092 59.1249 43.6925 59.3823C43.8363 59.6582 43.9178 59.9623 43.9312 60.2731L44.6888 68.6588C44.6801 69.0101 44.7729 69.3565 44.9561 69.6564C45.172 69.9435 45.4644 70.164 45.7998 70.2927C46.1305 70.4242 46.4921 70.4574 46.8412 70.3885C47.1903 70.3195 47.5121 70.1513 47.768 69.9039L53.9667 64.195C54.1959 63.9811 54.4741 63.8267 54.7769 63.7456C55.0797 63.6645 55.3978 63.659 55.7032 63.7297L55.7874 63.7072Z" stroke="#00377D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            </div>

            <div class="flex-1">
            <h4 class="text-lg font-semibold text-gray-900 mb-1">Innovation</h4>
            <p class="text-gray-600">{{$parameter['innovation']}}</p>
            </div>
        </div>

        <!-- Item 4 : Engagement -->
        <div class="flex items-start gap-4 p-6 bg-white rounded-lg shadow-sm border border-gray-200">
            <div class="flex-shrink-0">
            <div class="w-16 h-16 flex items-center justify-center">
                <!-- svg Engagement -->
                <svg xmlns="http://www.w3.org/2000/svg" width="47" height="50" viewBox="0 0 47 50" fill="none" class="w-14 h-14">
                <path d="M45.346 5.7319C43.7945 3.17376 41.1474 1.50943 38.0907 1.16527C30.907 0.35365 17.9683 1.98716 9.23842 4.80213C5.76182 5.92196 2.98156 8.27976 1.41478 11.444C-0.249279 14.7932 -0.454087 18.8667 0.84644 22.6166C2.23401 26.6182 3.86223 30.5581 5.67477 34.3337C7.48732 38.099 9.24866 41.3044 11.2199 44.4224C13.2475 47.6226 16.1609 49.5078 19.4276 49.7236C19.6375 49.739 19.8474 49.7441 20.0574 49.7441C23.2063 49.7441 26.2272 48.1877 28.6286 45.3059C35.7661 36.7531 41.7157 26.5052 45.8324 15.6819C47.2097 12.0553 47.0407 8.52119 45.346 5.7319ZM43.7024 14.8652C39.6728 25.4573 33.8563 35.4741 26.8775 43.8368C24.7935 46.3333 22.2027 47.6124 19.5761 47.4377C17.0518 47.2733 14.7682 45.7631 13.14 43.1947C11.2148 40.1537 9.49443 37.0202 7.72285 33.3372C5.94614 29.6438 4.35377 25.7809 2.9918 21.8615C1.89096 18.6869 2.0548 15.2607 3.44749 12.4611C4.75826 9.81567 7.0009 7.92018 9.92965 6.97501C16.8521 4.74049 26.857 3.24054 33.9382 3.24054C35.3718 3.24054 36.6877 3.30218 37.8295 3.4306C40.1848 3.69772 42.2124 4.96651 43.3952 6.91336C44.7162 9.08624 44.8237 11.9064 43.6973 14.86L43.7024 14.8652Z" fill="#00377D"/>
                <path d="M20.6291 10.4434C14.4755 10.4434 9.48633 15.3316 9.48633 21.363C9.48633 23.4217 10.0671 25.348 11.0783 26.9903M25.504 22.8536V25.6114M29.6825 22.8536V25.6114M25.504 11.8223V14.5801M29.6825 11.8223V14.5801M23.4147 16.6485H20.6291M23.4147 20.7852H20.6291M34.5575 16.6485H31.7718M34.5575 20.7852H31.7718M24.8076 33.8849L24.6265 34.777C24.4315 35.7519 24.3326 36.2387 24.1112 36.6248C23.7699 37.2199 23.2174 37.6681 22.5609 37.8824C22.1361 38.0216 21.6319 38.0216 20.6291 38.0216C19.6262 38.0216 19.122 38.0216 18.6972 37.8837C18.0405 37.6691 17.4879 37.2204 17.147 36.6248C16.9255 36.2387 16.8266 35.7519 16.6316 34.777L16.4505 33.8849M28.9861 14.5801H26.2004C24.887 14.5801 24.231 14.5801 23.8228 14.9841C23.4147 15.3881 23.4147 16.0376 23.4147 17.3379V20.0958C23.4147 21.3961 23.4147 22.0455 23.8228 22.4496C24.231 22.8536 24.887 22.8536 26.2004 22.8536H28.9861C30.2996 22.8536 30.9556 22.8536 31.3637 22.4496C31.7718 22.0455 31.7718 21.3961 31.7718 20.0958V17.3379C31.7718 16.0376 31.7718 15.3881 31.3637 14.9841C30.9556 14.5801 30.2996 14.5801 28.9861 14.5801ZM14.1983 31.2622C14.0702 30.8816 14.0061 30.6899 14.0131 30.5355C14.0209 30.3758 14.0754 30.2218 14.1698 30.0921C14.2642 29.9624 14.3946 29.8626 14.5451 29.8047C14.69 29.7481 14.8933 29.7481 15.2973 29.7481H25.9609C26.3662 29.7481 26.5681 29.7481 26.713 29.8033C26.8637 29.8613 26.9942 29.9613 27.0887 30.0913C27.1831 30.2213 27.2374 30.3756 27.2451 30.5355C27.252 30.6899 27.188 30.8802 27.0598 31.2622C26.823 31.9668 26.7046 32.3198 26.5222 32.6053C26.1405 33.2018 25.5423 33.6307 24.8508 33.8035C24.5193 33.8849 24.146 33.8849 23.398 33.8849H17.8601C17.1121 33.8849 16.7375 33.8849 16.4074 33.8022C15.716 33.6296 15.1178 33.2013 14.7359 32.6053C14.5535 32.3198 14.4351 31.9668 14.1983 31.2622Z" stroke="#10357F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </div>
            </div>

            <div class="flex-1">
            <h4 class="text-lg font-semibold text-gray-900 mb-1">Engagement</h4>
            <p class="text-gray-600">{{$parameter['engagement']}}</p>
            </div>
        </div>
        </div>

        <!-- Spacer (optionnel) -->
        <div class="mt-8"></div>
    </div>
    </section>


    <section class=" py-4">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start mb-12">

                <div class="relative">
                    <img 
                    src="{{asset($parameter['images'][0])}}" 
                    alt="People collaborating" 
                    class="w-full h-auto rounded-2xl shadow-lg object-cover"
                    />
                </div>

                <div>
                    <h2 class="text-3xl font-extrabold text-gray-900  mb-10">Historique</h2>
                    <p class="mt-3 text-gray-600 max-w-3xl">
                        {{$parameter['historique']}}
                    </p>
                </div>
                
                
            </div>

            {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="relative h-64 md:h-80">
                    <img 
                    src="{{asset($parameter['images'][1])}}" 
                    alt="Team at beach" 
                    class="w-full h-full object-cover rounded-2xl shadow-lg"
                    />
                </div>
                <div class="relative h-64 md:h-80">
                    <img 
                    src="{{asset($parameter['images'][2])}}" 
                    alt="Team meeting" 
                    class="w-full h-full object-cover rounded-2xl shadow-lg"
                    />
                </div>
                <div class="relative h-64 md:h-80">
                    <img 
                    src="{{asset($parameter['images'][3])}}" 
                    alt="Team sports" 
                    class="w-full h-full object-cover rounded-2xl shadow-lg"
                    />
                </div>
            </div> --}}
        </div>

    </section>

    <section class="py-4">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- Texte -->
        <div>
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
            <span class="inline-block">Message de notre</span>
            <br>
            <span>Directeur Général</span>
            </h2>

            <div class="mt-6 space-y-4 text-gray-700">
            <p>
                Nous sommes votre partenaire pour la transformation numérique au Togo et en Afrique, engagés à rendre chaque entreprise et institution plus connectée, performante et durable.
            </p>
            <p>
                Avec des solutions comme Enerlog cPay, nous modernisons les services, facilitons les transactions et accompagnons nos partenaires vers une économie plus intelligente et inclusive.
            </p>
            <p>
                Grâce à votre confiance, nous ne sommes pas seulement un fournisseur de technologies, mais un véritable acteur du changement numérique.            </p>
            <p>
                Prêts à avancer ensemble dans cette ère d’innovation, nous continuerons à innover, à connecter et à grandir pour construire un futur numérique solide et inclusif.
            </p>
            </div>

            <h5 class="mt-6 text-lg font-medium text-gray-800">Ensemble, donnons vie au futur numérique de l’Afrique.</h5>
            <h4 class="mt-1 text-xl font-semibold text-gray-900">Abdou-Djalilou NEKERE</h4>
        </div>

        <!-- Image -->
        <div class="flex justify-center md:justify-end">
            <img
            src="{{asset("/images/parameters/directeur.png")}}"
            alt="Directeur Général"
            class="w-full max-w-md rounded-lg shadow-lg object-cover"
            width="703" height="660"
            />
        </div>
        </div>
    </div>
    </section>


    <section class="py-8 bg-gradient-to-b from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                <div class="bg-white rounded-2xl shadow-lg p-8 lg:p-10">
                    <div class="mb-8">
                        <h2 class="text-4xl font-bold text-gray-900 mb-2">Laissez nous un commentaire</h2>
                        {{-- <p class="text-gray-600"></p> --}}
                    </div>

                    <form class="space-y-6" method="POST" action="{{ route('public.emails.contact') }}">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nom complet</label>
                                <input 
                                    type="text" 
                                    name="name" 
                                    placeholder="Prénom & Nom" 
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition-all"
                                />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <input 
                                    type="email" 
                                    name="email" 
                                    placeholder="votre@email.com" 
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition-all"
                                />
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Commentaire<i class="text-secondary">*</i></label>
                            <textarea 
                                name="message" 
                                placeholder="Écrivez votre commentaire ici..." 
                                rows="6" 
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent resize-none transition-all"
                                required
                            ></textarea>
                        </div>
                        
                        <button 
                            type="submit" 
                            class="w-full bg-primary hover:bg-secondary text-white font-semibold py-4 rounded-lg shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200"
                        >
                            Envoyer
                        </button>
                    </form>

                </div>

                <div class="space-y-6">
                    <div class="group bg-white rounded-2xl shadow-md hover:shadow-xl p-6 transition-all duration-300 border border-gray-100 hover:border-yellow-400">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-secondary rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Questions Fréquentes</h3>
                                <p class="text-gray-600 mb-4 leading-relaxed">Explorez nos questions et réponses pour trouver rapidement l'information dont vous avez besoin.</p>
                                <a href="{{route('public.index')}}#faqs" class="inline-flex items-center gap-2 text-secondary hover:text-primary font-medium group-hover:gap-3 transition-all">
                                    Consulter la FAQ
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="group bg-white rounded-2xl shadow-md hover:shadow-xl p-6 transition-all duration-300 border border-gray-100 hover:border-yellow-400">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-blue-500 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Visitez Notre Agence</h3>
                                <p class="text-gray-600 mb-2 leading-relaxed">Venez nous rencontrer à notre bureau</p>
                                <p class="text-gray-900 font-semibold">Lomé, Togo</p>
                                <p class="text-gray-600">{{$parameter['contact']['adress']}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="group bg-white rounded-2xl shadow-md hover:shadow-xl p-6 transition-all duration-300 border border-gray-100 hover:border-yellow-400">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-green-500 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Contact par Email</h3>
                                <p class="text-gray-600 mb-3 leading-relaxed">Cliquez le lien ci-dessous pour nous contactez en utilisant le formulaire de contact.</p>
                                <a href="{{$parameter['url_contact_form']}}"  target="_blank" class="inline-flex items-center gap-2 text-secondary hover:text-primary font-medium group-hover:gap-3 transition-all">
                                    Nous Contactez
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

@endsection