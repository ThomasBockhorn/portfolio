<template>
  <div>
    <MainBanner v-bind:mainComponentName="this.location"></MainBanner>
    <ContactComponent></ContactComponent>
  </div>
</template>

<script>
import MainBanner from "../components/mainBanner/MainBanner.vue";
import ContactComponent from "../components/contact/ContactComponent.vue";

/**
 * Contact page
 */
export default {
  components: {
    MainBanner,
    ContactComponent,
  },
  data() {
    return {
      location: "contact",
    };
  },
};
</script>
