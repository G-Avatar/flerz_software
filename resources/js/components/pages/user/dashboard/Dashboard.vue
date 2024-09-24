<template>
    <div class="w-full">
        <div class="flex border-b-2 border-gray-900">
            <button v-for="tab in tabs" :key="tab.name" @click="activeTab = tab"
                class="py-2 px-4 transition-colors duration-200 focus:outline-none " :class="{
                    'bg-blue-500 text-white font-semibold': activeTab === tab,
                    'bg-gray-200 text-gray-700 hover:bg-gray-300': activeTab !== tab
                }">
                {{ tab.name }}
            </button>
        </div>
        <div class="p-4">
            <div v-if="activeTab.name === 'Recruitment'">
               <Recruitment />
            </div>
            <div v-else-if="activeTab.name === 'Onboarding'">
                <h2 class="text-lg font-bold">Content for Tab 2</h2>
                <p>This is the content for the second tab.</p>
            </div>
            <div v-else-if="activeTab.name === 'Payroll'">
                <h2 class="text-lg font-bold">Content for Tab 3</h2>
                <p>This is the content for the third tab.</p>
            </div>
            <div v-else-if="activeTab.name === 'Compensation and Benefits'">
                <h2 class="text-lg font-bold">Content for Tab 4</h2>
                <p>This is the content for the third tab.</p>
            </div>
            <div v-else-if="activeTab.name === 'Training and Development'">
                <h2 class="text-lg font-bold">Content for Tab 5</h2>
                <p>This is the content for the third tab.</p>
            </div>
            <div v-else-if="activeTab.name === 'Offboarding'">
                <h2 class="text-lg font-bold">Content for Tab 6</h2>
                <p>This is the content for the third tab.</p>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import Recruitment from './Recruitment.vue';

const tabs = [
    { name: 'Recruitment' },
    { name: 'Onboarding' },
    { name: 'Payroll' },
    { name: 'Compensation and Benefits' },
    { name: 'Training and Development' },
    { name: 'Offboarding' },
];

const activeTab = ref(tabs[0]); // Default active tab
</script>

<style scoped></style>