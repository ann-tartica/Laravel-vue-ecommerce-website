<template>
  <MainLayout>
    <div class="min-h-screen bg-background">
    <main class="pt-24">
      <!-- Header -->
      <section class="relative h-[40vh] flex items-center justify-center overflow-hidden reveal-up">
        <div class="relative z-10 text-center px-6">
          <h1 class="font-serif text-5xl md:text-6xl tracking-tight">
            Shopping Cart
          </h1>
        </div>
      </section>

      <!-- Cart Content -->
      <section class="py-20 px-6 lg:px-12">
        <div class="max-w-screen-2xl mx-auto">
          <div v-if="cartItems.length === 0" class="text-center py-20">
            <p class="font-serif text-3xl mb-6">Your cart is empty</p>
            <p class="font-sans text-base text-muted-foreground mb-8">
              Explore our collections to find the perfect piece
            </p>
            <Link
              href="/products"
              class="inline-block px-8 py-3 bg-foreground text-background font-sans text-sm tracking-[0.2em] uppercase hover:bg-foreground/90 transition-colors"
            >
              Continue Shopping
            </Link>
          </div>

          <div v-else class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Cart Items -->
            <div class="lg:col-span-2">
              <div class="border-b border-border pb-6 mb-6">
                <div class="grid grid-cols-12 gap-4 mb-6">
                  <div class="col-span-6">
                    <p class="text-xs font-sans tracking-[0.2em] uppercase text-muted-foreground">
                      Item
                    </p>
                  </div>
                  <div class="col-span-2">
                    <p class="text-xs font-sans tracking-[0.2em] uppercase text-muted-foreground">
                      Quantity
                    </p>
                  </div>
                  <div class="col-span-2">
                    <p class="text-xs font-sans tracking-[0.2em] uppercase text-muted-foreground">
                      Price
                    </p>
                  </div>
                  <div class="col-span-2">
                    <p class="text-xs font-sans tracking-[0.2em] uppercase text-muted-foreground">
                      Total
                    </p>
                  </div>
                </div>
              </div>

              <div
                v-for="item in cartItems"
                :key="item.id"
                class="border-b border-border py-6 grid grid-cols-12 gap-4 items-start"
              >
                <!-- Item Info -->
                <div class="col-span-6">
                  <img
                    :src="item.image"
                    :alt="item.name"
                    class="w-full h-32 object-cover mb-3"
                  />
                  <Link
                    :href="`/products/${item.slug}`"
                    class="block font-serif text-base md:text-lg tracking-wide hover:text-accent transition-colors mb-2"
                  >
                    {{ item.name }}
                  </Link>
                  <p class="text-xs font-sans text-muted-foreground">
                    SKU: {{ item.sku }}
                  </p>
                </div>

                <!-- Quantity -->
                <div class="col-span-2">
                  <div class="flex items-center border border-border w-fit">
                    <button
                      @click="updateQuantity(item.id, item.quantity - 1)"
                      class="px-3 py-2 hover:bg-gray-50 transition-colors"
                    >
                      −
                    </button>
                    <span class="px-4 py-2 font-sans text-sm">{{ item.quantity }}</span>
                    <button
                      @click="updateQuantity(item.id, item.quantity + 1)"
                      class="px-3 py-2 hover:bg-gray-50 transition-colors"
                    >
                      +
                    </button>
                  </div>
                </div>

                <!-- Price -->
                <div class="col-span-2">
                  <p class="font-serif text-base">
                    ₱{{ (item.price_cents / 100).toFixed(2) }}
                  </p>
                </div>

                <!-- Total -->
                <div class="col-span-2 flex items-center justify-between">
                  <p class="font-serif text-base font-semibold">
                    ₱{{ ((item.price_cents * item.quantity) / 100).toFixed(2) }}
                  </p>
                  <button
                    @click="removeItem(item.id)"
                    class="text-xs font-sans text-muted-foreground hover:text-accent transition-colors ml-2"
                  >
                    Remove
                  </button>
                </div>
              </div>
            </div>

            <!-- Cart Summary -->
            <div class="lg:col-span-1">
              <div class="border border-border p-8 sticky top-32">
                <h2 class="font-serif text-2xl tracking-wide mb-8">Order Summary</h2>

                <div class="space-y-4 mb-6 pb-6 border-b border-border">
                  <div class="flex justify-between">
                    <span class="font-sans text-sm">Subtotal</span>
                    <span class="font-serif">₱{{ subtotal.toFixed(2) }}</span>
                  </div>
                  <div class="flex justify-between">
                    <span class="font-sans text-sm">Shipping</span>
                    <span class="font-serif">₱{{ shipping.toFixed(2) }}</span>
                  </div>
                  <div
                    v-if="tax > 0"
                    class="flex justify-between"
                  >
                    <span class="font-sans text-sm">Tax</span>
                    <span class="font-serif">₱{{ tax.toFixed(2) }}</span>
                  </div>
                </div>

                <div class="flex justify-between mb-8">
                  <span class="font-serif text-lg">Total</span>
                  <span class="font-serif text-xl">₱{{ total.toFixed(2) }}</span>
                </div>

                <button
                  class="w-full py-4 bg-foreground text-background font-sans text-sm tracking-[0.2em] uppercase hover:bg-foreground/90 transition-colors mb-4"
                >
                  Proceed to Checkout
                </button>

                <Link
                  href="/products"
                  class="block text-center text-xs font-sans tracking-[0.2em] uppercase text-muted-foreground hover:text-foreground transition-colors"
                >
                  Continue Shopping
                </Link>
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
import { ref, computed } from 'vue'
import { Link } from '@inertiajs/vue3'
import MainLayout from '@/layouts/MainLayout.vue'

interface CartItem {
  id: number
  name: string
  slug: string
  price_cents: number
  quantity: number
  sku: string
  image: string
}

const cartItems = ref<CartItem[]>([
  {
    id: 1,
    name: 'Ethereal Evening Gown',
    slug: 'ethereal-evening-gown',
    price_cents: 450000,
    quantity: 1,
    sku: 'MAE-ETH-001',
    image: 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=500&fit=crop'
  },
  {
    id: 5,
    name: 'Nocturne Tailored Jacket',
    slug: 'nocturne-tailored-jacket',
    price_cents: 395000,
    quantity: 1,
    sku: 'MAE-NOC-005',
    image: 'https://images.unsplash.com/photo-1434389896821-8148199shake1?w=400&h=500&fit=crop'
  }
])

const subtotal = computed(() => {
  return cartItems.value.reduce((sum, item) => sum + (item.price_cents * item.quantity), 0) / 100
})

const shipping = computed(() => {
  return subtotal.value > 1000 ? 0 : 25
})

const tax = computed(() => {
  return subtotal.value * 0.2
})

const total = computed(() => {
  return subtotal.value + shipping.value + tax.value
})

const updateQuantity = (id: number, newQuantity: number) => {
  if (newQuantity <= 0) {
    removeItem(id)
    return
  }
  const item = cartItems.value.find(i => i.id === id)
  if (item) {
    item.quantity = newQuantity
  }
}

const removeItem = (id: number) => {
  cartItems.value = cartItems.value.filter(item => item.id !== id)
}
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

.sticky {
  position: sticky;
}

@media (max-width: 1024px) {
  .sticky {
    position: relative;
  }
}
</style>
