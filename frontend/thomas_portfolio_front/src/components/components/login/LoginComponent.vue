<template>
  <div>
    <transition name="form-fade">
      <div>
        <LoginForm v-if="login"></LoginForm>
        <RegistrationForm v-if="registration"></RegistrationForm>
      </div>
    </transition>
    <div class="modal-footer">
      <button class="btn btn-primary" @click="showLogin">Login</button>
      <button class="btn btn-secondary" @click="showRegistration">
        Registration
      </button>
    </div>
  </div>
</template>

<script>
import LoginForm from "../login/login-form/LoginForm.vue";
import RegistrationForm from "../login/registration-form/RegistrationForm.vue";

export default {
  data() {
    return {
      registration: false,
      login: true,
    };
  },
  components: {
    LoginForm,
    RegistrationForm,
  },
  methods: {
    showRegistration() {
      this.registration = true;
      this.login = false;
    },
    showLogin() {
      this.registration = false;
      this.login = true;
    },
  },
};
</script>

<style scoped>
.form-fade-enter,
.form-fade-leave-to {
  opacity: 0;
}

.form-fade-enter-active,
.form-fade-leave-active {
  transition: opacity 0.5s ease;
}
</style>