<template>
    <main>
        <Header v-if="$route.meta.header === true"/>
        <transition name="fade" mode="out-in">
            <routerView></routerView>
        </transition>
        <Footer v-if="$route.meta.header === true"/>
    </main>
</template>

<script>
import Header from "./components/Header.vue";
import Footer from "./components/Footer.vue";

export default {
    name: "App",
    components: {
        Header,
        Footer
    }
};
</script>

<style scoped>
   
    .fade-enter-active,
    .fade-leave-active {
        transition: opacity 0.5s ease;
    }

    .fade-enter-from,
    .fade-leave-to {
        opacity: 0;
    }
</style>
