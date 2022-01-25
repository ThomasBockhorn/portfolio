<template>
    <div class="flex-container">
        <div class="videoPlayer">
            <video autoplay muted id="video">
            <source src="../../assets/mov/Atoms.mp4" type="video/mp4">
            Your browser does not support the video tag.
            </video> 
        </div>
    </div>  
</template>
<script>
export default {
   created(){
       setTimeout( () => this.$router.push({path: '/home'}), 14000);
   }
}
</script>
<style scoped>
    #video{
        position: absolute;
        width: 100%;
        height: auto;
    }

    .flex-container{
        height: 100vh;
        width: 100%;
        display: flex;
        background-color: black;
        position: relative;
        overflow:hidden;
    }
</style>