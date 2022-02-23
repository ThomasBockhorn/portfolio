<template>
  <div>
    <div id="portfolio">
      <div class="container-fluid">
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
            <div class="d-flex">
              <button id="edit">
                <i class="fas fa-edit"></i>
              </button>
            </div>
          </div>
        </nav>
        <div class="d-flex flex-wrap overflow-auto justify-content-center mt-5">
          <div v-for="project in projects" :key="project.id" class="m-2">
            <Project :project="project"></Project>
          </div>
        </div>
      </div>
    </div>
    <PaginationComponent
      :totalPages="totalPages"
      @clicked="getPage"
    ></PaginationComponent>
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
      location: "portfolio",
      parsedMeta: {},
      totalPages: 0,
    };
  },
  components: {
    Project,
    PaginationComponent,
  },
  async mounted() {
    this.fetchData();
  },
  methods: {
    fetchData(page = 1) {
      axios
        .get("http://127.0.0.1:8000/api/guest/projects?page=" + page)
        .then((response) => {
          this.projects = response.data.data.data;
          this.fetchMeta(response.data.data.pagination);
        })
        .catch((e) => {
          console.log(e);
        });
    },
    fetchMeta(metaData) {
      //This creates an object that holds the meta data
      for (let index in metaData) {
        this.parsedMeta[index] = metaData[index];
      }
      //gets the last page
      this.totalPages = this.parsedMeta["last_page"];
    },
    getPage(page) {
      this.fetchData(page);
    },
  },
};
</script>

<style scoped>
#edit {
  width: 100px;
  border: none;
  background: transparent;
}
</style>