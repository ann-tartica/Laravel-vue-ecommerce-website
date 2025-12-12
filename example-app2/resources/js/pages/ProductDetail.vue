<template>
  <MainLayout>
    <div class="min-h-screen bg-background">
    <main class="pt-24">
      <!-- Product Section -->
      <section class="py-20 px-6 lg:px-12">
        <div class="max-w-screen-2xl mx-auto">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
            <!-- Product Image -->
            <div class="flex items-start sticky top-32">
              <img
                :src="product.image"
                :alt="product.name"
                class="w-full h-auto object-cover"
              />
            </div>

            <!-- Product Details -->
            <div class="py-6 lg:py-0">
              <p class="text-xs font-sans tracking-[0.4em] uppercase text-muted-foreground mb-4">
                {{ product.collection }}
              </p>
              <h1 class="font-serif text-4xl md:text-5xl tracking-wide mb-6">
                {{ product.name }}
              </h1>

              <!-- Price -->
              <p class="font-serif text-3xl mb-8">
                ₱{{ (product.price_cents / 100).toFixed(2) }}
              </p>

              <!-- Description -->
              <p class="font-sans text-base leading-relaxed text-foreground/80 mb-8">
                {{ product.description }}
              </p>

              <!-- Stock Status -->
              <div class="mb-8 pb-8 border-b border-border">
                <p class="text-sm font-sans text-muted-foreground mb-4">
                  SKU: {{ product.sku }}
                </p>
                <div
                  v-if="product.stock > 0"
                  class="inline-block px-4 py-2 bg-foreground text-background text-xs font-sans tracking-[0.2em] uppercase"
                >
                  {{ product.stock }} In Stock
                </div>
                <div
                  v-else
                  class="inline-block px-4 py-2 bg-muted-foreground text-background text-xs font-sans tracking-[0.2em] uppercase"
                >
                  Out of Stock
                </div>
              </div>

              <!-- Quantity and Add to Cart -->
              <div class="space-y-6 mb-12">
                <div class="flex items-center gap-6">
                  <label class="text-sm font-sans uppercase tracking-[0.2em] text-muted-foreground">
                    Quantity
                  </label>
                  <div class="flex items-center border border-border">
                    <button
                      @click="quantity = Math.max(1, quantity - 1)"
                      :disabled="product.stock === 0"
                      class="px-4 py-2 hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed transition-colors"
                    >
                      −
                    </button>
                    <span class="px-6 py-2 font-sans">{{ quantity }}</span>
                    <button
                      @click="quantity = Math.min(product.stock, quantity + 1)"
                      :disabled="product.stock === 0"
                      class="px-4 py-2 hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed transition-colors"
                    >
                      +
                    </button>
                  </div>
                </div>

                <button
                  @click="addToCart"
                  :disabled="product.stock === 0"
                  class="w-full py-4 bg-foreground text-background font-sans text-sm tracking-[0.2em] uppercase hover:bg-foreground/90 disabled:opacity-50 disabled:cursor-not-allowed transition-colors"
                >
                  Add to Cart
                </button>
              </div>

              <!-- Additional Information -->
              <div class="space-y-8 border-t border-border pt-12">
                <div>
                  <h3 class="font-serif text-lg mb-3">Craftsmanship</h3>
                  <p class="font-sans text-sm text-muted-foreground leading-relaxed">
                    This piece is meticulously handcrafted by our master artisans in Paris. Each detail has been carefully considered and executed to the highest standards of excellence.
                  </p>
                </div>

                <div>
                  <h3 class="font-serif text-lg mb-3">Material & Care</h3>
                  <p class="font-sans text-sm text-muted-foreground leading-relaxed">
                    Made from the finest materials sourced from prestigious European mills. We recommend professional dry cleaning to preserve the integrity and beauty of your Maér piece for years to come.
                  </p>
                </div>

                <div>
                  <h3 class="font-serif text-lg mb-3">Authenticity</h3>
                  <p class="font-sans text-sm text-muted-foreground leading-relaxed">
                    Each Maér garment comes with an authenticity certificate and is numbered to ensure its singularity. This is a one-of-a-kind piece that will never be replicated.
                  </p>
                </div>
              </div>

              <!-- Navigation -->
              <div class="pt-12 border-t border-border">
                <Link
                  href="/products"
                  class="text-sm font-sans tracking-[0.2em] uppercase text-foreground/60 hover:text-foreground transition-colors"
                >
                  ← Back to Collections
                </Link>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Related Products -->
      <section class="py-20 px-6 lg:px-12 border-t border-border bg-gray-50/50">
        <div class="max-w-screen-2xl mx-auto">
          <h2 class="font-serif text-3xl md:text-4xl tracking-wide mb-12 text-center">
            More from {{ product.collection }}
          </h2>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
            <div
              v-for="relatedProduct in relatedProducts"
              :key="relatedProduct.id"
              class="group"
            >
              <div class="relative overflow-hidden bg-gray-100 mb-6">
                <img
                  :src="relatedProduct.image"
                  :alt="relatedProduct.name"
                  class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500"
                />
              </div>
              <Link
                :href="`/products/${relatedProduct.slug}`"
                class="block"
              >
                <h3 class="font-serif text-lg md:text-xl tracking-wide mb-2 group-hover:text-accent transition-colors">
                  {{ relatedProduct.name }}
                </h3>
              </Link>
              <p class="font-serif text-base">
                ₱{{ (relatedProduct.price_cents / 100).toFixed(2) }}
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
import { ref } from 'vue'
import { Link, useForm } from '@inertiajs/vue3'
import MainLayout from '@/layouts/MainLayout.vue'
import { useCart } from '@/stores/cartStore'

const quantity = ref(1)
const { addToCart: addToCartStore } = useCart()

const product = {
  id: 1,
  name: 'Ethereal Evening Gown',
  slug: 'ethereal-evening-gown',
  collection: 'Ethereal',
  description: 'A breathtaking silk chiffon gown with hand-embroidered silk flowers cascading down the bodice. This ethereal masterpiece represents the epitome of feminine grace, designed to be worn only once in a lifetime. The delicate embroidery is executed entirely by hand, with each stitch representing the dedication of our master artisans. The gown features a dramatic sweep train and is finished with the finest French seams.',
  price_cents: 450000,
  stock: 1,
  sku: 'MAE-ETH-001',
  image: 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1200&h=1600&fit=crop'
}

const relatedProducts = [
  {
    id: 7,
    name: 'Ethereal Embroidered Bodice',
    slug: 'ethereal-embroidered-bodice',
    price_cents: 285000,
    image: 'https://images.unsplash.com/photo-1595521624268-5ff9caf05a0c?w=600&h=800&fit=crop'
  },
  {
    id: 4,
    name: 'Ethereal Cape Coat',
    slug: 'ethereal-cape-coat',
    price_cents: 520000,
    image: 'https://images.unsplash.com/photo-1539533057592-4ee42816e25c?w=600&h=800&fit=crop'
  },
  {
    id: 10,
    name: 'Ethereal Tulle Skirt',
    slug: 'ethereal-tulle-skirt',
    price_cents: 310000,
    image: 'https://images.unsplash.com/photo-1595604643374-e24f7c3b3d48?w=600&h=800&fit=crop'
  }
]

const addToCart = () => {
  addToCartStore({
    id: product.id,
    name: product.name,
    price_cents: product.price_cents,
    image: product.image
  }, quantity.value)
  alert(`Added ${quantity.value} ${product.name} to cart!`)
  quantity.value = 1
}
</script>

<style scoped>
.sticky {
  position: sticky;
}

@media (max-width: 1024px) {
  .sticky {
    position: relative;
  }
}
</style>
