<template>
    <div v-if="isOpen" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
      <div class="bg-white p-8 rounded-lg shadow-xl max-w-2xl w-full">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-3">{{ jobDetails.jobDetails }}</h2>
        <table class="min-w-full text-sm text-left table-fixed">
          <tbody>
            <tr class="border-b">
              <td class="font-semibold text-gray-600 py-2">Job Name:</td>
              <td class="text-gray-800 py-2">{{ jobDetails.jobDetails }}</td>
            </tr>
            <tr class="border-b">
              <td class="font-semibold text-gray-600 py-2">Industry:</td>
              <td class="text-gray-800 py-2">{{ jobDetails.industry }}</td>
            </tr>
            <tr class="border-b">
              <td class="font-semibold text-gray-600 py-2">Country:</td>
              <td class="text-gray-800 py-2">{{ jobDetails.country }}</td>
            </tr>
            <tr class="border-b">
              <td class="font-semibold text-gray-600 py-2">Salary Range:</td>
              <td class="text-gray-800 py-2">{{ jobDetails.minSalary }} - {{ jobDetails.maxSalary }}</td>
            </tr>
            <tr class="border-b">
              <td class="font-semibold text-gray-600 py-2">Visa Sponsorship:</td>
              <td class="text-gray-800 py-2">{{ jobDetails.applicationVisa }}</td>
            </tr>
            <tr class="border-b">
              <td class="font-semibold text-gray-600 py-2">Job Summary:</td>
              <td class="text-gray-800 py-2">{{ jobDetails.jobSummary }}</td>
            </tr>
            <tr class="border-b">
              <td class="font-semibold text-gray-600 py-2">Job Description:</td>
              <td class="text-gray-800 py-2">{{ jobDetails.jobDescription }}</td>
            </tr>
            <tr class="border-b">
              <td class="font-semibold text-gray-600 py-2">Job Requirements:</td>
              <td class="text-gray-800 py-2">{{ jobDetails.jobRequirements }}</td>
            </tr>
          </tbody>
        </table>
        <div class="mt-6 flex justify-end">
          <button @click="closeModal" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg shadow-md">
            Close
          </button>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  
  const props = defineProps({
    isOpen: Boolean,
    jobDetails: Object,
  });
  
  const emit = defineEmits(['close']);
  
  const closeModal = () => {
    emit('close');
  };
  </script>
  
  <style scoped>
  /* Custom styles can be added here, if needed */
  </style>
  