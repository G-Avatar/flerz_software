  <template>
    <section id="portfolio" class="py-16 bg-gray-900">
      <div class="container mx-auto px-4">
        <!-- Section Header -->
        <h2 class="text-4xl font-extrabold mb-6 text-teal-300 text-center">Discover Our Innovative Software Solutions</h2>
        <p class="text-lg text-gray-400 mb-12 text-center">
          Explore our range of products designed to enhance efficiency and streamline operations across various sectors.
        </p>

        <!-- Swiper Carousel -->
        <swiper-container
          :slides-per-view="2"
          :space-between="30"
          :pagination="{ clickable: true }"
          :navigation="true"
          class="relative"
        >
          <!-- Swiper Slide 1 -->
          <swiper-slide>
            <div class="flex flex-col md:flex-row bg-gray-800 border border-gray-700 rounded-xl overflow-hidden relative h-full">
              <!-- Product Image -->
              <div class="w-full md:w-1/3 flex items-center justify-center p-4">
                <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center">
                  <img
                    alt="Enhanced Barangay Operations System"
                    :src="ebosIcon"
                    class="w-20 h-20 object-contain"
                  />
                </div>
              </div>
              <!-- Product Details -->
              <div class="w-full md:w-2/3 p-4 md:p-6 flex flex-col justify-center">
                <h3 class="text-2xl md:text-3xl font-semibold text-gray-100 mb-2">Enhanced Barangay Operations System</h3>
                <p class="text-teal-400 font-semibold mb-4">Smart Barangay Management</p>
                <p class="text-gray-300">
                  A comprehensive system designed to improve Barangay operations, featuring capabilities aligned with the <b>Seal of Good Local Governance</b>.
                </p>
              </div>
            </div>
          </swiper-slide>

          <!-- Swiper Slide 2 -->
          <swiper-slide>
            <div class="flex flex-col md:flex-row bg-gray-800 border border-gray-700 rounded-xl overflow-hidden relative h-full">
              <!-- Product Image -->
              <div class="w-full md:w-1/3 flex items-center justify-center p-4">
                <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center">
                  <img
                    alt="Enhanced Church Operations System"
                    :src="ecosIcon"
                    class="w-20 h-20 object-contain"
                  />
                </div>
              </div>
              <!-- Product Details -->
              <div class="w-full md:w-2/3 p-4 md:p-6 flex flex-col justify-center">
                <h3 class="text-2xl md:text-3xl font-semibold text-gray-100 mb-2">Enhanced Church Operations System</h3>
                <p class="text-teal-400 font-semibold mb-4">Diocese-Parish Management Software</p>
                <p class="text-gray-300">
                  ECOS provides a powerful, all-in-one solution designed to revolutionize Diocese and Church operations.
                </p>
              </div>
            </div>
          </swiper-slide>

          <!-- Swiper Slide 3 -->
          <swiper-slide>
            <div class="flex flex-col md:flex-row bg-gray-800 border border-gray-700 rounded-xl overflow-hidden relative h-full">
              <!-- Product Image -->
              <div class="w-full md:w-1/3 flex items-center justify-center p-4">
                <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center">
                  <img
                    alt="CINTH"
                    :src="cinthIcon"
                    class="w-20 h-20 object-contain"
                  />
                </div>
              </div>
              <!-- Product Details -->
              <div class="w-full md:w-2/3 p-4 md:p-6 flex flex-col justify-center">
                <h3 class="text-2xl md:text-3xl font-semibold text-gray-100 mb-2">CINTH</h3>
                <p class="text-teal-400 font-semibold mb-4">School Management Software</p>
                <p class="text-gray-300">
                  CINTH streamlines administrative tasks, enhances student and staff management, and provides real-time insights on school performance.
                </p>
              </div>
            </div>
          </swiper-slide>

          <!-- Swiper Slide 4 -->
          <swiper-slide>
            <div class="flex flex-col md:flex-row bg-gray-800 border border-gray-700 rounded-xl overflow-hidden relative h-full">
              <!-- Product Image -->
              <div class="w-full md:w-1/3 flex items-center justify-center p-4">
                <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center">
                  <img
                    alt="PARADA"
                    :src="paradaIcon"
                    class="w-20 h-20 object-contain"
                  />
                </div>
              </div>
              <!-- Product Details -->
              <div class="w-full md:w-2/3 p-4 md:p-6 flex flex-col justify-center">
                <h3 class="text-2xl md:text-3xl font-semibold text-gray-100 mb-2">PARADA</h3>
                <p class="text-teal-400 font-semibold mb-4">Mobile Park Reservation Application</p>
                <p class="text-gray-300">
                  <b>PARADA</b> simplifies park reservations with a tap on your phone, making parking management effortless and efficient.
                </p>
              </div>
            </div>
          </swiper-slide>
        </swiper-container>
      </div>
    </section>
  </template>

  <script setup>
  import { Swiper as SwiperContainer, SwiperSlide } from 'swiper/vue';
  import 'swiper/swiper-bundle.css';

  import ecosIcon from '@/landing_page/eccos-logo.png';
  import ebosIcon from '@/landing_page/ebos.png';
  import cinthIcon from '@/landing_page/cinth.png';
  import paradaIcon from '@/landing_page/parada.png';
  </script>

  <style scoped>
  /* Scoped styles for the carousel and text */
  .swiper-container {
    position: relative;
  }

  .swiper-slide {
    display: flex;
    align-items: stretch;
    justify-content: center;
  }

  .swiper-slide img {
    border-radius: 0.5rem;
  }

  .swiper-slide .p-4 {
    padding: 1rem;
  }

  .swiper-slide .md\\:p-6 {
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
