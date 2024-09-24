<template>
    <div class="p-4">
        <RouterLink 
      to="/" 
      class="w-24 flex items-center space-x-2 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-200"
    >
      <i class="pi pi-arrow-left"></i>
      <span class="font-semibold">Back</span>
    </RouterLink>   
      <h1 class="text-3xl font-bold mb-6 text-center">Careers</h1>
  
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div
          v-for="job in filteredJobs"
          :key="job.jobNo"
          class="bg-white shadow-lg rounded-lg p-4 hover:shadow-xl transition-shadow duration-300 flex flex-col"
        >
          <img
            :src="job.image"
            alt="Job Image"
            class="h-40 w-full object-cover rounded-t-lg"
          />
          <div class="flex-grow p-4">
            <h2 class="text-xl font-semibold">{{ job.jobDetails }}</h2>
            <p class="text-gray-600 mt-2"><span class="font-bold">Description:</span> {{ job.jobDescription }}</p>
            <p class="text-gray-600 mb-2"><span class="font-bold">Requirements:</span> {{ job.requirements }}</p>
          </div>
          <div class="p-4">
            <button
              class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition duration-200"
              @click="applyForJob(job)"
            >
              Apply Now
            </button>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref, computed } from 'vue';
  
  // Sample job data with images
  const jobs = ref([
    {
      jobNo: 1,
      jobDetails: "Software Engineer",
      jobDescription: "Develop and maintain web applications using modern technologies.",
      requirements: "Experience in JavaScript, Vue, and Node.js.",
      image: "https://via.placeholder.com/300x200.png?text=Software+Engineer", // Replace with actual images
    },
    {
      jobNo: 2,
      jobDetails: "Data Scientist",
      jobDescription: "Analyze complex data sets to inform business decisions.",
      requirements: "Proficiency in Python, data analysis, and machine learning.",
      image: "https://via.placeholder.com/300x200.png?text=Data+Scientist", // Replace with actual images
    },
    {
      jobNo: 3,
      jobDetails: "Product Manager",
      jobDescription: "Oversee product development and ensure alignment with market needs.",
      requirements: "Strong communication skills and experience in Agile methodologies.",
      image: "https://via.placeholder.com/300x200.png?text=Product+Manager", // Replace with actual images
    },
    // Add more job data with images as needed
  ]);
  
  const selectedCountries = ref([]);
  const selectedIndustries = ref([]);
  const selectedJobsAvailable = ref([]);
  
  // Computed properties to filter jobs based on selected slicers
  const filteredJobs = computed(() => {
    return jobs.value.filter(job => {
      const matchesCountry = selectedCountries.value.length > 0 ? selectedCountries.value.includes(job.country) : true;
      const matchesIndustry = selectedIndustries.value.length > 0 ? selectedIndustries.value.includes(job.industry) : true;
      const matchesJobsAvailable = selectedJobsAvailable.value.length > 0 ? selectedJobsAvailable.value.includes(job.jobsAvailable) : true;
  
      return matchesCountry && matchesIndustry && matchesJobsAvailable;
    });
  });
  
  // Method to handle job application
  const applyForJob = (job) => {
    // Implement your application logic here
    alert(`Applying for: ${job.jobDetails}`);
  };
  </script>
  
  <style scoped>
  /* Add any additional styles here */
  </style>
  