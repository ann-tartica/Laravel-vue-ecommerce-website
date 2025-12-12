<template>
  <div class="bg-background min-h-screen">
    <Navigation />
    <slot />
    <!-- Footer -->
    <footer class="border-t border-border bg-gray-50/50">
      <div class="max-w-screen-2xl mx-auto px-6 lg:px-12 py-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
          <!-- Brand -->
          <div>
            <p class="font-serif text-lg tracking-[0.1em] mb-4">MAÉR</p>
            <p class="font-sans text-xs text-muted-foreground leading-relaxed">
              A vintage archive of one-of-a-kind, high-fashion pieces crafted in Paris.
            </p>
          </div>

          <!-- Shopping -->
          <div>
            <p class="font-serif text-sm tracking-widest mb-4">Shop</p>
            <ul class="space-y-2">
              <li>
                <Link
                  href="/products"
                  class="font-sans text-xs text-muted-foreground hover:text-foreground transition-colors"
                >
                  Collections
                </Link>
              </li>
              <li>
                <Link
                  href="/cart"
                  class="font-sans text-xs text-muted-foreground hover:text-foreground transition-colors"
                >
                  Cart
                </Link>
              </li>
            </ul>
          </div>

          <!-- Company -->
          <div>
            <p class="font-serif text-sm tracking-widest mb-4">Company</p>
            <ul class="space-y-2">
              <li>
                <Link
                  href="/about"
                  class="font-sans text-xs text-muted-foreground hover:text-foreground transition-colors"
                >
                  About
                </Link>
              </li>
              <li>
                <Link
                  href="/contact"
                  class="font-sans text-xs text-muted-foreground hover:text-foreground transition-colors"
                >
                  Contact
                </Link>
              </li>
            </ul>
          </div>

          <!-- Contact -->
          <div>
            <p class="font-serif text-sm tracking-widest mb-4">Contact</p>
            <ul class="space-y-2">
              <li>
                <a
                  href="mailto:hello@maer.fr"
                  class="font-sans text-xs text-muted-foreground hover:text-foreground transition-colors"
                >
                  hello@maer.fr
                </a>
              </li>
              <li>
                <a
                  href="tel:+33142861234"
                  class="font-sans text-xs text-muted-foreground hover:text-foreground transition-colors"
                >
                  +33 1 42 86 1234
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="border-t border-border pt-8">
          <div class="flex flex-col md:flex-row justify-between items-center">
            <p class="font-sans text-xs text-muted-foreground mb-4 md:mb-0">
              © 2025 Maér. All rights reserved.
            </p>
            <div class="flex gap-8">
              <a
                href="#"
                class="font-sans text-xs text-muted-foreground hover:text-foreground transition-colors"
              >
                Privacy Policy
              </a>
              <a
                href="#"
                class="font-sans text-xs text-muted-foreground hover:text-foreground transition-colors"
              >
                Terms of Service
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>

<script setup lang="ts">
import Navigation from '@/components/Navigation.vue'
import { Link } from '@inertiajs/vue3'
</script>

<style scoped></style>
