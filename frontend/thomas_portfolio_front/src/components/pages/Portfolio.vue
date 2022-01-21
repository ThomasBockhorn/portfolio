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
    <div class="d-flex flex-wrap overflow-auto justify-content-center">
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
      errors: [],
      timer: ""
    };
  },
  components: {
    Project
  },
  created() {
    this.fetchData();
    this.timer = setInterval(this.fetchData, 10000);
  },
  methods: {
    fetchData() {
      axios
        .get("http://127.0.0.1:8000/api/guest/projects")
        .then(response => {
          this.projects = response.data.data;
        })
        .catch(e => {
          this.errors.push(e);
        });
    }
  },
  beforeUnmount() {
    clearInterval(this.timer);
  }
};
</script>

<style></style>
