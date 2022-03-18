<template>
  <form>
    <div class="mb-3">
      <label for="InputEmail1" class="form-label">Email address</label>
      <input
        type="email"
        class="form-control"
        id="InputEmail1"
        aria-describedby="emailHelp"
        v-model="email"
      />
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input
        type="password"
        class="form-control"
        id="exampleInputPassword1"
        v-model="password"
      />
    </div>
    <button
      type="submit"
      class="btn btn-outline-success"
      @click="loginSubmission"
    >
      Submit
    </button>
  </form>
</template>

<script>
//import axios from "axios";

/**
 * This is the login form.  Its the child of the LoginComponent.
 */
export default {
  name: "LoginForm",
  data() {
    return {
      email: "",
      password: "",
    };
  },
  methods: {
    /**
     * loginSubmission submits a request to the server to login to the admin api
     *
     * @param {event} e 
     * @return void
     */
    async loginSubmission(e) {
      e.preventDefault();
      
      const userInfo = {
        email: this.email,
        password: this.password
      };

      await this.$store.dispatch("login", userInfo);

      if(this.$store.getters.successful){
        this.$emit("successful");
      } else {
        alert('Wrong info!');
      }
    },
  },
};
</script>