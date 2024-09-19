<template>
  <section id="contact" class="py-16 bg-gray-1 text-center">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-6">Contact Us</h2>
      <p class="text-lg mb-12 font-semibold">We'd love to hear from you! Please fill out the form below and we'll get back to you as soon as possible.</p>
      <div class="flex flex-col lg:flex-row lg:space-x-8">
        <!-- Form Section -->
        <div class="lg:w-1/2">
          <form @submit.prevent="handleSubmit" class="bg-white p-8 rounded-lg shadow-md">
            <div class="mb-4 text-left">
              <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
              <input
                id="name"
                v-model="form.name"
                type="text"
                placeholder="Your Name"
                class="w-full px-3 py-2 border border-gray-300 rounded-md"
                required
              />
            </div>
            <div class="mb-4 text-left">
              <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
              <input
                id="email"
                v-model="form.email"
                type="email"
                placeholder="Your Email"
                class="w-full px-3 py-2 border border-gray-300 rounded-md"
                required
              />
            </div>
            <div class="mb-4 text-left">
              <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message</label>
              <textarea
                id="message"
                v-model="form.message"
                placeholder="Your Message"
                rows="4"
                class="w-full px-3 py-2 border border-gray-300 rounded-md"
                required
              ></textarea>
            </div>
            <button
              type="submit"
              class="w-full bg-teal-500 text-white py-2 px-4 rounded-md hover:bg-teal-600 transition duration-300"
            >
              Send Message
            </button>
          </form>
        </div>
        <!-- Contact Info Section -->
        <div class="lg:w-1/2 mt-8 lg:mt-0">
          <div class="bg-white p-8 rounded-lg shadow-md text-left">
            <h3 class="text-xl font-bold mb-4">Our Contact Information</h3>
            <div class="flex items-center mb-2">
              <i class="pi pi-map-marker text-teal-500 mr-2"></i>
              <p class="text-gray-700">Brgy. Apokon<br>Tagum City, Philippines, 8100</p>
            </div>
            <div class="flex items-center mb-2">
              <i class="pi pi-phone text-teal-500 mr-2"></i>
              <p class="text-gray-700">Phone: (+63) 9946557318</p>
            </div>
            <div class="flex items-center mb-2">
              <i class="pi pi-envelope text-teal-500 mr-2"></i>
              <p class="text-gray-700">Email: marketing@flerz.org</p>
            </div>
            <div class="flex items-center">
              <i class="pi pi-clock text-teal-500 mr-2"></i>
              <p class="text-gray-700">Business Hours: Mon-Fri 9am - 5pm</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue';

const form = ref({
  name: '',
  email: '',
  message: ''
});

const handleSubmit = () => {
  // Handle form submission
  console.log('Form submitted:', form.value);
  // Here you would typically send the form data to an API or handle it as needed
};
</script>

<style scoped>
/* Add custom styles if needed */
.pi {
  font-size: 1.5rem;
}
</style>
