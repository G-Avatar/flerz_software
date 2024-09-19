<template>
    <div class="overflow-x-hidden max-h-screen max-w-screen-auto">
      <Navbar />
      <Hero />
      
      <Portfolio />
      <AboutUs />
      <Partnerships />
      <ContactUs />
      <Footer />
    </div>
  </template>
  
  <script setup>
  import Navbar from '@/components/parts/Navbar.vue'
  import Hero from '@/components/parts/Hero.vue'
  import AboutUs from '@/components/parts/AboutUs.vue'
  import Portfolio from '@/components/parts/Portfolio.vue'
  import ContactUs from '@/components/parts/ContactUs.vue'
  import Footer from '@/components/parts/Footer.vue'
  import Partnerships from '@/components/parts/Partnerships.vue'
  </script>
  
  <style>
  /* Global styles */
  html {
    scroll-behavior: smooth;
  }
  </style>
  