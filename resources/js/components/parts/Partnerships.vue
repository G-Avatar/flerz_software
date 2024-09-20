<template>
  <section id="partnerships" class="py-16 bg-gray-800 text-center">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl font-bold mb-6 text-teal-500">Our Trusted Partnerships</h2>
      <p class="text-lg mb-12 text-gray-200">
        We collaborate with industry leaders to deliver exceptional value and innovative solutions. Discover the partners who help us achieve excellence.
      </p>
      
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8 justify-center">
        <div class="flex justify-center items-center p-5 bg-white shadow-md rounded-lg gap-2">
          <img :src="ismLogo" alt="Partner 1" class="h-12 w-auto"/>
          <span class="text-gray-700 text-lg">International School of Management | Executive Education</span>
        </div>
        <div class="flex justify-center items-center p-5 bg-white shadow-md rounded-lg gap-2">
          <img :src="starpay" alt="Partner 2" class="h-12 w-auto"/>
          <span class="text-gray-700 text-lg">Starpay | Pitaka ng Bayan</span>
        </div>
        <div class="flex justify-center items-center p-5 bg-white shadow-md rounded-lg gap-2">
          <img :src="dhcLogo" alt="Partner 3" class="h-12 w-auto"/>
          <span class="text-gray-700 text-lg">DHC Partners | Dubai, UAE</span>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import ismLogo from '@/landing_page/ism.jpeg';
import starpay from '@/landing_page/starpay.jpg';
import dhcLogo from '@/landing_page/dhc.png';
</script>

<style scoped>
</style>
