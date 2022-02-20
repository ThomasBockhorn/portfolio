<template>
  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <div v-for="page in totalPages" :key="page">
        <li class="page-item">
          <a class="page-link" @click="returnPage(page)">{{ page }}</a>
        </li>
      </div>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  data() {
    return {
    };
  },
  props: ['totalPages'],
  methods:{
    returnPage(page){
      this.$emit('clicked', page);
    }
  }
};
</script>

<style>
</style>