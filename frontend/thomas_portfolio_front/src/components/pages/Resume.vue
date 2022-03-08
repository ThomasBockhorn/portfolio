<template>
  <div>
    <MainBanner v-bind:mainComponentName="this.location"></MainBanner>
    <ResumeComponent></ResumeComponent>
  </div>
</template>

<script>
import MainBanner from "../components/mainBanner/MainBanner.vue";
import ResumeComponent from "../components/resume/ResumeComponent.vue";

/**
 * Resume page
 */
export default {
  components: {
    MainBanner,
    ResumeComponent,
  },
  data() {
    return {
      location: "resume",
    };
  },
};
</script>

<style></style>
