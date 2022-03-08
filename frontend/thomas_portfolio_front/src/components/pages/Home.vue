<template>
    <div>
        <MainBanner v-bind:mainComponentName="this.location"></MainBanner>
        <AboutComponent></AboutComponent>
    </div>
</template>

<script>
import MainBanner from "../components/MainBanner.vue";
import AboutComponent from "../components/about/AboutComponent.vue";

export default {
    components: {
        MainBanner,
        AboutComponent,
    },
    data(){
        return{
            location: "about"
        }
    }
};
</script>

<style></style>
