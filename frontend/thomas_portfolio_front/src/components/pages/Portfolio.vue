<template>
  <div class="container-fluid">
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Project" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <div class="d-flex flex-wrap overflow-auto justify-content-center" v-if="downLoadReady">
      <div v-for="project in projects" :key="project.id">
        <Project :project="project"></Project>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import Project from "./projects/Project.vue";

export default {
  data() {
    return {
      projects: [],
      downLoadReady: false
    };
  },
  components: {
    Project
  },
  async mounted() {
    this.fetchData();
  },
  methods: {
    fetchData() {
      axios
        .get("http://127.0.0.1:8000/api/guest/projects")
        .then(response => {
          this.projects = response.data.data;
        })
        .catch(e => {
          console.log(e);
        }).finally(() => {
          this.downLoadReady = true;
        });
    },
  }
};
</script>

<style></style>
