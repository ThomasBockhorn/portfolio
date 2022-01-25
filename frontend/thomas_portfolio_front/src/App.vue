<template>
    <main class="main">
        <Header v-if="$route.meta.header === true"/>    
        <transition name="fade" mode="out-in">
            <router-view :key="$route.fullPath"></router-view>
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
.fade-enter-active, .fade-leave-active {
  transition-property: opacity;
  transition-duration: .25s;
}

.fade-enter-active {
  transition-delay: .25s;
}

.fade-enter, .fade-leave-active {
  opacity: 0
}
</style>
