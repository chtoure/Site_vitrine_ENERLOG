{{-- 
<div class="relative pt-[70px] lg:pt-[100px] pb-[110px] overflow-hidden">

    <div 
        class="absolute inset-0 bg-cover bg-center blur-lg scale-105"
        style="background-image: url('{{ asset('/images/templates/equipe_1.JPG') }}');"
    ></div>

    <div class="absolute inset-0 bg-black/70"></div>

    <div class="relative z-10 container max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap -mx-4 items-center">
      
            <div class="w-full lg:w-5/12 px-4">
                <div class="hero-content">
                    <h1 class="text-secondary font-bold text-4xl sm:text-[42px] lg:text-[40px] xl:text-[42px] leading-snug mb-3">
                        {{$parameter['name']}}
                    </h1>

                    <p class="text-2xl mb-8 text-white/80 max-w-[480px]">
                        {{$parameter['summarize']}}
                    </p>

                    <ul class="flex flex-wrap items-center">
                        <li>
                            <a
                                href="{{$parameter['login_url']}}"
                                target="_blank"
                                class="py-4 px-6 sm:px-10 lg:px-8 xl:px-10 inline-flex items-center justify-center text-center text-white text-base bg-primary hover:bg-opacity-90 font-normal rounded-lg"
                            >
                                Créer un compte
                            </a>
                        </li>
                        <li>
                            <a
                                href="{{$parameter['play_store_url']}}"
                                target="_blank"
                                class="py-4 px-3 sm:px-5 lg:px-4 xl:px-5 inline-flex items-center justify-center text-center text-base font-normal text-white/80 hover:text-secondary"
                            >
                                <span class="mr-2">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11" cy="11" r="11" fill="#F29100" />
                                    <rect x="6.90906" y="13.3636" width="8.18182" height="1.63636" fill="white" />
                                    <rect x="10.1818" y="6" width="1.63636" height="4.09091" fill="white" />
                                    <path d="M11 12.5454L13.8343 9.47726H8.16576L11 12.5454Z" fill="white" />
                                </svg>
                                </span>
                                Play Store
                            </a>
                        </li>
                        <li>
                            <a
                                href="{{$parameter['app_store_url']}}"
                                target="_blank"
                                class="py-4 px-3 sm:px-5 lg:px-4 xl:px-5 inline-flex items-center justify-center text-center text-base font-normal text-white/80 hover:text-secondary"
                            >
                                <span class="mr-2">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11" cy="11" r="11" fill="#F29100" />
                                    <rect x="6.90906" y="13.3636" width="8.18182" height="1.63636" fill="white" />
                                    <rect x="10.1818" y="6" width="1.63636" height="4.09091" fill="white" />
                                    <path d="M11 12.5454L13.8343 9.47726H8.16576L11 12.5454Z" fill="white" />
                                </svg>
                                </span>
                                App Store
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="hidden lg:block lg:w-1/12 px-4"></div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="lg:text-right lg:ml-auto">
                    <div class="relative z-10 pt-11 lg:pt-0 w-full flex justify-center">
                        <div class="relative inline-block">
                            <img
                                src="{{asset($parameter['hero_image'])}}"
                                alt="hero"
                                class="max-w-full"
                            />
                            <span class="absolute -left-8 -bottom-8 z-[-1]">
                                <svg
                                    width="93"
                                    height="93"
                                    viewBox="0 0 93 93"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
 --}}


















<section class="relative overflow-hidden flex items-center">
    <div class="absolute inset-0 -z-20">
        <img
            src="{{ asset($parameter['hero_image']) }}"
            alt="Professional working with technology"
            class="w-full h-full object-fill"
            loading="eager"
        >
        <div class="absolute inset-0 bg-black/40"></div>
    </div>

    <div class="container px-4 mx-auto py-2 relative z-10">
        <div class="relative w-full max-w-sm md:max-w-lg lg:max-w-3xl mx-auto md:mx-0">
            <div class="relative w-full aspect-square">
                <img 
                    src="{{ asset($parameter['hero_icon']) }}" 
                    alt="" 
                    aria-hidden="true"
                    class="w-full h-full object-contain"
                    style="animation: vibrate 0.8s ease-in-out infinite;"
                >

                <div class="absolute inset-0 flex flex-col justify-center gap-3 md:gap-5 lg:gap-6 px-4 md:px-10 lg:px-16">

                    <div class="space-y-2 md:space-y-3 lg:space-y-4 ml-[100px] md:ml-28 lg:ml-36 pl-2">
                        <h1 class="text-2xl md:text-3xl lg:text-4xl font-extrabold tracking-tight text-balance leading-tight text-white italic">
                            <span>{{ $parameter['business_name'] }}</span>
                        </h1>
                        <p class="text-white leading-relaxed font-medium drop-shadow-lg max-w-xs md:max-w-md lg:max-w-sm">
                            {{ $parameter['summarize'] }}
                        </p>

                        <a 
                            href="{{ $parameter['login_url'] }}" 
                            class="inline-flex items-center justify-center bg-primary text-primary-foreground px-6 py-3 rounded-md text-sm md:text-base font-semibold transition-all duration-300 hover:bg-primary/90 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2"
                        >
                            Connexion
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
