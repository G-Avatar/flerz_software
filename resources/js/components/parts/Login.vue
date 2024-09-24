<template>
  <Dialog :visible="isLoginModalVisible" modal :style="{ width: 'auto' }"
    :breakpoints="{ '1199px': '75vw', '575px': '90vw' }" class="rounded-lg shadow-lg" :closable="false"
    @hide="closeModal">
    <div class="bg-teal-500 p-6 rounded-t-lg">
      <div class="flex justify-between items-center">
        <span class="font-bold text-lg text-white">Employee Login</span>
        <Button icon="pi pi-times" class="p-button-text text-white" @click="closeModal" />
      </div>
    </div>

    <div class="flex flex-col md:flex-row items-start p-6 bg-white shadow-md rounded-b-lg">
      <div class="flex items-center justify-center md:justify-start md:w-1/2 mb-6 md:mb-0">
        <img :src="flerzLogo" alt="Company Logo" class="w-24 h-24 mr-3 rounded-full bg-slate-100 object-contain p-2" />
        <h2 class="text-2xl font-bold text-teal-600">FLERZ Management Consultancy Services</h2>
      </div>

      <div class="w-full md:w-1/2 p-5 border-l-2 border-gray-300">
        <form @submit.prevent="handleLogin">
          <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <InputText id="email" v-model="loginForm.email"
              class="w-full border rounded-md focus:ring focus:ring-teal-200" placeholder="Enter your email" required />
          </div>

          <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <InputText type="password" id="password" v-model="loginForm.password"
              class="w-full border rounded-md focus:ring focus:ring-teal-200" placeholder="Enter your password"
              required />
          </div>

          <div class="flex justify-between items-center mb-4">
            <div class="flex items-center">
              <input type="checkbox" id="remember" v-model="loginForm.remember" class="mr-2" />
              <label for="remember" class="text-sm text-gray-600">Remember me</label>
            </div>
            <a href="#" class="text-sm text-teal-500 hover:text-teal-400">Forgot your password?</a>
          </div>

          <div>
            <RouterLink
              :to="{ name: 'user-dashboard' }"
            >
              <Button type="button" label="Sign in" severity="success"
                class="w-auto p-button-primary bg-teal-600 hover:bg-teal-700 text-white rounded-md transition duration-200" />
            </RouterLink>

          </div>
        </form>
      </div>
    </div>
  </Dialog>
</template>

<script setup>
import { ref, reactive } from 'vue';
import  Dialog  from 'primevue/dialog';
import  InputText  from 'primevue/inputtext';
import  Button  from 'primevue/button';
import flerzLogo from '@/landing_page/logo.png';

const props = defineProps({
  isLoginModalVisible: {
    type: Boolean,
    required: true,
  },
});

const emit = defineEmits(['update:isLoginModalVisible']);

const loginForm = reactive({
  email: '',
  password: '',
  remember: false,
});

const handleLogin = () => {
  console.log(loginForm);
  // Handle the login logic
};

const closeModal = () => {
  emit('update:isLoginModalVisible', false);
};
</script>

<style scoped>
.dialog-content {
  color: black;
  padding: 1rem;
}

/* Additional styles for enhanced appearance */
.bg-teal-500 {
  background-color: #38b2ac;
  /* Customize as needed */
}

input[type="checkbox"] {
  cursor: pointer;
}
</style>
