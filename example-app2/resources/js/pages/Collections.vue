<template>
  <MainLayout>
    <div class="min-h-screen bg-background">
    <!-- Hero Section -->
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
          <Link href="/products" class="inline-block px-8 py-3 bg-black text-white font-sans text-xs tracking-[0.15em] uppercase hover:bg-black/80 transition-colors duration-300">
            Explore Collection
          </Link>
          <Link href="/about" class="inline-block px-8 py-3 border border-white text-white font-sans text-xs tracking-[0.15em] uppercase hover:bg-white hover:text-black transition-colors duration-300">
            The Atelier
          </Link>
        </div>
      </div>
      <div class="absolute bottom-8 z-10 flex flex-col items-center">
        <p class="text-xs font-sans tracking-[0.2em] uppercase text-white/60 mb-2">Scroll</p>
        <div class="w-px h-6 bg-white/60 animate-pulse"></div>
      </div>
    </section>

    <!-- Collections Section -->
    <section class="px-6 lg:px-12 pb-40 bg-background">
      <div class="max-w-screen-2xl mx-auto space-y-40">
        <div v-for="(collection, index) in collections" :key="collection.id"
             :class="['grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center', index % 2 === 1 ? 'lg:flex-row-reverse' : '', 'reveal-up']">
          <!-- Image -->
          <div :class="[index % 2 === 1 ? 'lg:order-2' : '']">
            <Link :href="`/collections/${collection.slug}`" class="group block">
              <div class="aspect-[3/4] overflow-hidden bg-muted">
                <img
                  :src="collection.image"
                  :alt="collection.name"
                  class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                />
              </div>
            </Link>
          </div>

          <!-- Content -->
          <div :class="[index % 2 === 1 ? 'lg:order-1' : '']">
            <p class="text-xs font-sans tracking-[0.4em] uppercase text-muted-foreground mb-6">
              Collection 0{{ collection.id }}
            </p>
            <h2 class="font-serif text-5xl md:text-6xl tracking-tight mb-8">
              {{ collection.name }}
            </h2>
            <p class="font-sans text-lg text-foreground/70 mb-12 max-w-lg leading-relaxed">
              {{ collection.description }}
            </p>

            <!-- Products -->
            <div class="space-y-6 border-t border-border pt-10">
              <p class="text-xs font-sans tracking-[0.2em] uppercase text-muted-foreground mb-8">
                Featured Pieces
              </p>
              <Link v-for="product in collection.products" :key="product.name"
                    :href="`/collections/${collection.slug}/${product.slug}`"
                    class="flex justify-between items-center py-4 group/product hover:pl-4 transition-all duration-300 border-b border-border/30">
                <span class="text-base font-sans text-foreground/80 group-hover/product:text-foreground transition-colors duration-300">
                  {{ product.name }}
                </span>
                <span class="text-base font-sans tracking-wide text-muted-foreground">
                  {{ product.price }}
                </span>
              </Link>
            </div>

            <Link :href="`/collections/${collection.slug}`"
                  class="inline-block mt-12 text-sm font-sans tracking-[0.3em] uppercase border-b border-foreground pb-3 hover:text-muted-foreground hover:border-muted-foreground transition-colors duration-300">
              View Collection
            </Link>
          </div>
        </div>
      </div>
    </section>
    </div>
  </MainLayout>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import MainLayout from '@/layouts/MainLayout.vue'

const collections = [
  {
    id: 1,
    slug: 'ethereal',
    name: 'Ethereal',
    description: 'Sculptural silhouettes in ivory, embodying pure elegance and timeless grace.',
    image: 'https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=800&h=1200&fit=crop',
    products: [
      { name: 'Ivory Draped Gown', slug: 'ivory-draped-gown', price: '€8,500' },
      { name: 'Pearl Embroidered Cape', slug: 'pearl-embroidered-cape', price: '€4,200' },
      { name: 'Silk Organza Dress', slug: 'silk-organza-dress', price: '€6,800' },
      { name: 'Cream Tailored Jacket', slug: 'cream-tailored-jacket', price: '€3,600' },
    ],
  },
  {
    id: 2,
    slug: 'nocturne',
    name: 'Nocturne',
    description: 'Tailored elegance with gold accents, for evenings of refined sophistication.',
    image: 'https://images.unsplash.com/photo-1539008835657-9e8e9680c956?w=800&h=1200&fit=crop',
    products: [
      { name: 'Midnight Velvet Blazer', slug: 'midnight-velvet-blazer', price: '€3,900' },
      { name: 'Gold Threaded Trousers', slug: 'gold-threaded-trousers', price: '€2,800' },
      { name: 'Obsidian Evening Coat', slug: 'obsidian-evening-coat', price: '€7,200' },
      { name: 'Noir Silk Camisole', slug: 'noir-silk-camisole', price: '€1,800' },
    ],
  },
  {
    id: 3,
    slug: 'passion',
    name: 'Passion',
    description: 'Flowing silk in deep burgundy, celebrating bold femininity and artistic expression.',
    image: 'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=800&h=1200&fit=crop',
    products: [
      { name: 'Burgundy Silk Wrap', slug: 'burgundy-silk-wrap', price: '€5,600' },
      { name: 'Crimson Pleated Skirt', slug: 'crimson-pleated-skirt', price: '€3,400' },
      { name: 'Ruby Embellished Bodice', slug: 'ruby-embellished-bodice', price: '€4,800' },
      { name: 'Scarlet Evening Gown', slug: 'scarlet-evening-gown', price: '€9,200' },
    ],
  },
];
</script>

<style scoped>
.reveal-up {
  animation: revealUp 0.8s cubic-bezier(0.25, 0.1, 0.25, 1) forwards;
}

@keyframes revealUp {
  from {
    opacity: 0;
    transform: translateY(32px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>
