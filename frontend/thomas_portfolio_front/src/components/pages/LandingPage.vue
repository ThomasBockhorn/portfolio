<template>
  <div class="flex-container">
    <div id="controlModel" class="position-relative w-100">
      <div class="position-absolute top-50 start-50 translate-middle">
        <h1 class="text-center">Thomas Bockhorn</h1>
        <h2 class="text-center mb-4">Full Stack Web Developer</h2>
        <button @click="launch" class="btn btn-danger btn-lg">Launch</button>
      </div>
    </div>
    <div class="videoPlayer d-flex">
      <video
        muted
        id="video"
        class="position-absolute top-50 start-50 translate-middle"
      >
        <source src="../../assets/mov/Atoms.mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
    </div>
  </div>
</template>
<script>
/**
 * Landing Page.  The atomic explosing then goes to the main page
 */
export default {
  methods: {
    /**
     * launch method will play the movie clip then go to /home after 10 seconds.
     *
     * @return void
     */
    launch() {
      let playButton = document.getElementById("video");
      let controlModel = document.getElementById("controlModel");
      controlModel.style.display = "none";
      playButton.play();
      setTimeout(() => this.$router.push({ path: "/home" }), 10000);
    },
  },
};
</script>
<style scoped>
#video {
  position: absolute;
  min-width: 100%;
  min-height: 100%;
}

.flex-container {
  height: 100vh;
  width: 100%;
  display: flex;
  background-color: black;
  position: relative;
  overflow: hidden;
}

#controlModel {
  z-index: 99999;
}

.translate-middle {
  display: flex;
  flex-direction: column;
  align-items: center;
}

h1,
h2 {
  color: white;
}
</style>