<template>
    <nav
        id="navbar"
        class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top bg-transparent"
        :class="{ changeBackgroundColor: scrollPosition > 60 }"
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
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <router-link
                            to="/home"
                            class="nav-link"
                            aria-current="Home"
                            >Home</router-link
                        >
                    </li>
                    <li class="nav-item">
                        <router-link
                            to="/resume"
                            class="nav-link"
                            aria-current="Resume"
                            >Resume</router-link
                        >
                    </li>
                    <li class="nav-item">
                        <router-link
                            to="/portfolio"
                            class="nav-link"
                            aria-current="Project"
                            >Projects</router-link
                        >
                    </li>
                    <li class="nav-item">
                        <router-link
                            to="/contact"
                            class="nav-link"
                            aria-current="Contact"
                            >Contact</router-link
                        >
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
/**
 * This is the header component which contains the router links and navbar
 */
export default {
    name: "Header",
    data() {
        return {
            scrollPosition: null,
        };
    },
    methods: {
        /**
         * This method records the Y scroll position.  It will be used to change the background
         * color of the header to black.
         *
         * @return void
         */
        updateScrollPosition() {
            this.scrollPosition = window.scrollY;
        }
    },
    /**
     * This adds an EventListener when the header is mounted
     *
     * @return void
     */
    mounted() {
        window.addEventListener("scroll", this.updateScrollPosition);
    },
};
</script>

<style scoped>
ul, li,  li.router-link {
    color: white !important;
    cursor: pointer;
    font-family: 'Libre Baskerville', serif;
}

.changeBackgroundColor {
    background-color: black !important;
}

@media screen and (max-width: 540px) {
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
        font-family: 'Libre Baskerville', serif;
    }
}
</style>
