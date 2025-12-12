@extends('layouts.maer')

@section('content')
<main class="pt-24">
  {{-- Full Screen Hero Section --}}
  <section class="relative w-full h-screen flex items-center justify-center overflow-hidden pt-20">
    <div class="absolute inset-0 z-0">
      <img
        src="https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=1200&h=1600&fit=crop"
        alt="Maér Collection"
        class="w-full h-full object-cover"
      />
      <div class="absolute inset-0 bg-black/20"></div>
    </div>
    <div class="relative z-10 text-center max-w-4xl px-6 lg:px-12">
      <p class="text-xs font-sans tracking-[0.3em] uppercase text-white/80 mb-6">
        Autumn 2024
      </p>
      <h1 class="font-serif text-7xl md:text-8xl lg:text-9xl tracking-tight mb-8 text-white leading-tight">
        One of a Kind
      </h1>
      <p class="font-sans text-base text-white/70 max-w-2xl mx-auto leading-relaxed mb-12">
        Discover pieces crafted with an unrelenting commitment to excellence and artisanal beauty.
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="{{ route('products.index') }}" class="inline-block px-8 py-3 bg-black text-white font-sans text-xs tracking-[0.15em] uppercase hover:bg-black/80 transition-colors duration-300">
          Explore Collection
        </a>
        <a href="{{ route('about') }}" class="inline-block px-8 py-3 border border-white text-white font-sans text-xs tracking-[0.15em] uppercase hover:bg-white hover:text-black transition-colors duration-300">
          The Atelier
        </a>
      </div>
    </div>
    <div class="absolute bottom-8 z-10 flex flex-col items-center">
      <p class="text-xs font-sans tracking-[0.2em] uppercase text-white/60 mb-2">Scroll</p>
      <div class="w-px h-6 bg-white/60 animate-pulse"></div>
    </div>
  </section>

  {{-- Collections --}}
  <section class="px-6 lg:px-12 pb-40">
    <div class="max-w-screen-2xl mx-auto space-y-40">
      @php
        $collections = [
          [
            'id' => 1,
            'name' => 'Ethereal',
            'description' => 'Sculptural silhouettes in ivory, embodying pure elegance and timeless grace.',
            'image' => 'https://yourdomain.com/images/collection1.jpg',
            'href' => '#',
            'products' => [
              ['name' => 'Ivory Draped Gown', 'price' => '€8,500'],
              ['name' => 'Pearl Embroidered Cape', 'price' => '€4,200'],
              ['name' => 'Silk Organza Dress', 'price' => '€6,800'],
              ['name' => 'Cream Tailored Jacket', 'price' => '€3,600'],
            ],
          ],
          [
            'id' => 2,
            'name' => 'Nocturne',
            'description' => 'Tailored elegance with gold accents, for evenings of refined sophistication.',
            'image' => 'public/images/collection2.jpg',
            'href' => '#',
            'products' => [
              ['name' => 'Midnight Velvet Blazer', 'price' => '€3,900'],
              ['name' => 'Gold Threaded Trousers', 'price' => '€2,800'],
              ['name' => 'Obsidian Evening Coat', 'price' => '€7,200'],
              ['name' => 'Noir Silk Camisole', 'price' => '€1,800'],
            ],
          ],
          [
            'id' => 3,
            'name' => 'Passion',
            'description' => 'Flowing silk in deep burgundy, celebrating bold femininity and artistic expression.',
            'image' => 'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=800&h=1200&fit=crop',
            'href' => '#',
            'products' => [
              ['name' => 'Burgundy Silk Wrap', 'price' => '€5,600'],
              ['name' => 'Crimson Pleated Skirt', 'price' => '€3,400'],
              ['name' => 'Ruby Embellished Bodice', 'price' => '€4,800'],
              ['name' => 'Scarlet Evening Gown', 'price' => '€9,200'],
            ],
          ],
        ];
      @endphp

      @foreach($collections as $index => $collection)
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center {{ $index % 2 === 1 ? 'lg:flex-row-reverse' : '' }} reveal-up">
          {{-- Image --}}
          <div class="{{ $index % 2 === 1 ? 'lg:order-2' : '' }}">
            <a href="{{ $collection['href'] }}" class="group block">
              <div class="aspect-[3/4] overflow-hidden bg-muted">
                <img
                  src="{{ $collection['image'] }}"
                  alt="{{ $collection['name'] }}"
                  class="w-full h-full object-cover transition-transform duration-700 ease-elegant group-hover:scale-105"
                />
              </div>
            </a>
          </div>

          {{-- Content --}}
          <div class="{{ $index % 2 === 1 ? 'lg:order-1' : '' }}">
            <p class="text-xs font-sans tracking-[0.4em] uppercase text-muted-foreground mb-6">
              Collection 0{{ $collection['id'] }}
            </p>
            <h2 class="font-serif text-5xl md:text-6xl tracking-tight mb-8">
              {{ $collection['name'] }}
            </h2>
            <p class="font-sans text-lg text-foreground/70 mb-12 max-w-lg leading-relaxed">
              {{ $collection['description'] }}
            </p>

            {{-- Products --}}
            <div class="space-y-6 border-t border-border pt-10">
              <p class="text-xs font-sans tracking-[0.2em] uppercase text-muted-foreground mb-8">
                Featured Pieces
              </p>
              @foreach($collection['products'] as $product)
                <a
                  href="#"
                  class="flex justify-between items-center py-4 group/product hover:pl-4 transition-all duration-300 border-b border-border/30"
                >
                  <span class="text-base font-sans text-foreground/80 group-hover/product:text-foreground transition-colors duration-300">
                    {{ $product['name'] }}
                  </span>
                  <span class="text-base font-sans tracking-wide text-muted-foreground">
                    {{ $product['price'] }}
                  </span>
                </a>
              @endforeach
            </div>

            <a
              href="{{ $collection['href'] }}"
              class="inline-block mt-12 text-sm font-sans tracking-[0.3em] uppercase border-b border-foreground pb-3 hover:text-muted-foreground hover:border-muted-foreground transition-colors duration-300"
            >
              View Collection
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </section>
</main>

@endsection
