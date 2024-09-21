<template>
    <Dialog
      :visible="isLoginModalVisible"
      modal
      :style="{ width: 'auto', }"
      :breakpoints="{ '1199px': '75vw', '575px': '90vw' }"
      class="rounded-lg shadow-lg bg-white"
      :closable="false"
      @hide="closeModal"
    >
      <div class="bg-teal-500 p-6 rounded-t-lg">
        <div class="flex justify-between items-center">
          <span class="font-bold text-lg">Employee Login</span>
          <Button icon="pi pi-times" class="p-button-text text-white" @click="closeModal" />
        </div>
      </div>
  
      <div class="flex flex-col md:flex-row items-start p-6 bg-gray-100">
        <div class="flex items-center justify-center md:justify-start md:w-1/2 mb-6 md:mb-0">
          <img :src="flerzLogo" alt="Company Logo" class="w-24 h-24 mr-3" />
          <h2 class="text-2xl font-bold text-teal-600">Management Consultancy Services</h2>
        </div>
  
        <div class="w-full md:w-1/2 p-5 border-l border-black">
          <form @submit.prevent="handleLogin">
            <div class="mb-4">
              <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
              <InputText
                id="email"
                v-model="loginForm.email"
                class="w-full border rounded-md focus:ring focus:ring-teal-200"
                placeholder="Enter your email"
                required
              />
            </div>
  
            <div class="mb-4">
              <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
              <InputText
                type="password"
                id="password"
                v-model="loginForm.password"
                class="w-full border rounded-md focus:ring focus:ring-teal-200"
                placeholder="Enter your password"
                required
              />
            </div>
  
            <div class="flex justify-between items-center mb-4">
              <div>
                <input type="checkbox" id="remember" v-model="loginForm.remember" />
                <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
              </div>
              <a href="#" class="text-sm text-teal-500 hover:text-teal-400">Forgot your password?</a>
            </div>
  
            <div>
              <Button
                type="submit"
                label="Sign in"
                class="w-full p-button-primary bg-teal-600 hover:bg-teal-700 text-white rounded-md"
              />
            </div>
          </form>
        </div>
      </div>
    </Dialog>
  </template>
  
  <script setup>
  import { ref, reactive } from 'vue';
  import Dialog from 'primevue/dialog';
  import InputText from 'primevue/inputtext';
  import Button from 'primevue/button';
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
  </style>
  