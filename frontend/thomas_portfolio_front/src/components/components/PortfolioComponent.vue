<template>
  <div>
    <div id="portfolio">
      <div class="container-fluid mt-5">
        <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
            <form class="d-flex mt-3">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Project"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
          </div>
        </nav>
        <div
          class="d-flex flex-wrap overflow-auto justify-content-center"
          v-if="downLoadReady"
        >
          <div v-for="project in projects.slice(0,10)" :key="project.id">
            <Project :project="project"></Project>
          </div>
        </div>
      </div>
    </div>
    <PaginationComponent></PaginationComponent>
  </div>
</template>

<script>
import axios from "axios";
import Project from "../components/projects/Project.vue";
import PaginationComponent from "../components/pagination/PaginationComponent.vue";

export default {
  data() {
    return {
      projects: [],
      downLoadReady: false,
      location: "portfolio",
    };
  },
  components: {
    Project,
    PaginationComponent
  },
  async mounted() {
    this.fetchData();
  },
  methods: {
    fetchData() {
      axios
        .get("http://127.0.0.1:8000/api/guest/projects")
        .then((response) => {
          this.projects = response.data.data;
        })
        .catch((e) => {
          console.log(e);
        })
        .finally(() => {
          this.downLoadReady = true;
        });
    },
  },
};
</script>

<style scoped>
</style>