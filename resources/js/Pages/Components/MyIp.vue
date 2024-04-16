<template>
    <div class="centered-content">
      <h2>{{ props.ip }}</h2>
    </div>
  </template>
  
  <script setup>
    import Navbar from './Navbar.vue';


  const props = defineProps(['ip']);
  </script>
  
  <style scoped>
  .centered-content {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }
  h2 {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    text-align: center;
    padding: 20px;
    border: 2px solid #3498db;
    border-radius: 10px;
  }
  </style>
x  