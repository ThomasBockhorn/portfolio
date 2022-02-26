<template>
  <div class="modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{ title }}</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
            @click="close"
          ></button>
        </div>
        <div class="modal-body">
          <LoginForm @clicked="nameOfForm"></LoginForm>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import LoginForm from "../login/LoginComponent.vue";

export default {
  name: "Modal",
  components:{
    LoginForm
  },
  data(){
    return{
      title: 'Login'
    }
  },
  methods: {
    close() {
      this.$emit("close");
    },
    nameOfForm(formName){
      this.title = formName;
    }
  },
};
</script>

<style scoped>
.modal {
  display: block;
}
</style>