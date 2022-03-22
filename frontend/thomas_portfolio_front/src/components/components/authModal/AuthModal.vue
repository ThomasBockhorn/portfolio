<template>
  <div class="modal-overlay">
    <div class="modal" tabindex="-1">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Admin List of Projects</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
              @click="close"
            ></button>
          </div>
          <div class="modal-body text-center">
            <div class="list-group">
              <div v-for="project in projects" :key="project.id">
                <AuthProject :project="project" @clicked="deleteProject"></AuthProject>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div>
              <button class="btn-outline-secondary btn mb-3">
                Add A Project
              </button>
            </div>
            <nav aria-label="crud navigation">
              <ul class="pagination pagination-sm">
                <div v-for="page in totalPages" :key="page">
                  <li
                    class="page-item"
                    @click="tab = page"
                    :class="{ active: tab === page }"
                  >
                    <a
                      class="page-link"
                      aria-current="page"
                      @click="fetchData(page)"
                      >{{ page }}</a
                    >
                  </li>
                </div>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
/**
 * This modal will all the user to add, update, and delete projects.
 * This is the child of the LoginComponent
 */

import AuthProject from "./project/authProject.vue";

export default {
  name: "AuthModal",
  data() {
    return {
      tab: 1,
      totalPages: 0,
      projects: [],
    };
  },
  components: {
    AuthProject,
  },
  mounted() {
    this.fetchData(1);
  },
  methods: {
    
    close() {
      this.$emit("close");
    },

    /**
     * fetchData will fetch the data and populate it
     *
     * @param {Integer} page 
     * @return void
     */
    async fetchData(page) {
      await this.$store.dispatch("retrieveProjects", page);
      this.projects = this.$store.getters.auth_Projects;
      this.totalPages = this.$store.getters.auth_Pagination.last_page;
    },

    /**
     * Deletes a project
     *
     * @param {Integer} id 
     * @return void
     */
    deleteProject(id){
      this.$store.dispatch("removeProject", id);
      this.projects = this.$store.getters.auth_Projects;
      this.totalPages = this.$store.getters.auth_Pagination.last_page;
    }
  },
};
</script>

<style scoped>
.modal {
  display: block;
}
</style>