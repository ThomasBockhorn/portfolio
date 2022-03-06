<template>
  <div class="modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{ title }}</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
            @click="close"
          ></button>
        </div>
        <div class="modal-body">
          <transition name="modal-fade">
            <LoginComponent
              @clicked="nameOfForm"
              @closeModel="closeModel"
            ></LoginComponent>
          </transition>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import LoginComponent from "../modal/LoginComponent.vue";

/**
 * This is the main modal component.  It's child is the LoginComponent
 */
export default {
  name: "Modal",
  components: {
    LoginComponent,
  },
  data() {
    return {
      title: "Login",
    };
  },
  methods: {
    close() {
      this.$emit("close");
    },
    /**
     * This function changes the name of the form depending on what the form is present
     *
     * @param {String} formName 
     * @return void
     */
    nameOfForm(formName) {
      this.title = formName;
    },
    closeModel() {
      this.$emit("close");
    },
  },
};
</script>

<style scoped>
.modal {
  display: block;
}

.modal-fade-enter,
.modal-fade-leave-to {
  opacity: 0;
}

.modal-fade-enter-active,
.modal-fade-leave-active {
  transition: opacity 0.5s ease;
}
</style>