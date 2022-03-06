<template>
  <div>
    <div>
      <LoginForm v-if="login" @successful="launchCrud"></LoginForm>
      <RegistrationForm
        v-if="registration"
        @backToLogin="showLogin"
      ></RegistrationForm>
    </div>
    <div class="modal-footer">
      <button class="btn btn-outline-dark" @click="showLogin">Login</button>
      <button class="btn btn-outline-dark" @click="showRegistration">
        Registration
      </button>
      <button class="btn btn-outline-dark" @click="showExit">Exit</button>
    </div>
    <transition name="modal-fade">
      <ExitWarning
        v-if="isExitVisible"
        @close="closeExit"
        @closeModel="closeModel"
      ></ExitWarning>
    </transition>
     <CrudModal v-if="successfulLogin" @close="closeCrud"></CrudModal>
  </div>
</template>

<script>
import LoginForm from "../login-form/LoginForm.vue";
import RegistrationForm from "../registration-form/RegistrationForm.vue";
import ExitWarning from "../exit-warning/ExitWarning.vue";
import CrudModal from "../../crudModal/CrudModal.vue";

export default {
  data() {
    return {
      registration: false,
      login: true,
      isExitVisible: false,
      nameOfForm: String,
      successfulLogin: false,
    };
  },
  components: {
    LoginForm,
    RegistrationForm,
    ExitWarning,
    CrudModal,
  },
  methods: {
    showRegistration() {
      this.registration = true;
      this.login = false;
      this.nameOfForm = "Register";
      this.$emit("clicked", this.nameOfForm);
    },
    showLogin() {
      this.registration = false;
      this.login = true;
      this.nameOfForm = "Login";
      this.$emit("clicked", this.nameOfForm);
    },
    showExit() {
      this.isExitVisible = true;
    },
    closeExit() {
      this.isExitVisible = false;
    },
    closeModel() {
      this.$emit("closeModel");
    },
    launchCrud(token) {
      if (token != 0) {
        this.successfulLogin = true;
      }
    },
    closeCrud(){
      this.successfulLogin = false;
    }
  },
};
</script>

<style scoped>
.modal-fade-enter,
.modal-fade-leave-to {
  opacity: 0;
}

.modal-fade-enter-active,
.modal-fade-leave-active {
  transition: opacity 0.5s ease;
}
</style>