<template>
    <div class="container-fluid m-0 p-0">
        <img src="../../assets/geometric.jpg" alt="geometric banner" />
        <div
            role="heading"
            aria-lavel="1"
            class="title d-flex flex-column text-center"
        >
            <h1 aria-labelledby="{{ this.title }}">{{ this.title }}</h1>
            <h2 aria-labelledby="{{ this.subtitle }}">{{ this.subtitle }}</h2>
            <div>
                <a
                    id="dropdownArrow"
                    href="#"
                    @click.prevent="goTo(mainComponentName)"
                    ><i class="far fa-arrow-alt-circle-down fa-3x"></i
                ></a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            title: String,
            subtitle: String,
        };
    },
    mounted() {
        this.title = this.$route.meta.title;
        this.subtitle = this.$route.meta.subtitle;
    },
    props: {
        mainComponentName: String,
    },
    methods: {
        goTo(refName) {
            let location = document.getElementById(refName);
            if (location) {
                location.scrollIntoView({ behavior: "smooth" });
            }
        },
    },
};
</script>

<style scoped>
.container-fluid {
    position: relative;
    width: 100%;
    height: 100%;
}

.title {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

h1,
h2 {
    color: white;
}

h2 {
    font-size: 1em;
}

img {
    width: 100%;
    height: 100%;
}

i {
    color: white;
}

@media screen and (max-width: 540px) {
    h2,
    #dropdownArrow {
        display: none;
    }
}
</style>
