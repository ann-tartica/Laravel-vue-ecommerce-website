<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Maér - Archival Couture </title>
    <meta name="description" content="Discover Maér's exclusive collection of one-of-a-kind haute couture pieces. Each garment is a singular work of art, crafted with meticulous attention to detail." />
    <meta name="author" content="Maér" />
    <link rel="canonical" href="https://maer.com" />

    <meta property="og:title" content="Maér | One of a Kind Haute Couture" />
    <meta property="og:description" content="Discover Maér's exclusive collection of one-of-a-kind haute couture pieces. Each garment is a singular work of art." />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('public/images/col1.jpg') }}" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@MaerFashion" />
    <meta name="twitter:image" content="" />
    <link rel="stylesheet" href="{{ asset('css/maer.css') }}">
</head>
<body class="bg-background text-foreground antialiased">
    <header class="fixed top-0 left-0 right-0 z-50 bg-background/95 backdrop-blur-sm border-b border-border/20">
        <div class="max-w-screen-2xl mx-auto px-6 lg:px-12 py-4 flex items-center justify-between">
            <nav class="flex space-x-8">
                <a href="{{ route('products.index') }}" class="text-xs font-sans tracking-[0.15em] uppercase no-underline text-foreground hover:text-muted-foreground transition-colors duration-300">Collections</a>
                <a href="{{ route('about') }}" class="text-xs font-sans tracking-[0.15em] uppercase no-underline text-foreground hover:text-muted-foreground transition-colors duration-300">About</a>
                <a href="{{ route('contact') }}" class="text-xs font-sans tracking-[0.15em] uppercase no-underline text-foreground hover:text-muted-foreground transition-colors duration-300">Atelier</a>
            </nav>
            <a href="{{ route('home') }}" class="text-lg font-bold tracking-[0.2em] no-underline text-foreground font-serif absolute left-1/2 transform -translate-x-1/2">MAÉR</a>
            <div class="flex space-x-4 items-center">
                <button class="text-foreground hover:text-muted-foreground transition-colors duration-300">🔍</button>
                <a href="{{ route('cart.index') }}" class="text-foreground hover:text-muted-foreground transition-colors duration-300">🛍</a>
            </div>
        </div>
    </header>

    <main>
        @if(session('success'))
            <div class="p-3 rounded border bg-green-50 border-green-200 text-green-800 mb-4">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="p-3 rounded border bg-red-50 border-red-200 text-red-800 mb-4">{{ session('error') }}</div>
        @endif

        @yield('content')
    </main>

    <footer class="border-t border-border/30 py-8 mt-16">
        <div class="max-w-screen-2xl mx-auto px-6 lg:px-12">
            <p class="text-sm font-sans text-muted-foreground">© {{ date('Y') }} Maér — Archival Couture</p>
        </div>
    </footer>
</body>
</html>
