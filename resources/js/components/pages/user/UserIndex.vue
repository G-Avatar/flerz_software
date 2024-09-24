<template>
  <div class="h-screen w-screen flex overflow-hidden"> 

      <div class="flex flex-col flex-1">
          <AppTopBar :title="getName()" />
          <main class="flex-1 overflow-auto p-5 mt-16"> 
              <div class="content">
                <RouterView />
              </div>
          </main>
      </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import AppTopBar from './AppTopBar.vue';
import { useRoute } from 'vue-router';

const route = useRoute();
const sidebarOpen = ref(false);

const getName = () => {
  if (route.name === 'user-dashboard') {
      return 'Dashboard';
  }
  return '';
};
</script>

<style scoped>
html, body {
  overflow: hidden; 
}
</style>
