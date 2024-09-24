<template>
    <div v-if="isOpen" class="modal">
      <div class="modal-content">
        <span class="close" @click="$emit('close')">&times;</span>
        <h2>Applicants for {{ jobDetails }}</h2>
        <table>
          <thead>
            <tr>
              <th>Name</th>
              <th>CV</th>
              <th>Mobile</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="applicant in applicants" :key="applicant.id">
              <td>{{ applicant.name }}</td>
              <td><a :href="applicant.cvUrl">Download</a></td>
              <td>{{ applicant.mobile }}</td>
              <td>{{ applicant.email }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </template>
  
  <script setup>
  import { defineProps } from 'vue';
  
  const props = defineProps({
    isOpen: Boolean,
    jobDetails: String,
    applicants: Array,
  });
  </script>
  
  <style scoped>
  .modal {
    /* Modal styles */
  }
  .modal-content {
    /* Content styles */
  }
  </style>
  