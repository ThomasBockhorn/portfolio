<template>
  <form>
    <div class="mb-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" aria-describedby="name">
      <label for="InputEmail1" class="form-label">Email address</label>
      <input
        type="email"
        class="form-control"
        id="InputEmail1"
        aria-describedby="email"
      />
      <label for="VerifyEmail1" class="form-label">Verify Email address</label>
      <input
        type="email"
        class="form-control"
        id="VerifyEmail1"
        aria-describedby="verify-email"
      />
      <div id="email" class="form-text">
        We'll never share your email with anyone else.
      </div>
    </div>
    <div class="mb-3">
      <label for="InputPassword" class="form-label">Password</label>
      <input type="password" class="form-control" id="InputPassword" />
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</template>

<script>
export default {};
</script>

<style>
</style>