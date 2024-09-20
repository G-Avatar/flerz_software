<template>
  <div class="card-container p-6 border-2 border-gray-800 bg-teal-50 shadow-lg">
    <h1 class="text-center text-3xl font-extrabold text-gray-700 mb-6 uppercase tracking-widest">About Us</h1>
    <p class="text-center text-lg mb-6 p-8 bg-gray-800 rounded-lg shadow-md leading-relaxed text-gray-200">
      FLERZ Management Consultancy Services is dedicated to providing innovative and strategic solutions tailored to
      enhance organizational performance and drive business growth. With a team of seasoned experts, FLERZ specializes
      in delivering comprehensive management consulting services that encompass operational efficiency, strategic
      planning, and technological integration. Our mission is to empower businesses with the insights and tools needed
      to achieve their objectives, streamline processes, and maximize their competitive edge in today’s dynamic market.
      At FLERZ, we are committed to fostering long-term success for our clients through personalized and results-driven
      consultancy.
    </p>

    <div class="vision-mission-section bg-gray-100 py-10 px-6 md:px-20 shadow-lg">
      <div class="section-header text-center mb-8">
        <h2 class="text-4xl font-bold">Our Vision, Mission, and Core Values</h2>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="vision text-gray-900 p-6 rounded-lg shadow-md bg-white">
          <h3 class="text-2xl font-semibold text-teal-700 mb-4">Vision</h3>
          <p class="text-lg">To expand internationally the consulting services and to provide assistance to various
            individuals or businesses around the world.</p>
        </div>
        <div class="mission bg-white text-gray-900 p-6 rounded-lg shadow-md">
          <h3 class="text-2xl font-semibold text-teal-700 mb-4">Mission</h3>
          <p class="text-lg">To provide consultancy services in the Philippines in strategic, operational, or human
            resources fields.</p>
        </div>
      </div>
      <div class="core-values mt-10 bg-white text-gray-900 p-6 rounded-lg shadow-md">
        <h3 class="text-2xl font-semibold text-teal-700 mb-4 text-center">Core Values</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="core-value-card p-4 bg-gray-100 rounded-lg shadow-md">
            <h4 class="text-lg font-semibold"><strong>Integrity</strong></h4>
            <p class="text-md">Upholding the highest standards of honesty and ethical behavior.</p>
          </div>
          <div class="core-value-card p-4 bg-gray-100 rounded-lg shadow-md">
            <h4 class="text-lg font-semibold"><strong>Business Mindset</strong></h4>
            <p class="text-md">Focused on achieving results and driving business growth.</p>
          </div>
          <div class="core-value-card p-4 bg-gray-100 rounded-lg shadow-md">
            <h4 class="text-lg font-semibold"><strong>Attitude</strong></h4>
            <p class="text-md">Maintaining a positive and proactive approach in all endeavors.</p>
          </div>
        </div>
      </div>

    </div>

    <!-- History Section -->
    <div class="history-section p-4 md:p-10 bg-gray-50">
      <h1 class="text-center text-2xl md:text-4xl font-bold mb-6 md:mb-8 flex items-center justify-center">
        <span class="pi pi-clock mr-2"></span> History
      </h1>

      <div class="history-list relative space-y-10">
        <div class="absolute left-1/2 transform -translate-x-1/2 h-full border-l-4 border-teal-500"></div>

        <div class="history-item flex flex-col md:flex-row items-center justify-between relative">
          <div
            class="w-full md:w-5/12 p-4 border-2 border-teal-500 rounded-lg shadow-md bg-white relative z-10 mb-6 md:mb-0">
            <h3 class="text-lg md:text-xl font-semibold">Launching of ECOS</h3>
            <p class="text-xs md:text-sm text-teal-700">May 15, 2024</p>
            <p>The Enhanced Church Operation System is launched to promote digitalization of various churches and
              improve their archiving process.</p>
          </div>
          <div class="absolute left-1/2 transform -translate-x-1/2 h-full md:h-0.5 bg-teal-500 w-4 md:w-8"></div>
          <div class="hidden md:block w-5/12"></div>
        </div>

        <!-- History Item 2 -->
        <div class="history-item flex flex-col md:flex-row items-center justify-between relative">
          <!-- Empty Space on Left (only on larger screens) -->
          <div class="hidden md:block w-5/12"></div>
          <!-- Connector to vertical line -->
          <div class="absolute left-1/2 transform -translate-x-1/2 h-full md:h-0.5 bg-teal-500 w-4 md:w-8"></div>
          <!-- Right Item -->
          <div
            class="w-full md:w-5/12 p-4 border-2 border-teal-500 rounded-lg shadow-md bg-white relative z-10 mb-6 md:mb-0">
            <h3 class="text-lg md:text-xl font-semibold">Copyright Acquisition for EBOS</h3>
            <p class="text-xs md:text-sm text-teal-700">January 18, 2024</p>
            <p>The copyright of Enhanced Barangay Operation System (EBOS) was obtained and disseminated to various
              barangays, especially in the Davao Region.</p>
          </div>
        </div>

        <!-- History Item 3 -->
        <div class="history-item flex flex-col md:flex-row items-center justify-between relative">
          <!-- Left Item -->
          <div
            class="w-full md:w-5/12 p-4 border-2 border-teal-500 rounded-lg shadow-md bg-white relative z-10 mb-6 md:mb-0">
            <h3 class="text-lg md:text-xl font-semibold">Foundation of FLERZ</h3>
            <p class="text-xs md:text-sm text-teal-700">June 18, 2023</p>
            <p>Founded on June 18, 2023, FLERZ was created to address challenges in Tagum City, aiming to improve
              business processes and operations through strategic and operational support.</p>
          </div>
          <!-- Connector to vertical line -->
          <div class="absolute left-1/2 transform -translate-x-1/2 h-full md:h-0.5 bg-teal-500 w-4 md:w-8"></div>
          <!-- Empty Space on Right (only on larger screens) -->
          <div class="hidden md:block w-5/12"></div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
</script>

<style lang="scss" scoped>
.card-container {
  background: #e0f2f1; // Light background for the main container
  padding: 2rem;
}

.history-list {
  margin-top: 2rem;
}

.history-item {
  transition: background-color 0.3s ease;
}

.history-item:hover {
  background-color: #f1f1f1; // Highlight on hover
}
</style>
