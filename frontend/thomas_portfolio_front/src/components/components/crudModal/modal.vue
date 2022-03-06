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
          <div class="modal-body text-center">...</div>
          <div class="modal-footer">
            ...
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
/**
 * This modal will all the user to add, update, and delete projects.
 */
export default {
  name: 'CrudModal',
  methods: {
   /**
    * This method indicates to the parent to close this modal
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