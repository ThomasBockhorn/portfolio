<template>
  <div>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <form class="d-flex mt-3">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Project"
            aria-label="Search"
          />
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="d-flex">
          <button id="edit">
            <i class="fas fa-edit"></i>
          </button>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
#edit {
  width: 100px;
  border: none;
  background: transparent;
}
</style>