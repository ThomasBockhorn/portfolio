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
    
}
</script>
<style scoped>
    #video{
        position: absolute;
        width: 100%;
        height: auto;
    }

    .flex-container{
        height: 100%;
        display: flex;
        background-color: black;
        position: relative;
    }
</style>