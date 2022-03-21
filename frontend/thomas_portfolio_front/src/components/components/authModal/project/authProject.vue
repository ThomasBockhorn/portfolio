<template>
  <div>
    <a href="#" class="list-group-item list-group-item-action">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">{{ project.title }}</h5>
        <small>{{ project.updated_at }}</small>
      </div>
      <p class="mb-1">{{ project.description }}</p>
      <small>
        <div>
          <button class="btn btn-outline-primary m-1">Edit</button>
          <button
            class="btn btn-outline-danger m-1"
            @click="remove(project.id)"
          >
            Delete
          </button>
        </div>
      </small>
    </a>
  </div>
</template>

<script>
export default {
  props: ["project"],
  methods: {
    remove(project) {
      this.$emit('clicked', project);
    },
  },
};
</script>

<style>
</style>