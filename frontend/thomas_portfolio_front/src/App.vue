<template>
    <main class="main">
        <Header v-if="$route.meta.header != false"/>  
        <router-view v-slot="{ Component }">
          <transition name="fade" mode="out-in" @before-enter="scrollTop">
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
    },
    methods:{
      scrollTop(){
        document.getElementById('app').scrollIntoView()
      }
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
