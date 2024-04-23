<template>
    <div class="card">
        <img class="card-img" src="https://via.placeholder.com/300x200" alt="Card Image">
        <div class="card-content">
            <h2 class="card-title">Whats My IP</h2>
            <p class="card-description">This is a simple example of a beautiful card created using HTML and CSS.</p>
        </div>
        <div class="card-footer">
            <Link class="button" href="/locate_ip">Read More</Link>
        </div>
    </div>
</template>


<script setup>
import { Link } from '@inertiajs/vue3';
import Header from '../Layouts/Header.vue'


</script>

<style scoped>
  
  .card {
    width: 300px;
    height: 400px;
    border-radius: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
  }
  
  .card-img {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }
  
  .card-content {
    padding: 20px;
  }
  
  .card-title {
    font-size: 20px;
    font-weight: bold;
    margin: 0 0 10px;
    color: #333;
  }
  
  .card-description {
    font-size: 14px;
    color: #666;
  }
  
  .card-footer {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 10px 20px;
    background-color: #f0f0f0;
    border-top: 1px solid #ddd;
  }
  
  .card-footer .button {
    padding: 8px 16px;
    border: none;
    background-color: #3498db;
    color: #fff;
    font-size: 14px;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
  }
  .button:hover{
    background-color: #3445db;
  }

</style>
