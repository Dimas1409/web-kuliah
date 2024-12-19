<template>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card border-0 rounded shadow">
          <div class="card-body">
            <form @submit.prevent="storePost">
              <div class="mb-3">
                <label class="form-label fw-bold">Image</label>
                <input
                  type="file"
                  class="form-control"
                  @change="handleFileChange"
                />
                <div v-if="errors.image" class="alert alert-danger mt-2">
                  <span>{{ errors.image[0] }}</span>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label fw-bold">Title</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="title"
                  placeholder="Title Post"
                />
                <div v-if="errors.title" class="alert alert-danger mt-2">
                  <span>{{ errors.title[0] }}</span>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label fw-bold">Content</label>
                <textarea
                  class="form-control"
                  v-model="content"
                  rows="5"
                  placeholder="Content Post"
                ></textarea>
                <div v-if="errors.content" class="alert alert-danger mt-2">
                  <span>{{ errors.content[0] }}</span>
                </div>
              </div>

              <button
                type="submit"
                class="btn btn-md btn-primary rounded-sm shadow border-0"
              >
                Save
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>

import { ref } from 'vue';
import { useRouter } from 'vue-router';
import api from '../api/index.js'; 

const router = useRouter();

const image = ref(null);
const title = ref('');
const content = ref('');
const errors = ref({});

const handleFileChange = (event) => {
  image.value = event.target.files[0];
};

const storePost = async () => {
  const formData = new FormData();
  formData.append('image', image.value);
  formData.append('title', title.value);
  formData.append('content', content.value);
  
  try {
    await api.post('',formData);
    // Redirect to posts list after successful creation
    router.push({ path: '/seeall' });
  } catch (error) {
    // Catch any validation or API error
    if (error.response && error.response.data) {
      errors.value = error.response.data.errors || {};
    }
  }
};
</script>

<style src="../assets/CSS/Blog.css"></style>
