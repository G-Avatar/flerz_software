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
                <Onboarding />
            </div>
            <div v-else-if="activeTab.name === 'Payroll'">
                <Payroll />
            </div>
            <div v-else-if="activeTab.name === 'Compensation and Benefits'">
                <Benefits />
            </div>
            <div v-else-if="activeTab.name === 'Training and Development'">
                <Training />
            </div>
            <div v-else-if="activeTab.name === 'Offboarding'">
                <Offboarding />
            </div>
            <div v-else-if="activeTab.name === 'Retirement'">
                <Retirement />
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import Recruitment from './Recruitment.vue';
import Onboarding from './Onboarding.vue';
import Payroll from './Payroll.vue';
import Benefits from './Benefits.vue';
import Training from './Training.vue';
import Offboarding from './Offboarding.vue';
import Retirement from './Retirement.vue';


const tabs = [
    { name: 'Recruitment' },
    { name: 'Onboarding' },
    { name: 'Payroll' },
    { name: 'Compensation and Benefits' },
    { name: 'Training and Development' },
    { name: 'Offboarding' },
    { name: 'Retirement' },
];

const activeTab = ref(tabs[0]); // Default active tab
</script>

<style scoped></style>