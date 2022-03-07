<template>
  <nav aria-label="Page navigation">
    <ul class="pagination">
      <li class="page-item">
        <a
          class="page-link"
          @click.prevent="moveDown"
          href="#"
          aria-label="Previous"
        >
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <div v-for="page in totalPages" :key="page">
        <li class="page-item">
          <a
            class="page-link"
            href="#"
            :class="{ inActive: !currentPage }"
            @click.prevent="returnPage(page)"
            >{{ page }}</a
          >
        </li>
      </div>
      <li class="page-item">
        <a class="page-link" @click.prevent="moveUp" aria-label="Next" href="#">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>
</template>

<script>
/**
 * This component will allow for pagination of projects.  Its the child of Project.
 */
export default {
  name:"PaginationComponent",
  data() {
    return {
      currentPage: 0,
    };
  },
  props: ["totalPages"],
  methods: {
    /**
     * This will return page number to the Project that actally calls the server
     *
     * @param {Integer} page 
     * @return void
     */
    returnPage(page) {
      this.currentPage = page;
      this.$emit("clicked", page);
    },
    /**
     * moveUp will move the pages up then submit that to the returnPage method
     *
     * @return void
     */
    moveUp() {
      if (this.currentPage < this.totalPages) {
        this.returnPage(this.currentPage + 1);
      } else {
        this.returnPage(1);
      }
    },
    /**
     * moveDown will move the pages down then submit that to the returnPage method
     *
     * @return void
     */
    moveDown() {
      if (this.currentPage > 1) {
        this.returnPage(this.currentPage - 1);
      } else {
        this.returnPage(this.totalPages);
      }
    },
  },
};
</script>

<style scoped>

.pagination a {
  color: white;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  background-color: transparent;
  border-color: transparent;
}
</style>