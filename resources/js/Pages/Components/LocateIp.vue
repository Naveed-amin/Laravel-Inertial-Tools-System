<template>
  <div class="card" @click="flipCard">
    <div class="content" :class="{ 'is-flipped': isFlipped }">
      <div class="front">
        <img class="card-img" src="https://via.placeholder.com/300x200" alt="Card Image">
        <div class="card-content">
          <h2 class="card-title">Whats My IP</h2>
          <p class="card-description">This is a simple example of a beautiful card created using HTML and CSS.</p>
        </div>
      </div>
      <div class="back">
        <!-- New data to display on the back of the card -->
        <img class="card-img" src="https://via.placeholder.com/300x200" alt="Card Image">
        <div class="card-content">
          <h2 class="card-title">Your IP Is  {{ $page.props.user_ip }}</h2>
          <p class="card-description">This is a simple example of a beautiful card created using HTML and CSS.</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const isFlipped = ref(false);

function flipCard() {
  isFlipped.value = !isFlipped.value;
}
</script>

<style scoped>
.card {
  width: 300px;
  height: 400px;
  border-radius: 20px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  position: relative;
  cursor: pointer;
}

.content {
  position: absolute;
  width: 100%;
  height: 100%;
  transform-style: preserve-3d;
  transition: transform 0.5s;
}

.card:hover .content {
  transform: rotateY(180deg);
}

.front,
.back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.front {
  z-index: 2;
}

.back {
  transform: rotateY(180deg);
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
</style>
