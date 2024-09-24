<template>
    <div class="topbar w-full fixed z-10">
      <div class="flex items-center justify-between p-2 bg-gray-800 text-white shadow-lg border-white">
        <div class="flex items-center ml-2">
          <h1 class="text-center text-lg font-bold">FLERZ</h1>
        </div>
        <div class="flex flex-grow justify-center space-x-4">
          <h1 class="text-gray-200">Human Resources Consulting</h1>
        </div>
        <div class="flex items-center ml-2 cursor-pointer gap-2">
          <span class="font-poppins text-md px-2 hidden sm:inline-block">John Doe</span>
          <i class="pi pi-sign-out"></i>
          <span class="font-poppins text-md px-2 hidden sm:inline-block">Logout</span>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  </script>
  
  <style scoped>
  .topbar {
    top: 0; /* Ensure it's at the very top */
    left: 0; /* Ensure it spans full width */
    right: 0; /* Ensure it spans full width */
    border: 2px white;
  }
  
  .fixed {
    position: fixed; /* Fix the top bar in place */
    z-index: 1000; /* Ensure it's above other elements */
  }
  </style>
  