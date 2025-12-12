<template>
  <MainLayout>
    <div class="min-h-screen bg-background">
      <main>
      <!-- Hero Section -->
      <section class="relative h-screen flex items-center justify-center overflow-hidden reveal-up">
        <div class="absolute inset-0">
          <img
            src="https://images.unsplash.com/photo-1495221259371-2da6df1ea4a0?w=1920&h=1080&fit=crop"
            alt="Maér - Vintage Archive Store"
            class="w-full h-full object-cover"
          />
          <div class="absolute inset-0 bg-background/50"></div>
        </div>

        <div class="relative z-10 text-center px-6 max-w-2xl">
          <h1 class="font-serif text-6xl md:text-7xl lg:text-8xl tracking-tight mb-8 leading-tight">
            Maér
          </h1>
          <p class="font-sans text-base md:text-lg tracking-wide text-foreground/90 mb-12">
            A vintage archive of one-of-a-kind, high-fashion pieces. Each garment is singular, irreplaceable, and crafted to transcend time.
          </p>
          <div class="flex flex-col md:flex-row gap-6 justify-center items-center">
            <Link
              href="/products"
              class="px-10 py-4 bg-foreground text-background font-sans text-sm tracking-[0.2em] uppercase hover:bg-foreground/90 transition-colors"
            >
              Explore Collection
            </Link>
            <Link
              href="/about"
              class="px-10 py-4 border border-foreground text-foreground font-sans text-sm tracking-[0.2em] uppercase hover:bg-foreground/10 transition-colors"
            >
              The Atelier
            </Link>
          </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-10 animate-bounce">
          <div class="flex flex-col items-center gap-2">
            <span class="text-xs font-sans tracking-[0.2em] uppercase text-foreground/60">
              Scroll
            </span>
            <svg
              class="w-5 h-5 text-foreground/60"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 14l-7 7m0 0l-7-7m7 7V3"
              ></path>
            </svg>
          </div>
        </div>
      </section>

      <!-- Collections Preview Section -->
      <section class="py-24 px-6 lg:px-12 border-t border-border">
        <div class="max-w-screen-2xl mx-auto">
          <div class="text-center mb-20">
            <p class="text-xs font-sans tracking-[0.4em] uppercase text-muted-foreground mb-4">
              Curated Collections
            </p>
            <h2 class="font-serif text-5xl md:text-6xl tracking-tight">
              Archive Selection
            </h2>
          </div>

          <!-- Collection Cards -->
          <div class="space-y-20">
            <!-- Ethereal Collection -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
              <div class="order-2 lg:order-1">
                <img
                  src="/images/ethereal.jpg"
                  alt="Ethereal Collection"
                  class="w-full h-auto max-h-[520px] object-cover hover:scale-105 transition-transform duration-500"
                />
              </div>
              <div class="order-1 lg:order-2 py-8">
                <p class="text-xs font-sans tracking-[0.4em] uppercase text-muted-foreground mb-4">
                  Collection
                </p>
                <h3 class="font-serif text-4xl md:text-5xl tracking-wide mb-6">
                  Ethereal
                </h3>
                <p class="font-sans text-base leading-relaxed text-foreground/80 mb-8">
                  Pieces that float between dreams and reality. Ethereal garments are characterized by their delicate construction, flowing silhouettes, and whimsical details. Each piece celebrates the beauty of translucence and lightness.
                </p>
                <Link
                  href="/products"
                  class="inline-block px-8 py-3 border border-foreground text-foreground font-sans text-sm tracking-[0.2em] uppercase hover:bg-foreground hover:text-background transition-colors"
                >
                  View Collection
                </Link>
              </div>
            </div>

            <!-- Nocturne Collection -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
              <div>
                <img
                  src="/images/collection2.jpg"
                  alt="Nocturne Collection"
                  class="w-full h-auto max-h-[520px] object-cover hover:scale-105 transition-transform duration-500"
                />
              </div>
              <div class="py-8">
                <p class="text-xs font-sans tracking-[0.4em] uppercase text-muted-foreground mb-4">
                  Collection
                </p>
                <h3 class="font-serif text-4xl md:text-5xl tracking-wide mb-6">
                  Nocturne
                </h3>
                <p class="font-sans text-base leading-relaxed text-foreground/80 mb-8">
                  The poetry of darkness. Nocturne pieces embody sophistication through dark, moody tones and precise tailoring. These garments are designed for those who move with intention, commanding attention through subtlety rather than volume.
                </p>
                <Link
                  href="/products"
                  class="inline-block px-8 py-3 border border-foreground text-foreground font-sans text-sm tracking-[0.2em] uppercase hover:bg-foreground hover:text-background transition-colors"
                >
                  View Collection
                </Link>
              </div>
            </div>

            <!-- Passion Collection -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
              <div class="order-2 lg:order-1">
                <img
                  src="/images/collection1.jpg"
                  alt="Passion Collection"
                  class="w-full h-auto max-h-[520px] object-cover hover:scale-105 transition-transform duration-500"
                />
              </div>
              <div class="order-1 lg:order-2 py-8">
                <p class="text-xs font-sans tracking-[0.4em] uppercase text-muted-foreground mb-4">
                  Collection
                </p>
                <h3 class="font-serif text-4xl md:text-5xl tracking-wide mb-6">
                  Passion
                </h3>
                <p class="font-sans text-base leading-relaxed text-foreground/80 mb-8">
                  A celebration of sensuality and confidence. Passion garments are bold, form-fitting, and unapologetically elegant. They are for those who understand that true beauty comes from within and radiates outward.
                </p>
                <Link
                  href="/products"
                  class="inline-block px-8 py-3 border border-foreground text-foreground font-sans text-sm tracking-[0.2em] uppercase hover:bg-foreground hover:text-background transition-colors"
                >
                  View Collection
                </Link>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA Section -->
      <section class="py-20 px-6 lg:px-12 bg-gray-50/50 border-t border-border">
        <div class="max-w-screen-lg mx-auto text-center">
          <p class="text-xs font-sans tracking-[0.4em] uppercase text-muted-foreground mb-6">
            Experience Excellence
          </p>
          <h2 class="font-serif text-4xl md:text-5xl tracking-tight mb-8">
            Ready to discover your piece?
          </h2>
          <Link
            href="/products"
            class="inline-block px-12 py-4 bg-foreground text-background font-sans text-sm tracking-[0.2em] uppercase hover:bg-foreground/90 transition-colors"
          >
            Start Exploring
          </Link>
        </div>
      </section>
    </main>
    </div>
  </MainLayout>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import MainLayout from '@/layouts/MainLayout.vue'
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

@keyframes bounce {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-8px);
  }
}

.animate-bounce {
  animation: bounce 2s infinite;
}
</style>
