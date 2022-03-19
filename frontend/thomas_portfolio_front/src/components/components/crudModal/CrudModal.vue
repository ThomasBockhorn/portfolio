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
                <CrudProject :project="project"></CrudProject>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div>
              <button class="btn-outline-secondary btn mb-3">Add A Project</button>
            </div>
            <nav aria-label="crud navigation">
              <ul class="pagination pagination-sm">
                <li class="page-item active" aria-current="page">
                  <span class="page-link">1</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
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

import CrudProject from "./project/crudProject.vue";

export default {
  name: "CrudModal",
  components: {
    CrudProject,
  },
  computed: {
    projects() {
      return this.$store.getters.projects;
    },
  },
  methods: {
    /**
     * This method indicates to the parent to close this modal.
     *
     * @return void
     */
    close() {
      this.$emit("close");
    },
  },
};
</script>

<style scoped>
.modal {
  display: block;
}
</style>