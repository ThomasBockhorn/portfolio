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
      @clicked="fetchData"
    ></PaginationComponent>
  </div>
</template>

<script>
import Project from "../projects/Project.vue";
import PaginationComponent from "../pagination/PaginationComponent.vue";
import ProjectNav from "../projectNav/ProjectNav.vue";

/**
 * PortfolioComponent is where all the projects are displayed.
 */
export default {
  name: "PortfolioComponent",
  data() {
    return {
      location: "portfolio",
      projects: [],
      pagination: {},
      totalPages: 0
    };
  },
  components: {
    Project,
    PaginationComponent,
    ProjectNav,
  },
  mounted() {
    this.fetchData(1);
  },
  computed: {
    findLastPage() {
      return this.totalPages;
    },
  },
  methods: {
    async fetchData(page) {
      await this.$store.dispatch("getProjects", page);
      this.projects = this.$store.getters.projects;
      this.totalPages = this.$store.getters.pagination.last_page;
    },
  },
};
</script>

<style scoped>
.container-fluid {
  height: 100%;
}
</style>