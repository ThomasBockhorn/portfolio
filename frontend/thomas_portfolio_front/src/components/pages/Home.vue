<template>
    <div>
        <MainBanner></MainBanner>
        <AboutComponent></AboutComponent>
    </div>
</template>

<script>
import MainBanner from "../components/MainBanner.vue";
import AboutComponent from "../components/AboutComponent.vue";

export default {
    components:{
        MainBanner,
        AboutComponent
    }

};
</script>

<style></style>
