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
      @click="loginSubmition"
    >
      Submit
    </button>
  </form>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      email: "",
      password: "",
    };
  },
  methods: {
    loginSubmition(e) {
      e.preventDefault();
      axios
        .post("http://127.0.0.1:8000/api/login", {
          email: this.email,
          password: this.password,
        })
        .then((response) => {
            this.$emit("successful", response.data.data.token);
        })
        .catch((error) => {
          console.log("Error: ", error.response.data.data);
        });
    },
  },
};
</script>

<style scoped>
</style>