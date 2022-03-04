<template>
  <div>
    <div>
      <LoginForm v-if="login"></LoginForm>
      <RegistrationForm v-if="registration" @backToLogin="showLogin"></RegistrationForm>
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
  </div>
</template>

<script>
import LoginForm from "../login/login-form/LoginForm.vue";
import RegistrationForm from "../login/registration-form/RegistrationForm.vue";
import ExitWarning from "../login/exit-warning/ExitWarning.vue";

export default {
  data() {
    return {
      registration: false,
      login: true,
      isExitVisible: false,
      nameOfForm: String,
    };
  },
  components: {
    LoginForm,
    RegistrationForm,
    ExitWarning,
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