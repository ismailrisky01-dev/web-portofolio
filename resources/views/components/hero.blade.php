@props(['personal'])

<div class="relative min-h-screen flex items-center justify-center overflow-hidden bg-cover bg-center"
    style="background-image: url('{{ asset('build/assets/foto.png') }}');">
    <!-- Translucent Light Overlay -->
    <div class="absolute inset-0 bg-white/85 backdrop-blur-[2px]"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto">
            <h1
                class="text-5xl sm:text-7xl font-extrabold tracking-tight text-slate-900 mb-6 leading-tight drop-shadow-sm">
                Hi, I'm <span class="text-primary-500">{{ explode(' ', $personal['name'])[0] }}</span>.
            </h1>
            <p class="text-xl sm:text-2xl text-white mb-8 font-medium drop-shadow-lg">
                {{ $personal['tagline'] }}
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                <a href="#projects"
                    class="px-8 py-4 bg-slate-900 text-white rounded-full font-semibold hover:bg-primary-500 transition-colors duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl w-full sm:w-auto">
                    View My Code
                </a>
                <a href="#photography"
                    class="px-8 py-4 bg-transparent backdrop-blur-sm text-white border border-white/50 rounded-full font-semibold hover:bg-primary-500 hover:text-white hover:border-primary-500 transition-colors duration-300 transform hover:-translate-y-1 shadow-sm hover:shadow-xl w-full sm:w-auto">
                    View My Photos
                </a>
            </div>
        </div>
    </div>
</div>