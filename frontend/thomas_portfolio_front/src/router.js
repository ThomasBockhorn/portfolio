import { createRouter, createWebHistory } from "vue-router";

/*********************************        Vue Router       **************************************/

//Defined routes
import Home from "../src/components/pages/Home.vue";
import Contact from "../src/components/pages/Contact.vue";
import About from "../src/components/pages/About.vue";
import Portfolio from "../src/components/pages/Portfolio.vue";

const routes = [
    { path: "/", component: Home },
    { path: "/about", component: About },
    { path: "/contact", component: Contact },
    { path: "/portfolio", component: Portfolio },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
