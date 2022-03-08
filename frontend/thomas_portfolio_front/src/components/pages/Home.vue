<template>
  <div>
    <MainBanner v-bind:mainComponentName="this.location"></MainBanner>
    <AboutComponent></AboutComponent>
  </div>
</template>

<script>
import MainBanner from "../components/mainBanner/MainBanner.vue";
import AboutComponent from "../components/about/AboutComponent.vue";

/**
 * Home page that holds the main banner and about component
 */
export default {
  name: "Home",
  components: {
    MainBanner,
    AboutComponent,
  },
  data() {
    return {
      location: "about",
    };
  },
};
</script>
