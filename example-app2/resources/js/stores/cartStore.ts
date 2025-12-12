import { ref, computed } from 'vue'

interface CartItem {
  id: number
  name: string
  price_cents: number
  quantity: number
  image: string
}

const cart = ref<CartItem[]>([])

// Load cart from localStorage on initialization
const initializeCart = () => {
  const stored = localStorage.getItem('maer_cart')
  if (stored) {
    try {
      cart.value = JSON.parse(stored)
    } catch (e) {
      cart.value = []
    }
  }
}

// Save cart to localStorage
const saveCart = () => {
  localStorage.setItem('maer_cart', JSON.stringify(cart.value))
}

// Add item to cart
const addToCart = (item: Omit<CartItem, 'quantity'>, quantity: number = 1) => {
  const existingItem = cart.value.find(i => i.id === item.id)

  if (existingItem) {
    existingItem.quantity += quantity
  } else {
    cart.value.push({ ...item, quantity })
  }

  saveCart()
}

// Remove item from cart
const removeFromCart = (id: number) => {
  cart.value = cart.value.filter(item => item.id !== id)
  saveCart()
}

// Update quantity
const updateQuantity = (id: number, quantity: number) => {
  const item = cart.value.find(i => i.id === id)
  if (item) {
    if (quantity <= 0) {
      removeFromCart(id)
    } else {
      item.quantity = quantity
      saveCart()
    }
  }
}

// Clear cart
const clearCart = () => {
  cart.value = []
  saveCart()
}

// Get cart count
const cartCount = computed(() => {
  return cart.value.reduce((sum, item) => sum + item.quantity, 0)
})

// Get cart items
const cartItems = computed(() => cart.value)

export const useCart = () => {
  return {
    cart,
    cartItems,
    cartCount,
    addToCart,
    removeFromCart,
    updateQuantity,
    clearCart,
    initializeCart
  }
}
