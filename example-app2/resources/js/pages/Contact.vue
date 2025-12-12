<template>
  <MainLayout>
    <div class="min-h-screen bg-background">
    <main class="pt-24">
      <!-- Hero Section -->
      <section class="relative h-[50vh] flex items-center justify-center overflow-hidden reveal-up">
        <div class="relative z-10 text-center px-6">
          <p class="text-xs font-sans tracking-[0.4em] uppercase text-foreground/80 mb-4">
            Get in Touch
          </p>
          <h1 class="font-serif text-5xl md:text-6xl tracking-tight">
            Contact Maér
          </h1>
        </div>
      </section>

      <!-- Contact Content -->
      <section class="py-20 px-6 lg:px-12">
        <div class="max-w-screen-lg mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16">
          <!-- Contact Form -->
          <div>
            <h2 class="font-serif text-3xl tracking-wide mb-8">Send us a Message</h2>
            <form @submit.prevent="submitForm" class="space-y-6">
              <div>
                <label for="name" class="block text-xs font-sans tracking-[0.2em] uppercase text-muted-foreground mb-3">
                  Name
                </label>
                <input
                  id="name"
                  v-model="form.name"
                  type="text"
                  class="w-full px-4 py-3 border border-border focus:outline-none focus:ring-1 focus:ring-foreground transition-colors"
                  placeholder="Your name"
                  required
                />
              </div>

              <div>
                <label for="email" class="block text-xs font-sans tracking-[0.2em] uppercase text-muted-foreground mb-3">
                  Email
                </label>
                <input
                  id="email"
                  v-model="form.email"
                  type="email"
                  class="w-full px-4 py-3 border border-border focus:outline-none focus:ring-1 focus:ring-foreground transition-colors"
                  placeholder="your@email.com"
                  required
                />
              </div>

              <div>
                <label for="subject" class="block text-xs font-sans tracking-[0.2em] uppercase text-muted-foreground mb-3">
                  Subject
                </label>
                <input
                  id="subject"
                  v-model="form.subject"
                  type="text"
                  class="w-full px-4 py-3 border border-border focus:outline-none focus:ring-1 focus:ring-foreground transition-colors"
                  placeholder="How can we help?"
                  required
                />
              </div>

              <div>
                <label for="message" class="block text-xs font-sans tracking-[0.2em] uppercase text-muted-foreground mb-3">
                  Message
                </label>
                <textarea
                  id="message"
                  v-model="form.message"
                  rows="6"
                  class="w-full px-4 py-3 border border-border focus:outline-none focus:ring-1 focus:ring-foreground transition-colors resize-none"
                  placeholder="Tell us more about your inquiry..."
                  required
                ></textarea>
              </div>

              <button
                type="submit"
                class="w-full py-4 bg-foreground text-background font-sans text-sm tracking-[0.2em] uppercase hover:bg-foreground/90 transition-colors"
              >
                Send Message
              </button>
            </form>

            <div v-if="submitMessage" class="mt-6 p-4 bg-gray-50 border border-border">
              <p class="font-sans text-sm text-foreground">
                {{ submitMessage }}
              </p>
            </div>
          </div>

          <!-- Contact Information -->
          <div>
            <h2 class="font-serif text-3xl tracking-wide mb-8">Get in Touch</h2>

            <div class="space-y-12">
              <!-- Address -->
              <div>
                <p class="text-xs font-sans tracking-[0.2em] uppercase text-muted-foreground mb-3">
                  Paris Atelier
                </p>
                <p class="font-sans text-base leading-relaxed">
                  45 Rue de la Paix<br />
                  75000 Paris<br />
                  France
                </p>
              </div>

              <!-- Email -->
              <div>
                <p class="text-xs font-sans tracking-[0.2em] uppercase text-muted-foreground mb-3">
                  Email
                </p>
                <a
                  href="mailto:hello@maer.fr"
                  class="font-sans text-base hover:text-accent transition-colors"
                >
                  hello@maer.fr
                </a>
              </div>

              <!-- Phone -->
              <div>
                <p class="text-xs font-sans tracking-[0.2em] uppercase text-muted-foreground mb-3">
                  Phone
                </p>
                <a
                  href="tel:+33142861234"
                  class="font-sans text-base hover:text-accent transition-colors"
                >
                  +33 1 42 86 1234
                </a>
              </div>

              <!-- Hours -->
              <div>
                <p class="text-xs font-sans tracking-[0.2em] uppercase text-muted-foreground mb-3">
                  Hours
                </p>
                <p class="font-sans text-base space-y-1">
                  <div>Monday – Friday: 10:00 – 19:00</div>
                  <div>Saturday: 11:00 – 18:00</div>
                  <div>Sunday: Closed</div>
                </p>
              </div>

              <!-- Social -->
              <div>
                <p class="text-xs font-sans tracking-[0.2em] uppercase text-muted-foreground mb-4">
                  Follow
                </p>
                <div class="flex gap-6">
                  <a
                    href="https://instagram.com"
                    class="font-sans text-sm text-muted-foreground hover:text-accent transition-colors"
                  >
                    Instagram
                  </a>
                  <a
                    href="https://twitter.com"
                    class="font-sans text-sm text-muted-foreground hover:text-accent transition-colors"
                  >
                    Twitter
                  </a>
                  <a
                    href="https://linkedin.com"
                    class="font-sans text-sm text-muted-foreground hover:text-accent transition-colors"
                  >
                    LinkedIn
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- FAQ Section -->
      <section class="py-20 px-6 lg:px-12 border-t border-border bg-gray-50/50">
        <div class="max-w-screen-lg mx-auto">
          <h2 class="font-serif text-3xl md:text-4xl tracking-wide mb-12 text-center">
            Frequently Asked Questions
          </h2>

          <div class="space-y-6">
            <div
              v-for="(faq, index) in faqs"
              :key="index"
              class="border border-border p-6 cursor-pointer hover:bg-background transition-colors"
              @click="toggleFaq(index)"
            >
              <div class="flex items-center justify-between">
                <h3 class="font-serif text-lg tracking-wide">
                  {{ faq.question }}
                </h3>
                <span class="text-xl text-muted-foreground">
                  {{ expandedFaq === index ? '−' : '+' }}
                </span>
              </div>
              <p
                v-if="expandedFaq === index"
                class="font-sans text-sm text-muted-foreground leading-relaxed mt-4"
              >
                {{ faq.answer }}
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
import MainLayout from '@/layouts/MainLayout.vue'

interface FormData {
  name: string
  email: string
  subject: string
  message: string
}

const form = ref<FormData>({
  name: '',
  email: '',
  subject: '',
  message: ''
})

const submitMessage = ref('')
const expandedFaq = ref<number | null>(null)

const faqs = [
  {
    question: 'How long does delivery take?',
    answer: 'Maér pieces are carefully packaged and shipped via premium courier service. Standard delivery within Europe typically takes 3-5 business days. Express delivery options are available upon request.'
  },
  {
    question: 'What is your return policy?',
    answer: 'We stand behind the quality of every Maér piece. Unworn items may be returned within 30 days of purchase. Since each piece is handcrafted and one-of-a-kind, custom orders cannot be returned.'
  },
  {
    question: 'Do you offer custom orders?',
    answer: 'Absolutely. We welcome inquiries about bespoke pieces. Please contact our Atelier directly to discuss your vision. Custom orders typically require 8-12 weeks to complete.'
  },
  {
    question: 'How should I care for my Maér piece?',
    answer: 'Each garment comes with care instructions specific to its materials. Generally, we recommend professional dry cleaning to preserve the integrity and beauty of your piece. Proper storage in a cool, dry place is also important.'
  },
  {
    question: 'Are your pieces available in different sizes?',
    answer: 'Each Maér piece is designed as a singular work of art and is typically created in a specific size. We do offer alterations by our skilled artisans to ensure perfect fit. Please contact us for details.'
  },
  {
    question: 'Can I visit the Maér Atelier?',
    answer: 'We welcome appointments by request. Please email hello@maer.fr or call +33 1 42 86 1234 to schedule a private viewing of our collections and discuss your interests.'
  }
]

const submitForm = () => {
  // Simulate form submission
  submitMessage.value = 'Thank you for your message. We will get back to you shortly.'
  form.value = {
    name: '',
    email: '',
    subject: '',
    message: ''
  }
  setTimeout(() => {
    submitMessage.value = ''
  }, 5000)
}

const toggleFaq = (index: number) => {
  expandedFaq.value = expandedFaq.value === index ? null : index
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
</style>
