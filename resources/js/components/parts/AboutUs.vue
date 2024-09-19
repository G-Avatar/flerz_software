<template>
  <div class="card-container p-6 border-2 border-gray-800 bg-teal-50 shadow-lg">
    <h1 class="text-center text-4xl font-bold text-teal-700 mb-4">About Us</h1>
    <p class="text-center text-lg text-gray-100 mb-6 p-5 bg-teal-500 shadow-md">
      FLERZ Management Consultancy Services is dedicated to providing innovative and strategic solutions tailored to enhance organizational performance and drive business growth. With a team of seasoned experts, FLERZ specializes in delivering comprehensive management consulting services that encompass operational efficiency, strategic planning, and technological integration. Our mission is to empower businesses with the insights and tools needed to achieve their objectives, streamline processes, and maximize their competitive edge in today’s dynamic market. At FLERZ, we are committed to fostering long-term success for our clients through personalized and results-driven consultancy.
    </p>
    <div class="timeline-container border border-black p-10 bg-gray-800 shadow-lg">
      <h1 class="text-center text-4xl font-bold mb-4 text-white">Our Timeline</h1>
      <Timeline :value="events" align="alternate" class="customized-timeline">
        <template #marker="slotProps">
          <span class="flex w-12 h-12 items-center justify-center text-white rounded-full shadow-lg" :style="{ backgroundColor: slotProps.item.color }">
            <i :class="slotProps.item.icon"></i>
          </span>
        </template>
        <template #content="slotProps">
          <Card class="mt-4 border-2 border-white p-4  shadow-md transition-transform transform hover:scale-105">
            <template #title>
              <h3 class="text-xl font-semibold text-white">{{ slotProps.item.status }}</h3>
            </template>
            <template #subtitle>
              <p class="text-sm text-white">{{ slotProps.item.date }}</p>
            </template>
            <template #content>
              <p class="text-white mb-4">{{ slotProps.item.description }}</p>
            </template>
          </Card>
        </template>
      </Timeline>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import Timeline from 'primevue/timeline';
import Card from 'primevue/card';

const events = ref([
  { 
    status: 'Launching of ECOS', 
    date: 'May 15, 2024', 
    icon: 'pi pi-circle', 
    color: '#607D8B', 
    description: 'The Enhanced Church Operation System is launched to promote digitalization of various churches and improve their archiving process.' 
  },
  { 
    status: 'Partnership with Ultra-Fine Copper Powder', 
    date: 'April 26, 2024', 
    icon: 'pi pi-circle', 
    color: '#607D8B', 
    description: 'Flerz Management Consultancy Services has been granted the authority to sell Ultra-Fine Copper Powder. Ultra-fine copper powder is highly valuable in various industrial applications.' 
  },
  { 
    status: 'Copyright Acquisition for the Enhanced Barangay Operations System', 
    date: 'January 18, 2024', 
    icon: 'pi pi-circle', 
    color: '#607D8B', 
    description: 'The copyright of Enhanced Barangay Operation System (EBOS) was obtained and disseminated to various barangays, especially in the Davao Region.' 
  },
  { 
    status: 'Foundation of FLERZ', 
    date: 'June 18, 2023', 
    icon: 'pi pi-circle', 
    color: '#607D8B', 
    description: 'Founded on June 18, 2023, FLERZ was created to address challenges in Tagum City, aiming to improve business processes and operations through strategic and operational support.' 
  }
]);
</script>

<style lang="scss" scoped>
.card-container {
  background: #e0f2f1; // Light background for the main container
  padding: 2rem;
  border-radius: 1rem;
}

.timeline-container {
  background: #000; // Dark background for the timeline container
  border-radius: 1rem; // Rounded corners for the container
}

.customized-timeline {
  .p-timeline-event {
    position: relative;
    padding-left: 4rem; // Increased for better spacing

    .p-timeline-event-opposite {
      border-left: 4px solid #9C27B0; // Color of the vertical line
      position: absolute;
      left: -2rem; // Adjusted for alignment
      top: 0;
      bottom: 0;
    }

    .p-timeline-event-content {
      position: relative;
      padding-left: 2.5rem; // Added extra space for the line
    }

    .p-timeline-event-marker {
      border: 3px solid #9C27B0; // Thicker border for the marker
      background-color: #fff; // White background for marker
      box-shadow: 0 0 4px rgba(0,0,0,0.2); // Shadow for better visibility
    }
  }

  .p-timeline-event-content {
    &:hover {
      background-color: #f1f1f1; // Light background on hover
    }
  }

  @media screen and (max-width: 960px) {
    .p-timeline-event {
      flex-direction: column;

      .p-timeline-event-opposite {
        flex: 0;
      }

      .p-timeline-event-content {
        padding-left: 1rem; // Adjust padding for mobile view
        text-align: center;
      }
    }
  }
}
</style>
