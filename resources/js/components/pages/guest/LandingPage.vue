<template>
    <div class="overflow-x-hidden max-h-screen max-w-screen-auto">
      <NavBar />
      <Hero />
      <Portfolio />
      <Products />
      <AboutUs />
      <Partnerships />
      <ContactUs />
      <Footer />
    </div>
  </template>
  
  <script setup>
  import NavBar from '@/components/parts/NavBar.vue'
  import Hero from '@/components/parts/Hero.vue'
  import AboutUs from '@/components/parts/AboutUs.vue'
  import Portfolio from '@/components/parts/Portfolio.vue'
  import ContactUs from '@/components/parts/ContactUs.vue'
  import Footer from '@/components/parts/Footer.vue'
  import Partnerships from '@/components/parts/Partnerships.vue'
  import Products from '@/components/parts/Products.vue'
  </script>
  
  <style>
  /* Global styles */
  html {
    scroll-behavior: smooth;
  }
  </style>
  