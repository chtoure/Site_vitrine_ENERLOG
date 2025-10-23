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
                            href="#get-started" 
                            class="inline-flex items-center justify-center bg-primary text-primary-foreground px-6 py-3 rounded-md text-sm md:text-base font-semibold transition-all duration-300 hover:bg-primary/90 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2"
                        >
                            Get started
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
