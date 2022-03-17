<template>
  <form>
    <div class="mb-3">
      <label for="name">Name:</label>
      <input
        type="text"
        class="form-control"
        id="name"
        aria-describedby="name"
        v-model="name"
      />
      <label for="InputEmail1" class="form-label">Email:</label>
      <input
        type="email"
        class="form-control"
        id="InputEmail1"
        aria-describedby="email"
        v-model="email"
      />
    </div>
    <div class="mb-3">
      <label for="InputPassword" class="form-label">Password:</label>
      <input
        type="password"
        class="form-control"
        id="InputPassword"
        v-model="password"
      />
    </div>
    <label for="VerifyPassword" class="form-label">Verify Password:</label>
    <input
      type="password"
      class="form-control"
      id="VerifyPassword"
      aria-describedby="verify passwordl"
      v-model="verifyPassword"
    />
    <button
      type="submit"
      class="btn btn-outline-success mt-3 mb-3"
      @click="submitRegistration"
    >
      Submit
    </button>
  </form>
</template>

<script>
//import axios from "axios";

/**
 * This is the registration component.  Its the child of LoginComponent.  It allows the user
 * to register and get access to the projects.
 */
export default {
  name: "RegistrationForm",
  data() {
    return {
      name: "",
      email: "",
      password: "",
      verifyPassword: "",
      token: "",
    };
  },
  methods: {
   /**
    * Submits user Input into the database for registration
    *
    * @param {any} e 
    * @return void
    */
    submitRegistration(e) {
      e.preventDefault();
      
      //User Input
      const userInput = {
        name: this.name,
        email: this.email,
        password: this.password,
      };

      this.$store.dispatch("submitRegistration", userInput);
      this.$emit("backToLogin");
    },
  },
};
</script>