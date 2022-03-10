<template>
  <div>
    <div id="portfolio">
      <div class="container-fluid mt-5">
        <ProjectNav></ProjectNav>
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
import Project from "../projects/Project.vue";
import PaginationComponent from "../pagination/PaginationComponent.vue";
import ProjectNav from "../projectNav/ProjectNav.vue";
import { store } from "../../../store/store.js";

/**
 * PortfolioComponent is where all the projects are displayed.
 */
export default {
  name:"PortfolioComponent",
  data() {
    return {
      //projects: [],
      location: "portfolio",
      //parsedMeta: {},
      totalPages: 5,
    };
  },
  components: {
    Project,
    PaginationComponent,
    ProjectNav,
  },
  created() {
    //this.fetchData();
    store.dispatch("getProjects");
    console.log(store.state.pagination.total);
    this.totalPages = store.state.pagination.last_page;
  },
  computed:{
    projects(){
      return store.state.projects;
    },
   // setTotalPages(){
   //   this.totalPages = store.state.pagination.total;
   // }
  },
  methods: {
    /**
     * fetchData fetches the project data using axios
     *
     * @param {Number} page 
     * @return void
     */
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
    /**
     * fetchMeta fetches the meta data used for pagination
     *
     * @param {object} metaData 
     * @return void
     */
    fetchMeta() {
      
      let metaData = this.store.state.pagination
      
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
.container-fluid {
  height: 100%;
}
</style>