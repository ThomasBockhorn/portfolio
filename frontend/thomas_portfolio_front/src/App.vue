<template>
  <main class="main">
    <Header v-if="$route.meta.header != false" />
    <router-view v-slot="{ Component }">
      <transition name="fade" mode="out-in" @before-enter="scrollTop">
        <component :is="Component" />
      </transition>
    </router-view>
    <Footer v-if="$route.meta.header != false" />
  </main>
</template>

<script>
import Header from "./components/components/headerFooter/Header.vue";
import Footer from "./components/components/headerFooter/Footer.vue";

export default {
  name: "App",
  components: {
    Header,
    Footer,
  },
  methods: {
    scrollTop() {
      document.getElementById("app").scrollIntoView();
    },
  },
};
</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition-property: opacity;
  transition-duration: 0.25s;
}

.fade-enter-active {
  transition-delay: 0.25s;
}

.fade-enter,
.fade-leave-active {
  opacity: 0;
}

.main {
  background: rgb(51, 132, 221);
  background: linear-gradient(
    180deg,
    rgba(51, 132, 221, 1) 17%,
    rgba(39, 56, 115, 1) 100%
  );
}
</style>
