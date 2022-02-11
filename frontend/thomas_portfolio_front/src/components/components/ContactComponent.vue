<template>
  <div class="container mt-5">
    <div class="row">
      <div class="col text-center">
        <h3>Contact Form</h3>
      </div>
      <form class="row g-3">
        <div class="col-md-6">
          <label for="firstName" class="form-label">First Name</label>
          <input
            type="text"
            class="form-control"
            id="firstName"
            placeholder="Theodore"
          />
        </div>
        <div class="col-md-6">
          <label for="lastName" class="form-label">Last Name</label>
          <input
            type="text"
            class="form-control"
            id="lastName"
            placeholder="Roosevelt"
          />
        </div>
        <div class="col-12">
          <label for="email" class="form-label">Email</label>
          <input
            type="email"
            class="form-control"
            id="email"
            placeholder="Theodore.Roosevelt@Bully.com"
          />
        </div>
        <div class="col-12">
          <label for="message" class="form-label">Message</label>
          <div class="form-floating">
            <textarea
              class="form-control"
              placeholder="Leave a comment here"
              id="message"
              style="height: 100px"
            ></textarea>
            <label for="message">Enter your message here</label>
          </div>
        </div>
        <div class="col-12 mb-5">
          <button type="submit" class="btn btn-primary">Send</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
</style>