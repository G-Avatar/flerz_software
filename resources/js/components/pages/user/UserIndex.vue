<template>
  <div class="h-screen w-screen flex overflow-hidden"> <!-- Prevent overflow -->
      <!-- <AppSidebar :sidebarOpen="sidebarOpen" /> -->
      <div class="flex flex-col flex-1">
          <AppTopBar :title="getName()" />
          <main class="flex-1 overflow-auto p-5 mt-16"> <!-- Maintain mt-16 -->
              <div class="content">
                  <router-view />
              </div>
          </main>
      </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import AppSidebar from './AppSidebar.vue';
import AppTopBar from './AppTopBar.vue';
import { useRoute } from 'vue-router';

const route = useRoute();
const sidebarOpen = ref(false);

const getName = () => {
  if (route.name === 'app-dashboard') {
      return 'Dashboard';
  }
  return '';
};
</script>

<style scoped>
/* This prevents overflow by hiding any excess content */
html, body {
  overflow: hidden; /* Prevents body overflow */
}
</style>
