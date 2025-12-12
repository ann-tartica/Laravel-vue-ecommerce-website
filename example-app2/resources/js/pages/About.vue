<template>
  <MainLayout>
    <div class="min-h-screen bg-background">
    <main class="pt-24">
      <!-- Hero Section -->
      <section class="relative h-[70vh] flex items-center justify-center overflow-hidden reveal-up">
        <div class="absolute inset-0">
          <img
            src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=1200&h=800&fit=crop"
            alt="Maér Atelier"
            class="w-full h-full object-cover"
          />
          <div class="absolute inset-0 bg-background/60"></div>
        </div>
        <div class="relative z-10 text-center px-6">
          <p class="text-xs font-sans tracking-[0.4em] uppercase text-foreground/80 mb-4">
            Our Story
          </p>
          <h1 class="font-serif text-5xl md:text-6xl lg:text-7xl tracking-tight">
            About Maér
          </h1>
        </div>
      </section>

      <!-- Story Section -->
      <section class="py-24 px-6 lg:px-12">
        <div class="max-w-screen-lg mx-auto">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <div class="lg:col-span-4">
              <p class="text-xs font-sans tracking-[0.4em] uppercase text-muted-foreground mb-4">
                The Beginning
              </p>
              <h2 class="font-serif text-3xl md:text-4xl tracking-tight">
                Founded in Paris
              </h2>
            </div>
            <div class="lg:col-span-8 space-y-6">
              <p class="font-sans text-base leading-relaxed text-foreground/80">
                Maér was born from a singular vision: to create garments that exist as unique works of art. Founded in the heart of Paris in 2019, our maison represents the culmination of decades of expertise in haute couture craftsmanship.
              </p>
              <p class="font-sans text-base leading-relaxed text-foreground/80">
                Our founder, driven by an unwavering commitment to excellence, assembled a collective of master artisans whose skills have been passed down through generations. Together, they bring to life pieces that transcend fashion, becoming heirlooms of exceptional beauty.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Philosophy Section with Background -->
      <section class="relative py-32 px-6 lg:px-12 overflow-hidden">
        <div class="absolute inset-0">
          <img
            src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1200&h=800&fit=crop"
            alt="Maér craftsmanship"
            class="w-full h-full object-cover"
          />
          <div class="absolute inset-0 bg-background/90"></div>
        </div>
        <div class="relative z-10 max-w-screen-lg mx-auto text-center">
          <p class="text-xs font-sans tracking-[0.4em] uppercase text-muted-foreground mb-4">
            Our Philosophy
          </p>
          <h2 class="font-serif text-4xl md:text-5xl tracking-tight mb-12">
            The Art of Singularity
          </h2>
          <div class="max-w-2xl mx-auto space-y-6">
            <p class="font-sans text-base leading-relaxed text-foreground/80">
              At Maér, we reject the notion of mass production. Each garment we create is one of a kind—designed, crafted, and finished to exist as a singular expression of artistry. When you wear Maér, you wear something that exists nowhere else in the world.
            </p>
            <p class="font-sans text-base leading-relaxed text-foreground/80">
              Our process begins with the finest materials sourced from the most prestigious mills in Europe. Every fabric is selected not only for its quality but for its character—the way it drapes, catches light, and moves with the body.
            </p>
            <p class="font-sans text-base leading-relaxed text-foreground/80">
              From initial sketch to final stitch, each piece passes through the hands of our master artisans, who invest over 200 hours in bringing every creation to perfection.
            </p>
          </div>
        </div>
      </section>

      <!-- Values Section -->
      <section class="py-24 px-6 lg:px-12">
        <div class="max-w-screen-xl mx-auto">
          <div class="text-center mb-16">
            <p class="text-xs font-sans tracking-[0.4em] uppercase text-muted-foreground mb-4">
              Our Values
            </p>
            <h2 class="font-serif text-4xl md:text-5xl tracking-tight">
              What We Believe
            </h2>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-12 lg:gap-16">
            <div class="text-center">
              <div class="w-20 h-20 mx-auto mb-8 border border-foreground/20 flex items-center justify-center">
                <span class="font-serif text-3xl text-foreground/30">01</span>
              </div>
              <h3 class="font-serif text-2xl tracking-wide mb-4">Craftsmanship</h3>
              <p class="font-sans text-sm text-muted-foreground leading-relaxed">
                Every piece is meticulously handcrafted by master artisans who have dedicated their lives to perfecting their craft.
              </p>
            </div>

            <div class="text-center">
              <div class="w-20 h-20 mx-auto mb-8 border border-foreground/20 flex items-center justify-center">
                <span class="font-serif text-3xl text-foreground/30">02</span>
              </div>
              <h3 class="font-serif text-2xl tracking-wide mb-4">Uniqueness</h3>
              <p class="font-sans text-sm text-muted-foreground leading-relaxed">
                No two pieces are alike. Each garment is designed as a singular work of art, never to be replicated.
              </p>
            </div>

            <div class="text-center">
              <div class="w-20 h-20 mx-auto mb-8 border border-foreground/20 flex items-center justify-center">
                <span class="font-serif text-3xl text-foreground/30">03</span>
              </div>
              <h3 class="font-serif text-2xl tracking-wide mb-4">Sustainability</h3>
              <p class="font-sans text-sm text-muted-foreground leading-relaxed">
                By creating pieces meant to last a lifetime, we stand against the disposable nature of fast fashion.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Stats Section -->
      <section class="py-20 px-6 lg:px-12 border-t border-border">
        <div class="max-w-screen-xl mx-auto">
          <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
              <p class="font-serif text-4xl md:text-5xl mb-2">12</p>
              <p class="text-xs font-sans tracking-[0.2em] uppercase text-muted-foreground">
                Master Artisans
              </p>
            </div>
            <div>
              <p class="font-serif text-4xl md:text-5xl mb-2">200+</p>
              <p class="text-xs font-sans tracking-[0.2em] uppercase text-muted-foreground">
                Hours Per Piece
              </p>
            </div>
            <div>
              <p class="font-serif text-4xl md:text-5xl mb-2">1</p>
              <p class="text-xs font-sans tracking-[0.2em] uppercase text-muted-foreground">
                Of Each Design
              </p>
            </div>
            <div>
              <p class="font-serif text-4xl md:text-5xl mb-2">∞</p>
              <p class="text-xs font-sans tracking-[0.2em] uppercase text-muted-foreground">
                Dedication
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>
  </MainLayout>
</template>

<script setup lang="ts">
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
</style>
