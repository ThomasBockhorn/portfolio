<template>
  <div id="mainPortfolio">
    <MainBanner v-bind:mainComponentName="this.location"></MainBanner>
    <PortfolioComponent></PortfolioComponent>
  </div>
</template>

<script>
import PortfolioComponent from "../components/portfolio/PortfolioComponent.vue";
import MainBanner from "../components/mainBanner/MainBanner.vue";

/**
 * Portfolio page
 */
export default {
  components: {
    MainBanner,
    PortfolioComponent,
  },
  data() {
    return {
      location: "portfolio",
    };
  },
};
</script>

<style scoped>
</style>
