<div x-data="{ modalOpen: false, selectedImage: '', selectedTitle: '' }">
    <!-- Category Filter -->
    <div class="flex flex-wrap justify-center gap-4 mb-12">
        @foreach($this->categories as $category)
            <button 
                wire:click="setCategory('{{ $category }}')"
                class="px-6 py-2 rounded-full font-medium transition-all duration-300 {{ $selectedCategory === $category ? 'bg-primary-500 text-white shadow-md' : 'bg-white text-slate-600 border border-slate-200 hover:border-primary-500 hover:text-primary-500' }}"
            >
                {{ $category }}
            </button>
        @endforeach
    </div>

    <!-- Photo Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($this->filteredPhotos as $photo)
            <div 
                class="group relative aspect-[4/5] overflow-hidden rounded-2xl cursor-pointer bg-slate-200"
                x-on:click="modalOpen = true; selectedImage = '{{ $photo['url'] }}'; selectedTitle = '{{ addslashes($photo['title']) }}'"
            >
                <img src="{{ $photo['url'] }}" alt="{{ $photo['title'] }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" loading="lazy">
                
                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <p class="text-white font-bold text-lg mb-1 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">{{ $photo['title'] }}</p>
                        <p class="text-slate-300 text-sm transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">{{ $photo['category'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Image Modal (Alpine.js) -->
    <div 
        x-show="modalOpen" 
        x-cloak
        class="fixed inset-0 z-[100] flex items-center justify-center bg-slate-900/90 backdrop-blur-sm p-4 sm:p-8"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <button x-on:click="modalOpen = false" class="absolute top-6 right-6 text-white/70 hover:text-white bg-slate-800/50 hover:bg-slate-800 rounded-full p-2 transition-colors">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
        
        <div 
            class="relative max-w-5xl w-full max-h-[90vh] flex flex-col items-center"
            x-on:click.away="modalOpen = false"
            x-transition:enter="transition ease-out duration-300 delay-100"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
        >
            <img x-bind:src="selectedImage" x-bind:alt="selectedTitle" class="max-w-full max-h-[85vh] object-contain rounded-lg shadow-2xl">
            <p class="mt-4 text-white text-xl font-medium tracking-wide" x-text="selectedTitle"></p>
        </div>
    </div>
</div>
