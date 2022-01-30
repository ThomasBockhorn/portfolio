<template>
    <main class="main">
        <Header v-if="$route.meta.header != false"/>  
        <router-view v-slot="{ Component }">
          <transition name="fade" mode="out-in">
              <component :is="Component" />
          </transition>
        </router-view>
        <Footer v-if="$route.meta.header != false"/>
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
  transition-duration: .50s;
}

.fade-enter-active {
  transition-delay: .50s;
}

.fade-enter, .fade-leave-active {
  opacity: 0
}
</style>
