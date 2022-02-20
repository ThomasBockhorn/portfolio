<template>
  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" @click="moveDown" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <div v-for="page in totalPages" :key="page">
        <li class="page-item">
          <a class="page-link" @click="returnPage(page)">{{ page }}</a>
        </li>
      </div>
      <li class="page-item">
        <a class="page-link" @click="moveUp" aria-label="Next">
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
      currentPage: 0
    };
  },
  props: ['totalPages'],
  methods:{
    returnPage(page){
      this.currentPage = page;
      this.$emit('clicked', page);
    },
    moveUp(){
      if(this.currentPage < this.totalPages){
        this.returnPage(this.currentPage + 1);
      } else{
        this.returnPage(1);
      }
    },
    moveDown(){
      if(this.currentPage > 1){
        this.returnPage(this.currentPage - 1);
      }else{
        this.returnPage(this.totalPages);
      }
    }
  }
};
</script>

<style>
</style>