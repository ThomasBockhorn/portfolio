<template>
  <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" @click="paginate(0, 10)">1</a></li>
    <li class="page-item"><a class="page-link" @click="paginate(11, 20)">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
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
    data(){
        return{
            index: Number,
            range: Object
        }
    },
    methods:{
        paginate(x, y){
           this.range = {
               lowerPaginate: x,
               upperPaginate: y
           };

           this.$emit('paginate',this.range);
        }
    }

}
</script>

<style>

</style>