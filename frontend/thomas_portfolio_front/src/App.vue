<template>
    <main>
        <div v-if="isLoading">
            <LoadingScreen v-if="isLoading"></LoadingScreen>
        </div>
        <div v-if="!isLoading">
            <Header/>
            <routerView></routerView>
            <Footer/>
        </div>
    </main>
</template>

<script>
import Header from "./components/Header.vue";
import Footer from "./components/Footer.vue";
import LoadingScreen from "./components/pages/LoadingScreen.vue";

export default {
    name: "App",
    components: {
        Header,
        Footer,
        LoadingScreen
    },
    data(){
        return{
            isLoading: true
        }
    },
    mounted(){
        setTimeout(() => {
            this.isLoading = false
        }, 3000)
    }
};
</script>

<style></style>
