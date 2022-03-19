<template>
  <div>
    <a href="#" class="list-group-item list-group-item-action">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">{{ project.title }}</h5>
        <small>{{ project.updated_at }}</small>
      </div>
      <p class="mb-1">{{ project.description }}</p>
      <small>And some small print.</small>
    </a>
  </div>
</template>

<script>
export default {
    props: ['project']
};
</script>

<style>
</style>