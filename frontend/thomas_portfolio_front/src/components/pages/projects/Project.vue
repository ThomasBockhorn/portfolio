<template>
  <div class="card" style="width: 18rem">
    <img src class="card-img-top" alt />
    <div class="card-body">
      <h5 class="card-title">{{ program.title }}</h5>
      <p class="card-text">{{ program.description }}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</template>

<script>
export default {
  props: ["project"],
  data() {
    return {
      program: this.project
    };
  }
};
</script>

<style scoped>
.card {
  margin: 2px;
}
</style>
