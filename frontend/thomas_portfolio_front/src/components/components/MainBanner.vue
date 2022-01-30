<template>
    <div class="container-fluid m-0 p-0">
        <img
            src="../../assets/geometric.jpg"
            alt="geometric banner"
            class="w-100"
        />
        <div role="heading" aria-lavel="1" class="title">
            <h1 aria-labelledby="{{ this.title }}">{{ this.title }}</h1>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            title: String
        }
    },
    mounted(){
        this.title = this.$route.meta.title;
    }
};
</script>

<style scoped>
.container-fluid {
    position: relative;
}

.title {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

h1{
    color: white;
}

img{
    width: 100%;
    height: 35em;
}
</style>
