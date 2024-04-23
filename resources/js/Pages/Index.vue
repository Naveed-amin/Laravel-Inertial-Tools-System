<script setup>
import Navbar from './Components/Navbar.vue';
import LocateIp from './Components/LocateIp.vue';
import LocationFinder from './Components/LocationFinder.vue';
</script>

<template>
  <div class="container-fluid">
    <Navbar></Navbar>

    <div class="container mt-4">
      <div class="d-flex p-2 ml-5d-flex justify-content-around">
        <LocateIp></LocateIp>
      <LocationFinder></LocationFinder>
      </div>
    </div>
  </div>
</template>