<template>
    <div class="p-6 w-full">
      <h1 class="text-2xl font-bold mb-4">Recruitment Funnel</h1>
      <svg ref="funnelChart" class="border border-gray-300" width="400" height="600"></svg>
    </div>
  </template>
  
  <script setup>
  import { ref, onMounted } from 'vue';
  import * as d3 from 'd3';
  
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
  
    // Calculate the total height for each segment
    const totalHeight = height - margin.top - margin.bottom;
    const segmentHeight = totalHeight / funnelData.length;
  
    funnelData.forEach((stage, index) => {
      const x0 = (width / 2) - (stage.count * 10); // Adjust the width based on count
      const x1 = (width / 2) + (stage.count * 10);
      const y0 = margin.top + index * segmentHeight;
      const y1 = y0 + segmentHeight;
  
      // Draw funnel segment
      svg.append("polygon")
        .attr("points", `${x0},${y0} ${x1},${y0} ${x1},${y1} ${x0},${y1}`)
        .style("fill", d3.schemeCategory10[index % 10])
        .style("stroke", "black");
      
      // Add count text in the center
      svg.append("text")
        .attr("x", (x0 + x1) / 2) // Center the count text
        .attr("y", y0 + segmentHeight / 2)
        .attr("text-anchor", "middle")
        .text(stage.count)
        .style("fill", "black");
  
      // Add label text on the right
      svg.append("text")
        .attr("x", x1 + 5) // Position it slightly to the right of the funnel segment
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
  