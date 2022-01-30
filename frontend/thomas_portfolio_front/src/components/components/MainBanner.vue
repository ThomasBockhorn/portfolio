<template>
    <div class="container-fluid m-0 p-0">
        <img
            src="../../assets/geometric.jpg"
            alt="geometric banner"
            class="w-100"
        />
        <div class="title">
            <h1>Welcome</h1>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style scoped>
.container-fluid {
    position: relative;
}

.title {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

h1{
    color: white;
}
</style>
