<template>
  <div>
    <nav class="navbar">
      <div class="container-fluid">
        <div class="d-flex">
          <button id="edit" @click="showModal">
            <i class="fas fa-edit"></i>
          </button>
        </div>
      </div>
    </nav>
    <transition name="modal-fade">
      <Modal v-if="isModalVisible" @close="closeModal" />
    </transition>
  </div>
</template>

<script>
import Modal from "../login/modal/Modal.vue";

/**
 * ProjectNav component allows the user to login to add/edit/delete projects
 */
export default {
  name: "ProjectNav",
  components: {
    Modal,
  },
  data() {
    return {
      isModalVisible: false,
    };
  },
  methods: {
    showModal() {
      this.isModalVisible = true;
    },
    closeModal() {
      this.isModalVisible = false;
    },
  },
};
</script>

<style scoped>
#edit {
  width: 100px;
  border: none;
  background: transparent;
}

.modal-fade-enter,
.modal-fade-leave-to {
  opacity: 0;
}

.modal-fade-enter-active,
.modal-fade-leave-active {
  transition: opacity 0.5s ease;
}

i{
  color: white;
}
</style>