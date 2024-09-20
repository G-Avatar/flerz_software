<template>
  <div class="hero-section relative py-16">
    <div class="relative container mx-auto px-4 flex flex-col lg:flex-row items-center justify-between p-5">
      <div class="hero-message w-full lg:w-1/2 text-center lg:text-left lg:pr-8">
        <h1 class="text-4xl font-bold flex items-center justify-center lg:justify-start">
          Welcome to
          <img :src="flerzIcon" class="logo p-1 bg-white" alt="FLERZ Icon" />
        </h1>
        <p class="text-lg mt-4">
          Dedicated to enhancing efficiency and streamlining operations across various sectors.
          Explore our expertise and solutions tailored to meet your needs.
        </p>
      </div>
      <div class="iframe-container w-full lg:w-1/2 flex justify-center mt-8 lg:mt-0">
        <iframe
          src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fflerz.org&tabs=timeline&width=500&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1038161007560501"
          width="100%" height="450" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
          allowfullscreen="true"
          allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
      </div>
    </div>
  </div>
</template>

<script setup>
import flerzIcon from '@/landing_page/logo.png';
</script>

<style scoped>
.logo {
  width: 12rem; /* Adjust based on text size */
  height: auto; /* Maintain aspect ratio */
}

.hero-section {
  position: relative;
  text-align: center;
  padding-top: 80px; /* Adjust if needed to avoid overlap with navbar */
}

.hero-message {
  padding: 5rem 0; /* Vertical padding */
}

.iframe-container {
  max-width: 100%;
  margin: 0 auto;
  padding: 1rem;
  border-radius: 8px;
}

@media (max-width: 600px) {
  .hero-message {
    padding: 3rem 0; /* Reduced padding for mobile */
  }

  .iframe-container {
    padding: 0; /* No extra padding */
  }

  .iframe-container iframe {
    width: 100%;
    height: 300px; /* Set a specific height for better responsiveness */
  }
}

@media (min-width: 1024px) {
  .hero-section {
    flex-direction: row;
  }
}
</style>
