<div>
    @if (session()->has('message'))
        <div class="mb-6 bg-green-50 text-green-700 p-4 rounded-xl border border-green-200 flex items-center">
            <svg class="w-6 h-6 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span class="font-medium">{{ session('message') }}</span>
        </div>
    @endif

    <form wire:submit="submit" class="space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="name" class="block text-sm font-medium text-slate-700 mb-2">Name</label>
                <input 
                    wire:model="name" 
                    type="text" 
                    id="name" 
                    class="w-full px-4 py-3 rounded-xl border {{ $errors->has('name') ? 'border-red-300 focus:ring-red-500' : 'border-slate-200 focus:ring-primary-500 focus:border-primary-500' }} focus:outline-none focus:ring-2 transition-colors"
                    placeholder="John Doe"
                >
                @error('name') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Email</label>
                <input 
                    wire:model="email" 
                    type="email" 
                    id="email" 
                    class="w-full px-4 py-3 rounded-xl border {{ $errors->has('email') ? 'border-red-300 focus:ring-red-500' : 'border-slate-200 focus:ring-primary-500 focus:border-primary-500' }} focus:outline-none focus:ring-2 transition-colors"
                    placeholder="john@example.com"
                >
                @error('email') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>
        </div>

        <div>
            <label for="message" class="block text-sm font-medium text-slate-700 mb-2">Message</label>
            <textarea 
                wire:model="message" 
                id="message" 
                rows="4" 
                class="w-full px-4 py-3 rounded-xl border {{ $errors->has('message') ? 'border-red-300 focus:ring-red-500' : 'border-slate-200 focus:ring-primary-500 focus:border-primary-500' }} focus:outline-none focus:ring-2 transition-colors resize-none"
                placeholder="How can we help you?"
            ></textarea>
            @error('message') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        <button 
            type="submit" 
            class="w-full sm:w-auto px-8 py-4 bg-primary-500 text-white font-bold rounded-xl hover:bg-primary-600 transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transform hover:-translate-y-0.5"
            wire:loading.attr="disabled"
            wire:loading.class="opacity-75 cursor-not-allowed"
        >
            <span wire:loading.remove>Send Message</span>
            <span wire:loading>Sending...</span>
        </button>
    </form>
</div>
