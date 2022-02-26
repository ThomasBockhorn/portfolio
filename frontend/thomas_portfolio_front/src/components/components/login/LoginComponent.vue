<template>
  <div>
      <div>
        <LoginForm v-if="login"></LoginForm>
        <RegistrationForm v-if="registration"></RegistrationForm>
      </div>
    <div class="modal-footer">
      <button class="btn btn-primary" @click="showLogin">Login</button>
      <button class="btn btn-secondary" @click="showRegistration">
        Registration
      </button>
      <button class="btn btn-danger" @click="showExit">Exit</button>
    </div>
    <ExitWarning v-if="isExitVisible" @close="closeExit"></ExitWarning>
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
      nameOfForm: String
    };
  },
  components: {
    LoginForm,
    RegistrationForm,
    ExitWarning
  },
  methods: {
    showRegistration() {
      this.registration = true;
      this.login = false;
      this.nameOfForm = 'Register';
      this.$emit('clicked', this.nameOfForm);
    },
    showLogin() {
      this.registration = false;
      this.login = true;
      this.nameOfForm = 'Login';
      this.$emit('clicked', this.nameOfForm);
    },
    showExit(){
      this.isExitVisible = true;
    },
    closeExit(){
      this.isExitVisible = false;
    }
  },
};
</script>

<style scoped>

</style>