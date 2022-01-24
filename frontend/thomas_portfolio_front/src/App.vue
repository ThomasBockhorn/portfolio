<template>
    <main>
        <Header v-if="$route.meta.header === true"/>
        <routerView></routerView>
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

<style></style>
