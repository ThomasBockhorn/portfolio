<template>
  <div class="card h-100" style="width: 18rem">
    <div class="card-header text-muted">Last Updated: <time>{{ project.updated_at }}</time></div>
    <img src="../../../assets/testImage.jpg" class="card-img-top" alt />
    <div class="card-body">
      <h5 class="card-title">{{ project.title }}</h5>
      <p class="card-text">{{ project.description }}</p>
    </div>
    <div class="card-footer">
      <a href="#" class="btn btn-outline-success">Go</a>
    </div>
  </div>
</template>

<script>
/**
 * Project component is a general template
 */
export default {
  name: "Project",
  props: ["project"],
  data() {
    return {
      program: this.project,
    };
  },
};
</script>

<style scoped>
.card {
  margin: 2px;
}

h5, p, time{
  font-family: 'Libre Baskerville', serif;
}
</style>
