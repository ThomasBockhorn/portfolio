<template>
  <div class="modal-overlay">
    <div class="modal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Exit</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
              @click="close"
            ></button>
          </div>
          <div class="modal-body">Are you sure you want to Exit?</div>
          <div class="modal-footer">
            <button class="btn btn-danger">Yes</button>
            <button class="btn btn-primary" @click="close">No</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
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
</style>