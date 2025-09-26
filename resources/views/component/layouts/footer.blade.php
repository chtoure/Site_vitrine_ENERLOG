<footer class="bg-gradient-to-b from-[#222222] to-[#222222]/95 border-t border-[#F29100]/30 pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-8">
            <div class="items-center space-x-2 mb-6">
                <div class="text-3xl font-bold">
                    <img src="{{asset($parameter['logo'])}}" alt="logo" class="h-24 w-auto">
                </div>
            </div>
            <div>
                <p class="text-white/80 mb-8 max-w-sm leading-relaxed">
                    Solutions digitales innovantes pour la gestion d'événements, logistique et paiements. Votre partenaire
                    technologique de confiance.
                </p>

                {{-- Contact Info --}}
                <div class="space-y-3 text-sm">
                    <div class="flex items-center space-x-3 text-white/70 hover:text-[#F29100] transition-colors">
                        <div class="w-8 h-8 bg-[#F29100]/20 rounded-lg flex items-center justify-center border border-[#F29100]/30">
                            {{-- Mail Icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#F29100]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m0 0l-4 4m4-4l4-4"/>
                            </svg>
                        </div>
                        <span>contact@enerlog.fr</span>
                    </div>
                    <div class="flex items-center space-x-3 text-white/70 hover:text-[#F29100] transition-colors">
                        <div class="w-8 h-8 bg-[#F29100]/20 rounded-lg flex items-center justify-center border border-[#F29100]/30">
                            {{-- Phone Icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#F29100]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h2l3 7-2 2 3 7H3l1-2-1-2 1-2-1-2z"/>
                            </svg>
                        </div>
                        <span>+33 1 23 45 67 89</span>
                    </div>
                    <div class="flex items-center space-x-3 text-white/70 hover:text-[#F29100] transition-colors">
                        <div class="w-8 h-8 bg-[#F29100]/20 rounded-lg flex items-center justify-center border border-[#F29100]/30">
                            {{-- MapPin Icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#F29100]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c1.656 0 3-1.344 3-3S13.656 5 12 5 9 6.344 9 8s1.344 3 3 3z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21s9-5.333 9-11c0-4.418-3.582-8-8-8s-8 3.582-8 8c0 5.667 9 11 9 11z"/>
                            </svg>
                        </div>
                        <span>Paris, France</span>
                    </div>
                </div>
            </div>

            @php
                $footerLinks = [
                    'services' => [
                        ['name' => 'Tickets Événements', 'href' => url('/tickets')],
                        ['name' => 'Livraison Colis', 'href' => url('/livraison')],
                        ['name' => 'Cartes Pétrolières', 'href' => url('/cartes')],
                        ['name' => 'Tracking GPS', 'href' => url('/tracking')],
                    ],
                    'company' => [
                        ['name' => 'À propos', 'href' => url('/about')],
                        ['name' => 'Références', 'href' => url('/references')],
                        ['name' => 'Carrières', 'href' => url('/careers')],
                        ['name' => 'Contact', 'href' => url('/contact')],
                    ],
                ];
            @endphp

            <div>
                <h3 class="font-semibold text-[#F29100] mb-4 text-lg">Services</h3>
                <ul class="space-y-3">
                    @foreach($footerLinks['services'] as $link)
                        <li>
                            <a href="{{ $link['href'] }}" class="text-white/70 hover:text-[#F29100] transition-colors text-sm hover:translate-x-1 transform duration-200 block">
                                {{ $link['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h3 class="font-semibold text-[#F29100] mb-4 text-lg">Entreprise</h3>
                <ul class="space-y-3">
                    @foreach($footerLinks['company'] as $link)
                        <li>
                            <a href="{{ $link['href'] }}" class="text-white/70 hover:text-[#F29100] transition-colors text-sm hover:translate-x-1 transform duration-200 block">
                                {{ $link['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>



        <div class="border-t border-[#F29100]/30 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
            <div class="text-sm text-white/60 mb-4 md:mb-0">© 2025 ENERLOG. Tous droits réservés.</div>

            @php
                $socialLinks = [
                    ['name' => 'Facebook', 'href' => '#', 'icon' => 'facebook'],
                    ['name' => 'Twitter', 'href' => '#', 'icon' => 'twitter'],
                    ['name' => 'LinkedIn', 'href' => '#', 'icon' => 'linkedin'],
                    ['name' => 'Instagram', 'href' => '#', 'icon' => 'instagram'],
                ];
            @endphp
            <div class="flex space-x-3">
                @foreach($socialLinks as $social)
                    <a href="{{ $social['href'] }}" class="w-10 h-10 bg-[#F29100]/20 hover:bg-[#F29100]/30 rounded-lg flex items-center justify-center text-[#F29100] hover:text-white transition-all duration-200 hover:scale-110 border border-[#F29100]/30" aria-label="{{ $social['name'] }}">
                        @if($social['icon'] === 'facebook')
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.522-4.477-10-10-10S2 6.478 2 12c0 5 3.657 9.128 8.438 9.879v-6.987H7.898v-2.892h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.462h-1.26c-1.243 0-1.63.771-1.63 1.562v1.875h2.773l-.443 2.892h-2.33v6.987C18.343 21.128 22 17 22 12z"/></svg>
                        @elseif($social['icon'] === 'twitter')
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557a9.834 9.834 0 0 1-2.828.775 4.932 4.932 0 0 0 2.165-2.724 9.864 9.864 0 0 1-3.127 1.195 4.918 4.918 0 0 0-8.379 4.482A13.957 13.957 0 0 1 1.671 3.149a4.918 4.918 0 0 0 1.523 6.556 4.897 4.897 0 0 1-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 0 1-2.224.084 4.919 4.919 0 0 0 4.588 3.417 9.867 9.867 0 0 1-6.102 2.104c-.396 0-.788-.023-1.175-.069a13.945 13.945 0 0 0 7.548 2.212c9.056 0 14.01-7.513 14.01-14.03 0-.213-.004-.425-.014-.636A10.012 10.012 0 0 0 24 4.557z"/></svg>
                        @elseif($social['icon'] === 'linkedin')
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.238-5 5v14c0 2.762 2.239 5 5 5h14c2.762 0 5-2.238 5-5v-14c0-2.762-2.238-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.268c-.966 0-1.75-.784-1.75-1.75S5.534 4.232 6.5 4.232s1.75.784 1.75 1.75-.784 1.75-1.75 1.75zm13.5 11.268h-3v-5.604c0-1.337-.026-3.061-1.866-3.061-1.868 0-2.155 1.459-2.155 2.967V19h-3v-10h2.885v1.367h.041c.402-.761 1.383-1.563 2.847-1.563 3.043 0 3.605 2.003 3.605 4.604V19z"/></svg>
                        @elseif($social['icon'] === 'instagram')
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.34 3.608 1.315.975.976 1.253 2.243 1.315 3.608.058 1.266.069 1.645.069 4.85s-.012 3.584-.07 4.85c-.062 1.366-.34 2.633-1.315 3.608-.976.975-2.243 1.253-3.608 1.315-1.266.058-1.645.069-4.85.069s-3.584-.012-4.85-.07c-1.366-.062-2.633-.34-3.608-1.315-.975-.976-1.253-2.243-1.315-3.608-.058-1.266-.069-1.645-.069-4.85s.012-3.584.07-4.85c.062-1.366.34-2.633 1.315-3.608.976-.975 2.243-1.253 3.608-1.315 1.266-.058 1.645-.069 4.85-.069zm0-2.163C8.741 0 8.332.012 7.052.07 5.775.127 4.648.443 3.678 1.413 2.708 2.383 2.392 3.51 2.335 4.787 2.277 6.067 2.265 6.476 2.265 12s.012 5.933.07 7.213c.057 1.277.373 2.404 1.343 3.374.97.97 2.097 1.286 3.374 1.343C8.332 23.988 8.741 24 12 24s3.668-.012 4.948-.07c1.277-.057 2.404-.373 3.374-1.343.97-.97 1.286-2.097 1.343-3.374.058-1.28.07-1.689.07-7.213s-.012-5.933-.07-7.213c-.057-1.277-.373-2.404-1.343-3.374C19.352.443 18.225.127 16.948.07 15.668.012 15.259 0 12 0z"/><path d="M12 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zm0 10.162a3.999 3.999 0 1 1 0-7.998 3.999 3.999 0 0 1 0 7.998zm6.406-11.845a1.44 1.44 0 1 1-2.881 0 1.44 1.44 0 0 1 2.881 0z"/></svg>
                        @endif
                    </a>
                @endforeach
            </div>
        </div>

        
    </div>
</footer>
