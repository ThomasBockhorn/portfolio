<template>
  <div class="modal-overlay">
    <div class="modal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"></h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
              @click="close"
            ></button>
          </div>
          <div class="modal-body text-center">Are you sure you want to Exit?</div>
          <div class="modal-footer">
            <button class="btn btn-outline-dark" @click="exit">Yes</button>
            <button class="btn btn-outline-dark" @click="close">No</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
/**
 * This component will exit the login/register modal.  It is the child of the LoginComponent
 */
export default {
  name: "ExitWarning",
  methods: {
    /**
     * This method will close the modal but not the login/register modal
     *
     * @return void
     */
    close() {
      this.$emit("close");
    },
    /**
     * This will close the login/register modal
     *
     * @return void
     */
    exit(){
      this.$emit("closeModel");
    }
  },
};
</script>

<style scoped>
.modal {
  display: block;
}

.modal-overlay {
  position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.8);
    display: flex;
    justify-content: center;
    align-items: center;
}

.modal-header{
    border-bottom: 0 none;
}

.modal-footer{
    border-top: 0 none;
}
</style>