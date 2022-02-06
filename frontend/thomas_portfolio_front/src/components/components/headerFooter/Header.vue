<template>
    <nav
        id="navbar"
        class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top bg-transparent"
        :class="{ changeBackgroundColor: scrollPosition > 600 }"
    >
        <div class="container">
            <a class="navbar-brand" href="#"></a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <router-link
                            to="/home"
                            class="nav-link"
                            aria-current="Home"
                            @click="reloadPage"
                            >Home</router-link
                        >
                    </li>
                    <li class="nav-item">
                        <router-link
                            to="/resume"
                            class="nav-link"
                            aria-current="Resume"
                            @click="reloadPage"
                            >Resume</router-link
                        >
                    </li>
                    <li class="nav-item">
                        <router-link
                            to="/portfolio"
                            class="nav-link"
                            aria-current="Project"
                            @click="reloadPage"
                            >Projects</router-link
                        >
                    </li>
                    <li class="nav-item">
                        <router-link
                            to="/contact"
                            class="nav-link"
                            aria-current="Contact"
                            @click="reloadPage"
                            >Contact</router-link
                        >
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    data() {
        return {
            scrollPosition: null,
        };
    },
    methods: {
        updateScrollPosition() {
            this.scrollPosition = window.scrollY;
        },
        reloadPage() {
            window.location.reload();
        }
    },
    mounted() {
        window.addEventListener("scroll", this.updateScrollPosition);
    },
};
</script>

<style scoped>
ul li.router-link-active {
    color: white !important;
    cursor: pointer;
}

.changeBackgroundColor {
    background-color: black !important;
}

@media screen and (max-width: 768px) {
    #navbarSupportedContent {
        background-color: white;
        border-radius: 25px;
    }

    a {
        color: black !important;
        text-align: center;
        margin: 2em;
        font-weight: bold;
        font-size: 1.5em;
    }

    #navbar {
        background-color: transparent !important;
    }

    button {
        color: black !important;
        background-color: black;
    }
}
</style>
