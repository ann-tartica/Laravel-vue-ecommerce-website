<template>
  <nav class="fixed top-0 left-0 right-0 z-50 bg-background/95 backdrop-blur border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 lg:px-12 py-6">
      <div class="flex items-center justify-between">
        <!-- Logo -->
        <Link
          href="/"
          class="flex-shrink-0"
        >
          <span class="font-serif text-2xl tracking-[0.1em] font-light">
            MAÉR
          </span>
        </Link>

        <!-- Center Navigation -->
        <div class="hidden md:flex items-center gap-12">
          <Link
            href="/"
            class="font-sans text-xs tracking-[0.2em] uppercase text-foreground/70 hover:text-foreground transition-colors"
          >
            Home
          </Link>
          <Link
            href="/products"
            class="font-sans text-xs tracking-[0.2em] uppercase text-foreground/70 hover:text-foreground transition-colors"
          >
            Collections
          </Link>
          <Link
            href="/about"
            class="font-sans text-xs tracking-[0.2em] uppercase text-foreground/70 hover:text-foreground transition-colors"
          >
            About
          </Link>
          <Link
            href="/contact"
            class="font-sans text-xs tracking-[0.2em] uppercase text-foreground/70 hover:text-foreground transition-colors"
          >
            Contact
          </Link>
        </div>

        <!-- Right Section - Cart and Mobile Menu -->
        <div class="flex items-center gap-6">
          <!-- Search Icon -->
          <button
            class="p-2 text-foreground/70 hover:text-foreground transition-colors"
            aria-label="Search"
          >
            <svg
              class="w-5 h-5"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.5"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
              ></path>
            </svg>
          </button>

          <!-- Cart Icon -->
          <Link
            href="/cart"
            class="relative p-2 text-foreground/70 hover:text-foreground transition-colors"
          >
            <svg
              class="w-5 h-5"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.5"
                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
              ></path>
            </svg>
            <span
              v-if="cartCount > 0"
              class="absolute -top-1 -right-1 w-4 h-4 bg-foreground text-background text-xs font-sans flex items-center justify-center rounded-full"
            >
              {{ cartCount }}
            </span>
          </Link>

          <!-- Mobile Menu Button -->
          <button
            @click="mobileMenuOpen = !mobileMenuOpen"
            class="md:hidden p-2 text-foreground/70 hover:text-foreground transition-colors"
            aria-label="Menu"
          >
            <svg
              v-if="!mobileMenuOpen"
              class="w-5 h-5"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.5"
                d="M4 6h16M4 12h16M4 18h16"
              ></path>
            </svg>
            <svg
              v-else
              class="w-5 h-5"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.5"
                d="M6 18L18 6M6 6l12 12"
              ></path>
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Menu -->
      <div
        v-if="mobileMenuOpen"
        class="md:hidden mt-6 pt-6 border-t border-border space-y-4"
      >
        <Link
          href="/"
          class="block font-sans text-xs tracking-[0.2em] uppercase text-foreground/70 hover:text-foreground transition-colors"
          @click="mobileMenuOpen = false"
        >
          Home
        </Link>
        <Link
          href="/products"
          class="block font-sans text-xs tracking-[0.2em] uppercase text-foreground/70 hover:text-foreground transition-colors"
          @click="mobileMenuOpen = false"
        >
          Collections
        </Link>
        <Link
          href="/about"
          class="block font-sans text-xs tracking-[0.2em] uppercase text-foreground/70 hover:text-foreground transition-colors"
          @click="mobileMenuOpen = false"
        >
          About
        </Link>
        <Link
          href="/contact"
          class="block font-sans text-xs tracking-[0.2em] uppercase text-foreground/70 hover:text-foreground transition-colors"
          @click="mobileMenuOpen = false"
        >
          Contact
        </Link>
      </div>
    </div>
  </nav>
</template>

<script setup lang="ts">
import { ref, onMounted } from 'vue'
import { Link } from '@inertiajs/vue3'
import { useCart } from '@/stores/cartStore'

const mobileMenuOpen = ref(false)
const { cartCount, initializeCart } = useCart()

onMounted(() => {
  initializeCart()
})
</script>

<style scoped>
nav {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.05);
}
</style>
