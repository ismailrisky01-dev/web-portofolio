<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Ismail Risky Rahmansyah - Product Designer & Developer' }}</title>

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

    <!-- Meta Tags for SEO -->
    <meta name="description" content="Portfolio of Ismail Risky Rahmansyah.">

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-background text-on-background font-body antialiased selection:bg-primary-container selection:text-on-primary-container">

    <!-- SideNavBar -->
    <nav class="fixed left-0 top-0 h-full w-[80px] md:w-[100px] border-r border-outline-variant/30 bg-background flex flex-col items-center py-12 gap-12 z-50">
        <div class="text-sm font-bold tracking-widest text-[#1c1b1b] [writing-mode:vertical-rl] rotate-180 flex-1 flex items-center justify-center">
            ISMAIL R. RAHMANSYAH
        </div>
        <div class="flex flex-col gap-8">
            <a href="#hero" title="Home" class="group flex flex-col items-center justify-center font-['Inter'] font-medium uppercase tracking-[0.05em] text-[12px] text-primary relative after:content-[''] after:absolute after:right-0 after:top-1/2 after:-translate-y-1/2 after:w-1 after:h-1 after:bg-primary after:rounded-full hover:text-primary transition-colors duration-300 active:scale-95 transition-transform duration-200">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">home</span>
                <span class="sr-only">Home</span>
            </a>
            <a href="#about" title="About" class="group flex flex-col items-center justify-center font-['Inter'] font-medium uppercase tracking-[0.05em] text-[12px] text-on-background/60 hover:text-primary transition-colors duration-300 active:scale-95 transition-transform duration-200">
                <span class="material-symbols-outlined">person</span>
                <span class="sr-only">About</span>
            </a>
            <a href="#featured-project" title="Product" class="group flex flex-col items-center justify-center font-['Inter'] font-medium uppercase tracking-[0.05em] text-[12px] text-on-background/60 hover:text-primary transition-colors duration-300 active:scale-95 transition-transform duration-200">
                <span class="material-symbols-outlined">deployed_code</span>
                <span class="sr-only">Product</span>
            </a>
            <a href="#photography" title="Gallery" class="group flex flex-col items-center justify-center font-['Inter'] font-medium uppercase tracking-[0.05em] text-[12px] text-on-background/60 hover:text-primary transition-colors duration-300 active:scale-95 transition-transform duration-200">
                <span class="material-symbols-outlined">photo_camera</span>
                <span class="sr-only">Gallery</span>
            </a>
            <a href="#contact" title="Contact" class="group flex flex-col items-center justify-center font-['Inter'] font-medium uppercase tracking-[0.05em] text-[12px] text-on-background/60 hover:text-primary transition-colors duration-300 active:scale-95 transition-transform duration-200">
                <span class="material-symbols-outlined">mail</span>
                <span class="sr-only">Contact</span>
            </a>
        </div>
    </nav>

    <!-- Main Content Canvas -->
    <main class="ml-[80px] md:ml-[100px] min-h-screen">
        {{ $slot }}
    </main>

    @livewireScripts
</body>

</html>