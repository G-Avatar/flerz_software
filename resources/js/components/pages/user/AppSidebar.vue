<template>
    <div class="mt-12">
        <!-- Hamburger button -->
        <button @click="toggleSidebar" class="absolute top-4 left-7 z-50 sm:hidden">
            <svg class="w-6 h-6 bg-black rounded-md" fill="none" stroke="white" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>

        <!-- Sidebar -->
        <div :class="{
            'translate-x-0': sidebarOpen,
            '-translate-x-full': !sidebarOpen,
        }"
            class="fixed top-0 left-0 z-40 w-64 h-full overflow-y-auto transition-transform transform bg-gray-800 shadow-lg sm:relative sm:translate-x-0 sm:w-20 md:w-64">
            <div class="flex flex-col items-center justify-center p-4">
                <h1 class="text-lg font-bold text-center text-white">Recruitment Portal</h1>
                <hr class="w-full mt-4 border-t border-gray-200" />
            </div>
            <div>
                <RouterLink :to="{ name: 'user-dashboard' }" class="flex items-center w-full">
                    <SidebarButton :text="'Dashboard'" :routeName="'app-dashboard'" class="text-white" />
                </RouterLink>
            </div>
        </div>

        <!-- Overlay -->
        <div v-if="sidebarOpen" @click="toggleSidebar" class="fixed inset-0 z-30 bg-black opacity-50 sm:hidden"></div>
    </div>
</template>

<script setup>
import { ref } from "vue";
import SidebarButton from "../../parts/SidebarButton.vue";

const sidebarOpen = ref(false);

const toggleSidebar = () => {
    sidebarOpen.value = !sidebarOpen.value;
};

const props = defineProps({
    sidebarOpen: {
        type: Boolean,
        required: true,
    },
});
</script>

<style scoped>
/* Ensure the sidebar content is styled properly */
.sidebar-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100%;
}
</style>
