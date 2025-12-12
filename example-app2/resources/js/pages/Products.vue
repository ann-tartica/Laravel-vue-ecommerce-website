<template>
  <MainLayout>
    <div class="min-h-screen bg-background">
      <main class="pt-24">
      <!-- Hero Section -->
      <section class="relative h-[60vh] flex items-center justify-center overflow-hidden reveal-up">
        <div class="absolute inset-0">
          <img
            src="https://i.pinimg.com/1200x/6a/ca/96/6aca9633eef1ebbe5f62443bc06b4b9a.jpg"
            alt="Maér Collections"
            class="w-full h-full object-cover"
          />
          <div class="absolute inset-0 bg-background/60"></div>
        </div>
        <div class="relative z-10 text-center px-6">
          <p class="text-xs font-sans tracking-[0.4em] uppercase text-foreground/80 mb-4">
            Explore
          </p>
          <h1 class="font-serif text-5xl md:text-6xl lg:text-7xl tracking-tight">
            All Collections
          </h1>
        </div>
      </section>

      <!-- Products Grid -->
      <section class="py-20 px-6 lg:px-12">
        <div class="max-w-screen-2xl mx-auto">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-12">
            <div
              v-for="product in products"
              :key="product.id"
              class="group cursor-pointer fade-in"
            >
              <div class="relative overflow-hidden bg-gray-100 mb-6">
                <img
                  :src="product.image"
                  :alt="product.name"
                  class="w-full h-96 object-cover group-hover:scale-105 transition-transform duration-500"
                />
                <div
                  v-if="product.stock > 0"
                  class="absolute top-4 right-4 bg-foreground text-background px-4 py-2 text-xs font-sans tracking-[0.2em] uppercase"
                >
                  In Stock
                </div>
                <div
                  v-else
                  class="absolute top-4 right-4 bg-muted-foreground text-background px-4 py-2 text-xs font-sans tracking-[0.2em] uppercase"
                >
                  Unavailable
                </div>
              </div>
              <Link
                :href="`/products/${product.slug}`"
                class="block"
              >
                <h3 class="font-serif text-xl md:text-2xl tracking-wide mb-2 group-hover:text-accent transition-colors">
                  {{ product.name }}
                </h3>
              </Link>
              <p class="font-sans text-sm text-muted-foreground line-clamp-2 mb-4">
                {{ product.description }}
              </p>
              <div class="flex items-center justify-between">
                <span class="font-serif text-lg">
                  ₱{{ (product.price_cents / 100).toFixed(2) }}
                </span>
                <span class="text-xs font-sans text-muted-foreground">
                  Stock: {{ product.stock }}
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>
      </main>
    </div>
  </MainLayout>
</template>

<script setup lang="ts">
import { usePage } from '@inertiajs/vue3'
import { Link } from '@inertiajs/vue3'
import MainLayout from '@/layouts/MainLayout.vue'

const page = usePage()

const products = [
  {
    id: 1,
    name: 'Aurora Vesper',
    slug: 'aurora vesper',
    description: 'A breathtaking silk chiffon gown with hand-embroidered silk flowers cascading down the bodice.',
    price_cents: 450000,
    stock: 1,
    image: 'https://i.pinimg.com/1200x/bd/da/bf/bddabfe61dc30bc271e75c9d60098b3e.jpg',
    collection: 'Ethereal'
  },
  {
    id: 2,
    name: 'Joctuerne Cocktail Dress',
    slug: 'joctuerne-cocktail-dress',
    description: 'A sculptural jersey dress with asymmetrical draping and subtle silver beadwork.',
    price_cents: 320000,
    stock: 1,
    image: 'https://i.pinimg.com/736x/d7/ea/3b/d7ea3b4093e8753d1b8b93200a2b37f8.jpg',
    collection: 'Nocturne'
  },
  {
    id: 3,
    name: 'Lunar Ecstasy',
    slug: 'lunar ecstasy',
    description: 'Pure charmeuse silk blouse with intricate hand-stitched details and mother-of-pearl buttons.',
    price_cents: 185000,
    stock: 1,
    image: 'https://i.pinimg.com/736x/f6/29/20/f62920b1aacab12347df6665d23f983b.jpg',
    collection: 'Passion'
  },
  {
    id: 4,
    name: 'Emerald Canopy',
    slug: 'emerald canopy',
    description: 'A dramatic wool and silk blend cape coat with hand-dyed lining and bone toggle closures.',
    price_cents: 520000,
    stock: 1,
    image: 'https://i.pinimg.com/736x/24/98/d4/2498d4d6982548548113f36da2417212.jpg',
    collection: 'Ethereal'
  },
  {
    id: 5,
    name: 'The Phoenix Ascent',
    slug: 'the phoenix ascent',
    description: 'A precisely tailored wool jacket with hand-cut lapels and custom button detailing.',
    price_cents: 395000,
    stock: 1,
    image: 'https://i.pinimg.com/736x/24/f9/64/24f964d7e404b6f43b281f305ca41366.jpg',
    collection: 'Nocturne'
  },
  {
    id: 6,
    name: 'Passion Dress',
    slug: 'passion dress',
    description: 'A refined wool crepe skirt with concealed seaming and a subtle silk lining.',
    price_cents: 225000,
    stock: 1,
    image: 'https://i.pinimg.com/1200x/95/0d/73/950d735a1748cb484e511a29f86fd5eb.jpg',
    collection: 'Passion'
  },


]
</script>

<style scoped>
.fade-in {
  animation: fadeIn 0.8s cubic-bezier(0.25, 0.1, 0.25, 1) forwards;
}

.reveal-up {
  animation: revealUp 0.8s cubic-bezier(0.25, 0.1, 0.25, 1) forwards;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
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
