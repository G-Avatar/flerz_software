<template>
    <div class="flex flex-col-2">
      <div class="p-6 w-full">
      <h1 class="text-2xl font-bold mb-4">Recruitment Funnel</h1>
      <svg ref="funnelChart" class="border border-gray-300" width="400" height="600"></svg>
    </div>
      <div class="p-4 bg-gray-50 rounded-lg shadow-md">
        <div class="flex justify-end">
          <button class="m-1 px-3 py-2 rounded transition duration-200 hover:bg-blue-400 bg-blue-600 text-white font-semibold">
            <i class="pi pi-plus flex items-center"></i> Add Job
          </button>
        </div>
      <div class="mb-6">
        <h2 class="font-semibold text-lg mb-2">Filter by:</h2>
        <div class="grid grid-cols-3 gap-4">
          <div>
            <h3 class="font-semibold">Country:</h3>
            <div class="flex flex-wrap">
              <button
                v-for="country in uniqueCountries"
                :key="country"
                @click="toggleCountry(country)"
                :class="{
                  'bg-blue-500 text-white': selectedCountries.includes(country),
                  'bg-gray-200': !selectedCountries.includes(country)
                }"
                class="m-1 px-3 py-2 rounded transition duration-200 hover:bg-blue-400"
              >
                {{ country }}
              </button>
            </div>
          </div>
  
          <div>
            <h3 class="font-semibold">Industry:</h3>
            <div class="flex flex-wrap">
              <button
                v-for="industry in uniqueIndustries"
                :key="industry"
                @click="toggleIndustry(industry)"
                :class="{
                  'bg-blue-500 text-white': selectedIndustries.includes(industry),
                  'bg-gray-200': !selectedIndustries.includes(industry)
                }"
                class="m-1 px-3 py-2 rounded transition duration-200 hover:bg-blue-400"
              >
                {{ industry }}
              </button>
            </div>
          </div>
  
          <div>
            <h3 class="font-semibold">Jobs Available:</h3>
            <div class="flex flex-wrap">
              <button
                v-for="jobs in uniqueJobsAvailable"
                :key="jobs"
                @click="toggleJobsAvailable(jobs)"
                :class="{
                  'bg-blue-500 text-white': selectedJobsAvailable.includes(jobs),
                  'bg-gray-200': !selectedJobsAvailable.includes(jobs)
                }"
                class="m-1 px-3 py-2 rounded transition duration-200 hover:bg-blue-400"
              >
                {{ jobs }}
              </button>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Table -->
      <table class="min-w-full border-collapse border border-gray-300 rounded-lg shadow overflow-hidden">
        <thead class="bg-blue-600 text-white">
          <tr>
            <th class="border border-gray-300 px-4 py-2">Job No.</th>
            <th class="border border-gray-300 px-4 py-2">Job Details</th>
            <th class="border border-gray-300 px-4 py-2">Keywords</th>
            <th class="border border-gray-300 px-4 py-2">Currency</th>
            <th class="border border-gray-300 px-4 py-2">Country</th>
            <th class="border border-gray-300 px-4 py-2">Min. Salary</th>
            <th class="border border-gray-300 px-4 py-2">Max. Salary</th>
            <th class="border border-gray-300 px-4 py-2">Visa Sponsorship</th>
            <th class="border border-gray-300 px-4 py-2">No. of Applicants</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="job in filteredJobs" :key="job.jobNo" class="border-b hover:bg-gray-100" @click="openModal(job)">
            <td class="border border-gray-300 px-4 py-2 text-center">{{ job.jobNo }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ job.jobDetails }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ job.keywords }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ job.currency }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ job.country }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ job.minSalary }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ job.maxSalary }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ job.applicationVisa }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ job.noOfApplicants }}</td>
          </tr>
        </tbody>
      </table>
      <JobDetailsModal :isOpen="isModalOpen" :jobDetails="selectedJob" @close="closeModal" />
    </div>
    </div>
    
  </template>
  
  <script setup>
  import { ref, onMounted, computed } from 'vue';
  import JobDetailsModal from './JobDetailsModal.vue';
  import * as d3 from 'd3';

  const isModalOpen = ref(false);
const selectedJob = ref(null);

const openModal = (job) => {
  selectedJob.value = job;
  isModalOpen.value = true;
};

const closeModal = () => {
  isModalOpen.value = false;
  selectedJob.value = null; // Clear selected job on close
};
  
  // Sample job data
  const jobs = ref([
    {
      jobNo: 1,
      jobDetails: "Software Engineer",
      keywords: "JavaScript, Vue",
      currency: "USD",
      minSalary: 50000,
      maxSalary: 80000,
      applicationVisa: "Yes",
      noOfApplicants: 10,
      country: "USA",
      industry: "Technology",
      jobsAvailable: "Full-time",
    },
    {
      jobNo: 2,
      jobDetails: "Data Scientist",
      keywords: "Python, Data Analysis",
      currency: "USD",
      minSalary: 60000,
      maxSalary: 90000,
      applicationVisa: "No",
      noOfApplicants: 5,
      country: "Canada",
      industry: "Data Science",
      jobsAvailable: "Part-time",
    },
    {
      jobNo: 3,
      jobDetails: "Product Manager",
      keywords: "Agile, Scrum",
      currency: "USD",
      minSalary: 70000,
      maxSalary: 100000,
      applicationVisa: "Yes",
      noOfApplicants: 8,
      country: "USA",
      industry: "Management",
      jobsAvailable: "Full-time",
    },
    // Add more job data as needed
  ]);
  
  const selectedCountries = ref([]);
  const selectedIndustries = ref([]);
  const selectedJobsAvailable = ref([]);
  
  // Computed properties to get unique values for slicers
  const uniqueCountries = computed(() => {
    return [...new Set(jobs.value.map(job => job.country))];
  });
  
  const uniqueIndustries = computed(() => {
    return [...new Set(jobs.value.map(job => job.industry))];
  });
  
  const uniqueJobsAvailable = computed(() => {
    return [...new Set(jobs.value.map(job => job.jobsAvailable))];
  });
  
  // Filtered jobs based on selected slicers
  const filteredJobs = computed(() => {
    return jobs.value.filter(job => {
      const matchesCountry = selectedCountries.value.length > 0 ? selectedCountries.value.includes(job.country) : true;
      const matchesIndustry = selectedIndustries.value.length > 0 ? selectedIndustries.value.includes(job.industry) : true;
      const matchesJobsAvailable = selectedJobsAvailable.value.length > 0 ? selectedJobsAvailable.value.includes(job.jobsAvailable) : true;
  
      return matchesCountry && matchesIndustry && matchesJobsAvailable;
    });
  });
  
  // Methods to toggle selected slicers
  const toggleCountry = (country) => {
    const index = selectedCountries.value.indexOf(country);
    if (index === -1) {
      selectedCountries.value.push(country);
    } else {
      selectedCountries.value.splice(index, 1);
    }
  };
  
  const toggleIndustry = (industry) => {
    const index = selectedIndustries.value.indexOf(industry);
    if (index === -1) {
      selectedIndustries.value.push(industry);
    } else {
      selectedIndustries.value.splice(index, 1);
    }
  };
  
  const toggleJobsAvailable = (jobs) => {
    const index = selectedJobsAvailable.value.indexOf(jobs);
    if (index === -1) {
      selectedJobsAvailable.value.push(jobs);
    } else {
      selectedJobsAvailable.value.splice(index, 1);
    }
  };
  
  const funnelData = [
    { label: 'Prospects', count: 10 },
    { label: 'CV Sent', count: 8 },
    { label: 'For Interview', count: 5 },
    { label: 'Offer', count: 2 },
    { label: 'Acceptance', count: 1 },
    { label: 'Day 1', count: 1 },
  ];
  
  const funnelChart = ref(null);
  
  const drawFunnel = () => {
    const svg = d3.select(funnelChart.value);
    const width = 250;
    const height = 500;
    const margin = { top: 20, right: 20, bottom: 20, left: 20 };
  
    const totalHeight = height - margin.top - margin.bottom;
    const segmentHeight = totalHeight / funnelData.length;
  
    funnelData.forEach((stage, index) => {
      const x0 = (width / 2) - (stage.count * 10); 
      const x1 = (width / 2) + (stage.count * 10);
      const y0 = margin.top + index * segmentHeight;
      const y1 = y0 + segmentHeight;
  
      svg.append("polygon")
        .attr("points", `${x0},${y0} ${x1},${y0} ${x1},${y1} ${x0},${y1}`)
        .style("fill", d3.schemeCategory10[index % 10])
        .style("stroke", "black");
      
      svg.append("text")
        .attr("x", (x0 + x1) / 2) 
        .attr("y", y0 + segmentHeight / 2)
        .attr("text-anchor", "middle")
        .text(stage.count)
        .style("fill", "black");
  
      svg.append("text")
        .attr("x", x1 + 5) 
        .attr("y", y0 + segmentHeight / 2)
        .attr("text-anchor", "start")
        .text(stage.label)
        .style("fill", "black");
    });
  };
  
  onMounted(() => {
    drawFunnel();
  });
  </script>
  
  <style scoped>
  svg {
    border: 1px solid #ddd;
  }
  </style>
  