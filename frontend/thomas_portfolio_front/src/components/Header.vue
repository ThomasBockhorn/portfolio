<template>
    <nav
        class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top bg-transparent"
    >
        <div class="container-fluid">
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
export default {};
</script>

<style scoped>
ul li.router-link-active {
    color: white;
    cursor: pointer;
}
</style>
