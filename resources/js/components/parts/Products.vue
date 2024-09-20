<template>
  <section id="portfolio" class="py-16 bg-gray-900">
    <div class="container mx-auto px-4">
      <h2 class="text-4xl font-extrabold mb-6 text-teal-300 text-center">Discover Our Innovative Software Solutions</h2>
      <p class="text-lg text-gray-400 mb-12 text-center">
        Explore our range of products designed to enhance efficiency and streamline operations across various sectors.
      </p>

      <swiper-container
        :slides-per-view="1"
        :space-between="30"
        :pagination="{ clickable: true }"
        :navigation="true"
        class="relative"
      >
        <swiper-slide v-for="(product, index) in products" :key="index">
          <div class="flex flex-col md:flex-row bg-gray-800 border border-gray-700 rounded-xl overflow-hidden h-full">
            <div class="w-full md:w-1/3 flex items-center justify-center p-4">
              <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center">
                <img
                  :alt="product.alt"
                  :src="product.icon"
                  class="w-20 h-20 object-contain"
                />
              </div>
            </div>
            <div class="w-full md:w-2/3 p-4 md:p-6 flex flex-col justify-between h-full">
              <h3 class="text-2xl md:text-3xl font-semibold text-gray-100 mb-2">{{ product.title }}</h3>
              <p class="text-teal-400 font-semibold mb-4">{{ product.subtitle }}</p>
              <p class="text-gray-300 flex-grow">
                {{ product.description }}
              </p>
            </div>
          </div>
        </swiper-slide>
      </swiper-container>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue';
import { Swiper as SwiperContainer, SwiperSlide } from 'swiper/vue';
import 'swiper/swiper-bundle.css';

import ecosIcon from '@/landing_page/eccos-logo.png';
import ebosIcon from '@/landing_page/ebos.png';
import cinthIcon from '@/landing_page/cinth.png';
import paradaIcon from '@/landing_page/parada.png';

const products = ref([
  {
    icon: ebosIcon,
    alt: "Enhanced Barangay Operations System",
    title: "Enhanced Barangay Operations System",
    subtitle: "Smart Barangay Management",
    description: "A comprehensive system designed to improve Barangay operations, featuring capabilities aligned with the Seal of Good Local Governance."
  },
  {
    icon: ecosIcon,
    alt: "Enhanced Church Operations System",
    title: "Enhanced Church Operations System",
    subtitle: "Diocese-Parish Management Software",
    description: "ECOS provides a powerful, all-in-one solution designed to revolutionize Diocese and Church operations."
  },
  {
    icon: cinthIcon,
    alt: "CINTH",
    title: "CINTH",
    subtitle: "School Management Software (Aligned to DepEd)",
    description: "CINTH streamlines administrative tasks, enhances student and staff management, and provides real-time insights on school performance."
  },
  {
    icon: paradaIcon,
    alt: "PARADA",
    title: "PARADA",
    subtitle: "Advance Booking System",
    description: "PARADA simplifies park reservations with a tap on your phone, making parking management effortless and efficient."
  }
]);
</script>

<style scoped>
.swiper-container {
  position: relative;
}

.swiper-slide {
  display: flex;
  align-items: stretch;
  justify-content: center;
}

.swiper-slide .flex {
  height: 100%; /* Ensure the flex container fills the slide */
}

.swiper-slide img {
  border-radius: 0.5rem;
}

.swiper-slide .p-4 {
  padding: 1rem;
}

.swiper-slide .md\:p-6 {
  padding: 1.5rem;
}

.swiper-slide .bg-gray-800 {
  border-radius: 0.5rem;
}

.swiper-slide .shadow-lg {
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

@media (max-width: 768px) {
  .swiper-slide {
    flex-direction: column;
  }

  .swiper-slide img {
    width: auto;
    height: auto;
  }
}
</style>
