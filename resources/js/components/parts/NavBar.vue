<template>
  <div class="fixed top-0 left-0 w-full z-50 overflow-hidden">
    <nav class="bg-teal-300 p-2">
      <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center space-x-2 text-sm md:text-lg hover:text-gray-600">
          <img :src="flerzIcon" class="logo rounded-full p-1 bg-white" alt="FLERZ Icon">
          <span class="md:block font-semibold">FLERZ</span>
        </div>
        <div class="space-x-2 flex items-center gap-4">
          <a href="#about" class="scroll-link hover:text-gray-600 font-semibold text-sm md:text-base flex items-center space-x-1">
            <i class="pi pi-info-circle"></i>
            <span>About Us</span>
          </a>
          <a href="#portfolio" class="scroll-link hover:text-gray-600 font-semibold text-sm md:text-base flex items-center space-x-1">
            <i class="pi pi-clipboard"></i>
            <span>Portfolio</span>
          </a>
          <a href="#careers" class="scroll-link hover:text-gray-600 font-semibold text-sm md:text-base flex items-center space-x-1">
            <i class="pi pi-briefcase"></i>
            <span>Careers</span>
          </a>
          <a href="#contact" class="scroll-link hover:text-gray-600 font-semibold text-sm md:text-base flex items-center space-x-1">
            <i class="pi pi-envelope"></i>
            <span>Contact Us</span>
          </a>
          <a href="https://www.flerzmcs.com/login" class="hover:text-gray-600 font-semibold text-sm md:text-base flex-1 flex items-center space-x-1">
            <i class="pi pi-sign-in"></i>
            <span>Login to EBOS</span>
          </a>
          <a href="#login" class="scroll-link hover:text-gray-600 font-semibold text-sm md:text-base flex items-center space-x-1">
            <i class="pi pi-user"></i>
            <span>Login as Employee</span>
          </a>
        </div>
      </div>
    </nav>
    <LoginModal ref="loginModal" />
  </div>
</template>

<script setup>
import { onMounted } from 'vue';
import flerzIcon from '@/landing_page/logo.png';

const scrollToSection = (event) => {
  event.preventDefault();
  const targetId = event.currentTarget.getAttribute('href').substring(1);
  const targetElement = document.getElementById(targetId);
  if (targetElement) {
    targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }
};

onMounted(() => {
  const scrollLinks = document.querySelectorAll('.scroll-link');
  scrollLinks.forEach(link => {
    link.addEventListener('click', scrollToSection);
  });
});
</script>
<style scoped>
.logo {
  max-width: 4rem; 
  height: 4rem;    
  object-fit: contain;
}

.pi {
  font-size: 1rem; /* Adjust icon size */
}
</style>

