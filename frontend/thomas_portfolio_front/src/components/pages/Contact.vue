<template>
    <div>
        <MainBanner v-bind:mainComponentName="this.location"></MainBanner>
        <ContactComponent></ContactComponent>
    </div>
</template>

<script>
import MainBanner from "../components/MainBanner.vue";
import ContactComponent from "../components/contact/ContactComponent.vue";

export default {
    components:{
        MainBanner,
        ContactComponent
    },
    data(){
        return{
            location: "contact"
        }
    }
};
</script>

<style></style>
