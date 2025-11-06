<footer id="footer" class="bg-gradient-to-b from-[#222222] to-[#222222]/95 border-t border-[#F29100]/30 pt-10">
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="items-center space-x-2 mb-6">
                <div class="text-3xl font-bold">
                    <img src="{{asset($parameter['footer_logo'])}}" alt="logo" class="h-24 w-auto">
                </div>
                <div class="space-y-3 text-sm">
                    <h3 class="font-semibold text-secondary mb-4 text-lg">Contactez nous</h3>
                    <div class="flex items-center space-x-3 text-white/70 hover:text-secondary transition-colors">
                        <div class="min-w-8 min-h-8 bg-[#F29100]/20 rounded-lg flex items-center justify-center border border-secondary">
                            <a href="mailto:contact@enerlog.com" 
                                class="flex items-center space-x-2 text-secondary hover:text-white transition-all duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" 
                                        class="w-4 h-4" 
                                        fill="none" 
                                        viewBox="0 0 24 24" 
                                        stroke="currentColor" 
                                        stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l9 6 9-6" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8" />
                                </svg>
                            </a>

                        </div>
                        <span>{{$parameter['contact']['email']}}</span>
                    </div>

                    <div class="flex items-center space-x-3 text-white/70 hover:text-secondary transition-colors">
                        <div class="min-w-8 min-h-8 bg-[#F29100]/20 rounded-lg flex items-center justify-center border border-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2 3l2-1 4 2-1 3a15 15 0 006 6l3-1 2 4-1 2c-1 2-4 2-6 1A20 20 0 012 7c0-2 0-3 1-4z"/>
                            </svg>
                        </div>
                        <a href="tel:{{$parameter['contact']['phone']}}" class="hover:underline">
                            {{$parameter['contact']['phone']}}
                        </a>
                    </div>

                    <div class="flex items-center space-x-3 text-white/70 hover:text-secondary transition-colors">
                        <div class="min-w-8 min-h-8 bg-[#F29100]/20 rounded-lg flex items-center justify-center border border-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a7 7 0 00-7 7c0 5 7 13 7 13s7-8 7-13a7 7 0 00-7-7z"/>
                                <circle cx="12" cy="9" r="2.5"/>
                            </svg>
                        </div>
                        <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($parameter['contact']['adress']) }}" target="_blank" class="hover:underline">
                            {{$parameter['contact']['adress']}}
                        </a>
                    </div>

                    <h3 class="font-semibold text-secondary mb-4 text-lg">Nous sommes aussi sur</h3>
                    <div class="flex space-x-3">
                        @foreach($parameter['comptes'] as $social)
                            <button onclick="window.open('{{ $social['link'] }}', '_blank')" class="w-10 h-10 bg-[#F29100]/20 hover:bg-[#F29100]/30 rounded-lg flex items-center justify-center text-secondary hover:text-white transition-all duration-200 hover:scale-110 border border-secondary" aria-label="{{ $social['name'] }}">
                                <img src="{{asset($social['icon'])}}" alt="" class="h-6 w-6">
                            </button>
                        @endforeach
                    </div>
                </div>
            </div>
           
            @php
                $footerLinks = [
                    'informations' =>[
                        ['name' => 'À propos de nous', 'href' => route('public.about.index')],
                        ['name' => 'Nos actualités et conseils', 'href' => route('public.news.index')],
                        ['name' => 'Nos services disponibles', 'href' => route('public.services.index')],
                        ['name' => 'Nos partenaires et clients de confiances', 'href' =>"#parteners"],
                        // ['name' => 'Contactez-nous', 'href' => $parameter['url_contact_form']],
                        ['name' => 'Centre d\'aide', 'href' => 'https://cpay.enerlog.net/support/assistance/elearning'],
                        
                    ],
                    'footer_contents' =>[
                        ['name' => 'Politique confidentialité', 'href' => $parameter['policy_url']],
                        ['name' => 'Assistance', 'href' => 'https://cpay.enerlog.net/support/assistance'],
                        ['name' => 'Conditions utilisation', 'href' => 'https://cpay.enerlog.net/support/cgu'],
                    ]


                ];
            @endphp
            

            <div>
                <h3 class="font-semibold text-secondary mb-4 text-lg">Produits & Services</h3>
                <ul class="space-y-3">
                    
                    <div class="space-y-3 text-sm">
                        @foreach ($services as $solution)
                            <h3 class="font-semibold text-secondary mb-4 text-lg">Solution {{$solution["solution"] ?? " " }}</h3>
                            @foreach ($solution["services"] as $service)

                                <a href="{{route('public.services.detail', [$solution['id'] ,$service['id']])}}" class="flex items-center space-x-3 text-white/70 hover:text-secondary transition-colors">
                                    <span> {{ Str::limit( $service['name'], 50, '...') }}</span>
                                </a>
                                
                            @endforeach
                            
                        @endforeach

                    </div>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold text-secondary mb-4 text-lg">Informations utiles</h3>
                <ul class="space-y-3">
                    @foreach($footerLinks['informations'] as $link)
                        <li>
                            <a href="{{ $link['href'] }}" class="text-white/70 hover:text-secondary transition-colors text-sm hover:translate-x-1 transform duration-200 block">
                                {{ $link['name'] }}
                            </a>
                        </li>
                    @endforeach
                    <li>
                        <a href="{{ $parameter['url_contact_form'] }}" target="_blank" class="text-white/70 hover:text-secondary transition-colors text-sm hover:translate-x-1 transform duration-200 block">
                            Contactez-nous
                        </a>
                    </li>
                    <li>
                        <a href="{{ $parameter['join_us_url'] }}" target="_blank" class="text-white/70 hover:text-secondary transition-colors text-sm hover:translate-x-1 transform duration-200 block">
                            Nous rejoindre
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold text-secondary mb-4 text-lg">Profitez la Super App cPay</h3>
                <a target="_blank" href="{{$parameter['play_store_url']}}">
                    <img src="{{ asset($parameter['qr_code']) }}" alt="QR Code" class="w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40 lg:w-48 lg:h-48 xl:w-56 xl:h-56 object-contain">
                </a>
            </div>

        </div>

        <div class="border-t border-[#F29100]/30 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center text-sm pb-6">
            <div class=" text-white/60 mb-4 md:mb-0">{{$parameter['full_name']}}</div>
            <div class="flex items-center gap-4 underline text-secondary">
                @foreach ($footerLinks['footer_contents'] as $item)
                    <a href="{{$item['href']}}" target="_blank">{{$item['name']}}</a> 
                @endforeach
            </div>
        </div>
    </div>
</footer>
