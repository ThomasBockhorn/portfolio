<template>
    <div>
        <MainBanner v-bind:mainComponentName="this.location"></MainBanner>
        <ResumeComponent></ResumeComponent>
    </div>
</template>

<script>
import MainBanner from "../components/MainBanner.vue";
import ResumeComponent from "../components/ResumeComponent.vue";

export default {
    components:{
        MainBanner,
        ResumeComponent
    },
    data(){
        return{
            location: "resume"
        }
    }

};
</script>

<style></style>
