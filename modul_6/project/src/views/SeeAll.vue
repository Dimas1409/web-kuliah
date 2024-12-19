<script setup>
import { ref, onMounted } from 'vue';
import api from '../api/index.js';

// State untuk menyimpan daftar pekerjaan
const works = ref([]);


const fetchWorks = async () => {
  try {
    const response = await api.get();
    console.log(response.data);
    works.value = Array.isArray(response.data) ? response.data : response.data.data;

    works.value = await Promise.all(works.value.map(async work => {
      const imageUrl = work.image.startsWith('http') ? work.image : `http://localhost:8000/storage/posts/${work.image}`;
      const imageBlob = await fetch(imageUrl);  // Ambil gambar
      const imageObjectURL = URL.createObjectURL(await imageBlob.blob());  // Buat URL objek gambar

      return {
        ...work,
        image: imageObjectURL  // Gunakan URL objek gambar
      };
    }));
  } catch (error) {
    console.error('Error fetching works:', error);
  }
};


onMounted(() => {
  fetchWorks();
});
</script>

<template>
    <div>
      <main>
        <section id="works" class="works-section">
          <h2>My Works</h2>
          <div class="divider"></div>
          <div class="gallery">
            <div 
              v-if="works.length === 0"
              class="alert alert-danger text-center">
              No works available!
            </div>
            <div v-else v-for="(work, index) in works" :key="index" class="gallery-item">
              <img :src="work.image" :alt="work.title" />
              <h3>{{ work.title }}</h3>
              <p>{{ work.content }}</p>
            </div>
          </div>
        </section>
      </main>
    </div>
  </template>
  
<style src="../assets/CSS/SeeAll.css"></style>