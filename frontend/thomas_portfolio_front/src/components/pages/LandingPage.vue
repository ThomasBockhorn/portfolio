<template>
    <div class="flex-container">
        <div id="controlModel" class="position-absolute top-50 start-50 translate-middle">
            <button @click="launch" class="btn-primary">Launch</button>
        </div>
        <div class="videoPlayer">
            <video muted id="video">
            <source src="../../assets/mov/Atoms.mp4" type="video/mp4">
            Your browser does not support the video tag.
            </video> 
        </div>
    </div>  
</template>
<script>
export default {
   methods:{
       launch(){
           let playButton = document.getElementById("video");
           let controlModel = document.getElementById("controlModel");
           controlModel.style.display = 'none';
           playButton.play();
           setTimeout( () => this.$router.push({path: '/home'}), 10000);
       }
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

    #controlModel{
        z-index: 99999;
    }
</style>