<template>
  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <div v-for="index in group" :key="index">
        <li class="page-item">
          <a
            class="page-link"
            @click="
              paginate(
                start + (index * numberPerGroups - numberPerGroups),
                end + index * numberPerGroups
              )
            "
            >{{ index }}</a
          >
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
      index: Number,
      range: Object,
      start: 0,
      end: 0,
      length: 0,
      group: Number,

      //number of projects per page
      numberPerGroups: 10,
    };
  },
  props: ["numberOfElements"],
  methods: {
    paginate(x, y) {
      this.range = {
        lowerPaginate: x,
        upperPaginate: y,
      };

      this.$emit("paginate", this.range);
    },
    //creates the inital value of length
    init() {
      this.length = this.numberOfElements;
    },
    //Find the number of groups
    numberOfGroups() {
      let result = this.length / this.numberPerGroups;

      this.group = Math.floor(result) >= 0 ? result : 1;
    },
  },
  //this watches for a change in the length and group size
  watch: {
    numberOfElements: function () {
      this.init();
      this.numberOfGroups();
    },
  },
};
</script>

<style>
</style>