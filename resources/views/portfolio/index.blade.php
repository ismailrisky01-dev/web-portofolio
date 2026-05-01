<x-layouts.app>
    <!-- Hero Section -->
    <section id="hero" class="min-h-screen flex flex-col lg:flex-row">
        <div class="flex-1 flex flex-col justify-center px-8 lg:px-24 py-20 relative">
            <div class="max-w-2xl">
                <h3 class="font-headline font-bold text-4xl md:text-5xl lg:text-6xl tracking-tight leading-tight text-on-surface mb-8 uppercase">
                    HELLO, I'M {{ explode(' ', $personal['name'])[0] }}.<br/>NICE TO MEET YOU!
                </h3>
                <div class="flex items-center gap-4 text-on-surface-variant font-body text-base md:text-lg">
                    <p>Currently making magic happen as a {{ implode(' & ', $personal['roles']) }}.</p>
                </div>
            </div>
            <div class="absolute bottom-12 left-8 lg:left-24">
                <a href="#about" class="w-16 h-16 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center hover:scale-105 transition-transform duration-300 shadow-[0_8px_32px_rgba(28,27,27,0.08)]">
                    <span class="material-symbols-outlined text-3xl">arrow_downward</span>
                </a>
            </div>
        </div>
        <div class="flex-1 relative hidden lg:block">
            <img alt="Portrait Ismail" class="absolute inset-0 w-full h-full object-cover" src="{{ asset('images/fotoku.jpeg') }}"/>
        </div>
    </section>

    <!-- About/Experience/Recent Tri-Section -->
    <section id="about" class="py-32 px-8 lg:px-24 bg-white">
        <div class="max-w-[1440px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-16 lg:gap-24">
            <!-- About -->
            <div>
                <h2 class="font-headline font-bold text-3xl md:text-4xl uppercase text-on-surface" style="margin-bottom: 5rem;">ABOUT ME</h2>
                <div class="font-body text-on-surface-variant leading-relaxed text-sm space-y-6">
                    <p>
                        Halo! Saya Ismail Risky Rahmansyah, seorang Software Engineer yang berfokus pada pengembangan aplikasi mobile dan web. Lulusan Teknik Informatika Universitas Brawijaya dengan pengalaman lebih dari 4 tahun membangun solusi digital, mulai dari aplikasi Android Native (Kotlin/Java) hingga integrasi IoT dan Machine Learning.
                    </p>
                    <p>
                        Saat ini, saya aktif mengeksplorasi metode "Vibe Coding"—memanfaatkan AI untuk mempercepat iterasi dan efisiensi pengembangan. Saya sedang memperdalam ekosistem Web (React, Vite, TSX) dan Multi-platform (Flutter, Kotlin Multiplatform) untuk menghadirkan aplikasi yang performan di berbagai perangkat. Saya percaya bahwa teknologi terbaik adalah yang mampu menyelesaikan masalah nyata dengan efisien dan tepat sasaran.
                    </p>
                    <div class="pt-4">
                        <a href="#" class="font-semibold text-on-surface border-b-2 border-on-surface hover:text-primary hover:border-primary transition-colors pb-1">Connect with me on LinkedIn</a>
                    </div>
                </div>
            </div>

            <!-- Experience -->
            <div id="experience">
                <h2 class="font-headline font-bold text-3xl md:text-4xl uppercase text-on-surface" style="margin-bottom: 5rem;">EXPERIENCE</h2>
                <div class="flex flex-col">
                    <!-- Item 1 -->
                    <div class="border-t border-gray-300" style="padding: 1.25rem 0;">
                        <p class="font-body font-medium text-primary text-xs mb-2">Feb 2022 — Saat ini</p>
                        <h3 class="font-headline font-bold text-sm text-on-surface mb-2 uppercase">MOBILE APPLICATION DEVELOPER <span class="font-normal text-on-surface-variant">/ Algostudio</span></h3>
                        <p class="font-body text-on-surface-variant text-sm leading-relaxed">
                            Kontrak · Indonesia.<br>
                            Keahlian: Java, Android, dan +4 keahlian
                        </p>
                    </div>
                    <!-- Item 2 -->
                    <div class="border-t border-gray-300" style="padding: 1.25rem 0;">
                        <p class="font-body font-medium text-primary text-xs mb-2">Jan 2023 — Apr 2023</p>
                        <h3 class="font-headline font-bold text-sm text-on-surface mb-2 uppercase">FREELANCE MOBILE DEVELOPER <span class="font-normal text-on-surface-variant">/ Pekerja Lepas</span></h3>
                        <p class="font-body text-on-surface-variant text-sm leading-relaxed">
                            Pekerja Lepas · Kota Malang, Jawa Timur, Indonesia (Gabungan).<br>
                            Build Application Android base and IoT using Arduino.<br>
                            Keahlian: C++, Firebase, dan +4 keahlian
                        </p>
                    </div>
                    <!-- Item 3 -->
                    <div class="border-t border-gray-300" style="padding: 1.25rem 0;">
                        <p class="font-body font-medium text-primary text-xs mb-2">Agu 2022 — Des 2022</p>
                        <h3 class="font-headline font-bold text-sm text-on-surface mb-2 uppercase">INTERNSHIP PROGRAM <span class="font-normal text-on-surface-variant">/ University of Brawijaya</span></h3>
                        <p class="font-body text-on-surface-variant text-sm leading-relaxed">
                            Magang · Malang (Gabungan).<br>
                            Melakukan penelitian dengan dosen mengenai Machine Learning.<br>
                            Keahlian: Android Studio, Python (Programming Language), dan +3 keahlian
                        </p>
                    </div>
                    <!-- Item 4 -->
                    <div class="border-t border-gray-300 hidden-experience hidden" style="padding: 1.25rem 0;">
                        <p class="font-body font-medium text-primary text-xs mb-2">Agu 2020</p>
                        <h3 class="font-headline font-bold text-sm text-on-surface mb-2 uppercase">FREELANCE <span class="font-normal text-on-surface-variant">/ Pekerja Lepas</span></h3>
                        <p class="font-body text-on-surface-variant text-sm leading-relaxed">
                            Pekerja Lepas · Kota Malang, Jawa Timur, Indonesia (Di lokasi).<br>
                            Build Application Android Native for student competitions.<br>
                            Keahlian: Firebase, Kotlin, dan +1 keahlian
                        </p>
                    </div>
                    <!-- Item 5 -->
                    <div class="border-t border-b border-gray-300 hidden-experience hidden" style="padding: 1.25rem 0;">
                        <p class="font-body font-medium text-primary text-xs mb-2">Apr 2019 — Agu 2019</p>
                        <h3 class="font-headline font-bold text-sm text-on-surface mb-2 uppercase">MOBILE DEVELOPER <span class="font-normal text-on-surface-variant">/ PT. Geomedia Sinergi</span></h3>
                        <p class="font-body text-on-surface-variant text-sm leading-relaxed">
                            Magang · Kota Malang, Jawa Timur, Indonesia.<br>
                            Keahlian: PHP, CodeIgniter, dan +5 keahlian
                        </p>
                    </div>
                </div>
                <!-- Load More Button -->
                <button onclick="document.querySelectorAll('.hidden-experience').forEach(el => el.classList.remove('hidden')); this.style.display='none';" class="mt-4 font-body font-medium text-sm text-primary hover:underline transition-all">
                    Load more...
                </button>
            </div>

            <!-- Recent -->
            <div id="projects">
                <h2 class="font-headline font-bold text-3xl md:text-4xl uppercase text-on-surface" style="margin-bottom: 5rem;">RECENT</h2>
                <div class="flex flex-col">
                    @foreach($projects as $index => $project)
                        <a href="{{ $project['link'] }}" target="_blank" class="block border-t {{ $loop->last ? 'border-b' : '' }} border-gray-300 hover:bg-surface-container-lowest transition-colors group" style="padding: 1.25rem 0;">
                            <div class="flex justify-between items-start gap-4">
                                <div class="flex-1">
                                    <h3 class="font-headline font-bold text-[15px] leading-snug text-on-surface group-hover:text-primary transition-colors pr-2">{{ $project['title'] }}</h3>
                                    <p class="font-body text-on-surface-variant text-sm mt-2 leading-relaxed">{{ $project['description'] }}</p>
                                </div>
                                <span class="material-symbols-outlined text-on-surface-variant/50 group-hover:text-primary transition-colors mt-1 transform group-hover:translate-x-1 group-hover:-translate-y-1">arrow_outward</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                @foreach($project['tags'] as $tag)
                                    <span class="text-xs font-medium px-2 py-1 bg-surface-container-high text-on-surface-variant rounded-md">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Quote Section -->
    <section class="bg-primary-container py-32 px-8 lg:px-24">
        <div class="max-w-4xl mx-auto text-center">
            <span class="material-symbols-outlined text-white text-6xl mb-8 opacity-50" style="font-variation-settings: 'FILL' 1;">format_quote</span>
            <h2 class="font-headline font-bold text-3xl md:text-5xl text-white leading-tight">
                "{{ $personal['tagline'] }}"
            </h2>
        </div>
    </section>

    <!-- Project Highlight Section -->
    <section id="featured-project" class="py-32 px-8 lg:px-24 bg-surface-container-low">
        <div class="max-w-[1440px] mx-auto">
            <div class="flex flex-col lg:flex-row gap-16 items-center">
                <!-- Image on the Left -->
                <div class="flex-1 w-full">
                    <div class="transform transition-transform hover:-translate-y-2 duration-500">
                        <img alt="Statsig UI Collage" class="w-full h-auto rounded-xl shadow-[0_32px_64px_rgba(28,27,27,0.08)]" src="{{ asset('images/product.png') }}"/>
                    </div>
                </div>
                <!-- Text on the Right -->
                <div class="flex-1 lg:pl-8">
                    <h3 class="font-headline font-bold text-3xl md:text-4xl text-on-surface mb-8">DIGITAL PRODUCTS</h3>
                    <div class="font-body text-on-surface-variant text-base leading-relaxed space-y-6 mb-8 text-justify">
                        <p>
                            Dengan pengalaman lebih dari 4 tahun di dunia pengembangan perangkat lunak, saya telah membangun berbagai produk digital — mulai dari aplikasi mobile Android Native menggunakan Kotlin dan Java, website interaktif dengan Laravel dan React, hingga solusi IoT yang terintegrasi dengan Machine Learning.
                        </p>
                        <p>
                            Setiap produk yang saya kembangkan selalu berfokus pada pengalaman pengguna yang intuitif dan performa yang optimal. Saat ini, saya terus mengeksplorasi pendekatan modern seperti Kotlin Multiplatform dan Flutter untuk menghadirkan aplikasi lintas platform yang efisien, serta memanfaatkan metode "Vibe Coding" dengan AI untuk mempercepat proses pengembangan.
                        </p>
                    </div>
                    <div class="flex items-center gap-2 text-primary font-semibold text-sm">
                        <a href="#contact" class="hover:underline underline-offset-4 decoration-2 transition-all">Mari Berkolaborasi</a>
                        <span class="text-on-surface-variant font-normal">|</span>
                        <a href="https://github.com/ismailrisky01-dev" target="_blank" class="hover:underline underline-offset-4 decoration-2 transition-all">Lihat di GitHub</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Photography Gallery / Case Study Section -->
    <section id="photography" class="py-32 px-8 lg:px-24 bg-surface">
        <div class="max-w-[1440px] mx-auto">
            <div class="flex flex-col lg:flex-row gap-16 items-center">
                <div class="flex-1 lg:pr-16">
                    <h2 class="font-headline font-bold text-sm tracking-[0.1em] uppercase text-primary mb-4">PHOTOGRAPHY</h2>
                    <h3 class="font-headline font-bold text-4xl md:text-5xl text-on-surface mb-8">FEATURED GALLERY</h3>
                    <p class="font-body text-on-surface-variant text-lg leading-relaxed mb-8">
                        Beyond the screen, I capture the world through my lens. From urban cityscapes to breathtaking mountain peaks.
                    </p>
                    <a class="inline-flex items-center gap-2 text-primary font-semibold hover:underline underline-offset-4 decoration-2 transition-all" href="https://www.pexels.com/@ismail-rahmansyah-33202385/" target="_blank">
                        View Pexels Profile
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
                <div class="flex-1 w-full">
                    <div class="bg-surface-container-highest rounded-xl p-8 shadow-[0_32px_64px_rgba(28,27,27,0.04)] transform transition-transform hover:-translate-y-2 duration-500">
                        @if(isset($photos) && count($photos) > 0)
                           <div class="grid grid-cols-2 gap-4">
                               @foreach(array_slice($photos, 0, 4) as $photo)
                                   <a href="{{ $photo['pexels_url'] }}" target="_blank" class="aspect-square overflow-hidden rounded-lg group relative block">
                                       <img src="{{ $photo['url'] }}" alt="{{ $photo['title'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                       <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                                            <p class="text-white text-xs font-medium truncate">{{ $photo['title'] }}</p>
                                       </div>
                                   </a>
                               @endforeach
                           </div>
                        @else
                            <img alt="Gallery Collage" class="w-full h-auto rounded shadow-sm" data-alt="clean modern dashboard user interface collage with graphs data visualization and light grey background in an isometric perspective" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBYxLD83h75HFfWkt-4sdtf5DPK6sccOpD-8AaVUR8nXUhAuy6aae9o0rzqPro2yfqZKUsBv9MCi-nuALn4ek5J1zkB0QLZx8prg8K_VN1dja9_0s-FLzXY3pWlNIImJq5hF90L2-taum2xv0cxLWZ5qVGtXgSpyS_YX4sPz7_-RiP8oLocDmmJR7JzLWL0Ute12Whiq4LWV_ecbDzfXd8ZNJwRzU9zXILOXML1GfMbZOX6QdHupR0YIK-YkIJvgdf4yMb60O24H_Q"/>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Contact Section -->
    <section id="contact" class="py-32 px-8 lg:px-24 bg-surface-container-lowest">
        <div class="max-w-[1440px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 lg:gap-24 items-start">
            <div>
                 <h2 class="font-headline font-bold text-sm tracking-[0.1em] uppercase text-primary mb-4">CONTACT</h2>
                 <h3 class="font-headline font-bold text-4xl md:text-5xl text-on-surface mb-8">GET IN TOUCH</h3>
                 <p class="font-body text-on-surface-variant text-lg leading-relaxed mb-8">
                     Have a project in mind or want to collaborate? I'm always open to discussing product design work or partnership opportunities.
                 </p>
                 <div class="flex flex-col gap-6 font-body text-on-surface-variant">
                     <div class="flex items-center gap-4">
                         <div class="w-12 h-12 rounded-full bg-primary-container/30 flex items-center justify-center text-primary">
                             <span class="material-symbols-outlined">forum</span>
                         </div>
                         <div>
                             <p class="text-sm font-bold text-on-surface uppercase tracking-wide">WhatsApp</p>
                             <a href="https://wa.me/{{ $personal['whatsapp'] }}" target="_blank" class="hover:text-primary transition-colors">+{{ $personal['whatsapp'] }}</a>
                         </div>
                     </div>
                     <div class="flex items-center gap-4">
                         <div class="w-12 h-12 rounded-full bg-primary-container/30 flex items-center justify-center text-primary">
                             <span class="material-symbols-outlined">location_on</span>
                         </div>
                         <div>
                             <p class="text-sm font-bold text-on-surface uppercase tracking-wide">Location</p>
                             <p>{{ $personal['location'] }}</p>
                         </div>
                     </div>
                 </div>
            </div>
            <div class="bg-surface rounded-2xl p-8 lg:p-12 shadow-[0_32px_64px_rgba(28,27,27,0.04)] ring-1 ring-outline-variant/30 flex flex-col items-center justify-center text-center">
                <div class="w-20 h-20 bg-green-100 text-green-600 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                </div>
                <h4 class="font-headline font-bold text-2xl text-on-surface mb-4">Mari Berdiskusi!</h4>
                <p class="font-body text-on-surface-variant text-base mb-8">
                    Cara tercepat untuk menghubungi saya adalah melalui WhatsApp. Klik tombol di bawah untuk langsung mengobrol!
                </p>
                <a href="https://wa.me/{{ $personal['whatsapp'] }}" target="_blank" class="inline-flex items-center gap-2 bg-[#25D366] hover:bg-[#1ebd5a] text-white font-bold py-4 px-8 rounded-full transition-all hover:scale-105 hover:shadow-lg">
                    Chat di WhatsApp
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-surface-container-low dark:bg-[#1c1b1b] w-full py-20 px-8 md:px-24">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 max-w-[1440px] mx-auto">
            <!-- About Blurb -->
            <div class="col-span-1 md:col-span-2">
                <div class="text-lg font-bold text-[#1c1b1b] dark:text-[#fcf9f8] mb-6">{{ mb_strtoupper($personal['name']) }}</div>
                <p class="font-['Inter'] text-sm tracking-tight leading-relaxed text-[#1c1b1b]/80 dark:text-[#fcf9f8]/80 max-w-md mb-8">
                    {{ $personal['about'] }}
                </p>
                <p class="font-['Inter'] text-xs tracking-wide text-[#1c1b1b]/60 dark:text-[#fcf9f8]/60 uppercase">
                    © {{ date('Y') }} {{ mb_strtoupper($personal['name']) }}. HANDCRAFTED WITH INTENT.
                </p>
            </div>
            <!-- Navigations -->
            <div>
                <h4 class="font-headline font-bold text-xs tracking-[0.1em] uppercase text-[#1c1b1b] dark:text-[#fcf9f8] mb-6">NAVIGATIONS</h4>
                <ul class="flex flex-col gap-3 font-['Inter'] text-sm">
                    <li><a class="text-primary dark:text-[#FFB347] font-semibold hover:text-primary dark:hover:text-[#FFB347] underline underline-offset-4 decoration-2 smooth transition-all duration-300" href="#hero">Home</a></li>
                    <li><a class="text-[#1c1b1b]/80 dark:text-[#fcf9f8]/80 hover:text-primary dark:hover:text-[#FFB347] hover:underline underline-offset-4 decoration-2 smooth transition-all duration-300" href="#about">About</a></li>
                    <li><a class="text-[#1c1b1b]/80 dark:text-[#fcf9f8]/80 hover:text-primary dark:hover:text-[#FFB347] hover:underline underline-offset-4 decoration-2 smooth transition-all duration-300" href="#experience">Skills</a></li>
                    <li><a class="text-[#1c1b1b]/80 dark:text-[#fcf9f8]/80 hover:text-primary dark:hover:text-[#FFB347] hover:underline underline-offset-4 decoration-2 smooth transition-all duration-300" href="#projects">Projects</a></li>
                </ul>
            </div>
            <!-- Contacts & Follow -->
            <div>
                <h4 class="font-headline font-bold text-xs tracking-[0.1em] uppercase text-[#1c1b1b] dark:text-[#fcf9f8] mb-6">CONTACTS</h4>
                <div class="font-['Inter'] text-sm tracking-tight leading-relaxed text-[#1c1b1b]/80 dark:text-[#fcf9f8]/80 mb-8">
                    <p class="mb-2">{{ $personal['location'] }}</p>
                    <a class="hover:text-primary dark:hover:text-[#FFB347] transition-colors" href="mailto:{{ $personal['email'] }}">{{ $personal['email'] }}</a>
                </div>
                <!-- Optional: Social Links if available in future -->
            </div>
        </div>
    </footer>
</x-layouts.app>
