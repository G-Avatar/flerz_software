<template>
  <div class="fixed top-0 left-0 w-full z-50">
    <nav class="bg-teal-300 p-2 shadow-md">
      <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center space-x-2 text-sm md:text-lg hover:text-gray-600">
          <img :src="flerzIcon" class="logo rounded-full p-1 bg-white shadow" alt="FLERZ Icon" />
          <span class="md:block font-bold">FLERZ</span>
        </div>

        <div @click="toggleMenu" class="md:hidden flex items-center cursor-pointer">
          <i class="pi pi-bars text-xl text-white"></i>
        </div>

        <div :class="{ 'hidden': !isMenuOpen, 'flex': isMenuOpen }" class="flex-col md:flex md:flex-row space-y-2 md:space-y-0 md:space-x-4">
          <a href="#about" class="scroll-link hover:text-gray-600 font-semibold text-sm md:text-base flex items-center space-x-1">
            <i class="pi pi-info-circle"></i>
            <span>About Us</span>
          </a>
          <a href="#portfolio" class="scroll-link hover:text-gray-600 font-semibold text-sm md:text-base flex items-center space-x-1">
            <i class="pi pi-clipboard"></i>
            <span>Portfolio</span>
          </a>
          <a class="scroll-link hover:text-gray-600 font-semibold text-sm md:text-base flex items-center space-x-1">
            <i class="pi pi-briefcase"></i>
            <RouterLink
               to="/careers"
            >
            <span>Careers</span>

            </RouterLink>
          </a>
          <a href="#contact" class="scroll-link hover:text-gray-600 font-semibold text-sm md:text-base flex items-center space-x-1">
            <i class="pi pi-envelope"></i>
            <span>Contact Us</span>
          </a>
          <a href="https://www.flerzmcs.com/login" class="hover:text-gray-600 font-semibold text-sm md:text-base flex-1 flex items-center space-x-1">
            <i class="pi pi-sign-in"></i>
            <span>Login to EBOS</span>
          </a>
          <a @click="openLoginModal" class="hover:text-gray-600 font-semibold text-sm md:text-base flex items-center space-x-1 cursor-pointer">
            <i class="pi pi-user"></i>
            <span>Login as Employee</span>
          </a>
        </div>
      </div>
    </nav>
  </div>

  <LoginModal
    :isLoginModalVisible="isLoginModalVisible"
    @update:isLoginModalVisible="isLoginModalVisible = $event"
  />
</template>


<script setup>
import { ref, onMounted, reactive } from 'vue';
import flerzIcon from '@/landing_page/logo.png';
import LoginModal from '@/components/parts/Login.vue';

const isMenuOpen = ref(false);
const isLoginModalVisible = ref(false);

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value;
};

const openLoginModal = () => {
  isLoginModalVisible.value = true;
};

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

const loginForm = reactive({
  email: '',
  password: '',
  remember: false,
})

const handleLogin = () => {
  console.log(loginForm);
}
</script>

<style scoped>
.logo {
  max-width: 4rem;
  height: 4rem;
  object-fit: contain;
}

.pi {
  font-size: 1.25rem;
}

.dialog-content {
  color: black;
  padding: 1rem;
}
</style>
