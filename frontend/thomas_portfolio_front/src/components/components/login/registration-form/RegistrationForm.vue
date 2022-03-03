<template>
  <form>
    <div class="mb-3">
      <label for="name">Name:</label>
      <input
        type="text"
        class="form-control"
        id="name"
        aria-describedby="name"
      />
      <label for="InputEmail1" class="form-label">Email:</label>
      <input
        type="email"
        class="form-control"
        id="InputEmail1"
        aria-describedby="email"
      />
    </div>
    <div class="mb-3">
      <label for="InputPassword" class="form-label">Password:</label>
      <input type="password" class="form-control" id="InputPassword" />
    </div>
    <label for="VerifyPassword" class="form-label">Verify Password:</label>
    <input
      type="password"
      class="form-control"
      id="VerifyPassword"
      aria-describedby="verify passwordl"
    />
    <button type="submit" class="btn btn-outline-success mt-3 mb-3">Submit</button>
  </form>
</template>

<script>
export default {
  data() {
    return {
      name: "",
      email: "",
    };
  },
};
</script>

<style>
</style>