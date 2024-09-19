<template>
  <section id="partnerships" class="py-16 bg-teal-50 text-center">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl font-bold mb-6 text-teal-800">Our Trusted Partnerships</h2>
      <p class="text-lg mb-12 text-gray-700">We collaborate with industry leaders to deliver exceptional value and innovative solutions. Discover the partners who help us achieve excellence.</p>
      
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
        <div class="flex justify-center items-center p-4 bg-white shadow-md rounded-lg">
          <img :src="ismLogo" alt="Partner 1" class="h-12 w-auto"/>
          <span class="text-gray-800 text-lg">International School of Management | Executive Education</span>
        </div>
        <div class="flex justify-center items-center p-4 bg-white shadow-md rounded-lg">
          <span class="text-gray-800 text-lg">Service Renewal UK - Ultrafine Copper Powder</span>
        </div>
      </div>


    </div>
  </section>
</template>
<script setup>
import ismLogo from  '@/landing_page/ism.jpeg';
</script>