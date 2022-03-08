<template>
  <div id="contact" class="container mt-5">
    <div class="row mt-5">
      <div class="col text-center">
        <h3>Contact Form</h3>
      </div>
      <form class="row g-3">
        <div class="col-md-6">
          <label for="firstName" class="form-label">Name</label>
          <input
            type="text"
            class="form-control"
            id="firstName"
            placeholder="Theodore Roosevelt"
            v-model="name"
          />
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">Email</label>
          <input
            type="email"
            class="form-control"
            id="email"
            placeholder="Theodore.Roosevelt@Bully.com"
          />
        </div>
        <div class="col-md-12">
          <label for="message" class="form-label">Message</label>
          <div class="form-floating">
            <textarea
              class="form-control"
              placeholder="Leave a comment here"
              id="message"
              style="height: 150px"
            ></textarea>
            <label for="message">Enter your message here</label>
          </div>
        </div>
        <div class="col-12 mb-5">
          <input
            type="submit"
            class="btn btn-outline-light"
            value="Send"
            @click="sendEmail"
          />
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import emailjs from "emailjs-com";

/**
 * Contact allows the visitor in conjunction with emailjs.com to send email notifications to my email account.
 */
export default {
  name: "Contact",
  data() {
    return {
      name: "",
      email: "",
      message: "",
    };
  },
  methods: {
    sendEmail(e) {
      try {
        emailjs.sendForm(
          "tecktonetMailService",
          "template_sx0lr8w",
          e.target,
          "tecktonetMail",
          {
            name: this.name,
            email: this.email,
            message: this.message,
          }
        );
      } catch (error) {
        console.log({ error });
      }
      (this.name = ""), (this.email = ""), (this.message = "");
    },
  },
};
</script>

<style scoped>
label,
h3 {
  font-family: "Libre Baskerville", serif;
  color: white;
}
</style>