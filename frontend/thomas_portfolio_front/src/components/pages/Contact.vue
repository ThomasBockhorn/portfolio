<template>
    <div>
        <MainBanner></MainBanner>
        <ContactComponent></ContactComponent>
    </div>
</template>

<script>
import MainBanner from "../components/MainBanner.vue";
import ContactComponent from "../components/ContactComponent.vue";

export default {
    components:{
        MainBanner,
        ContactComponent
    }
};
</script>

<style></style>
