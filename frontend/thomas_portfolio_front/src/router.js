import { createRouter, createWebHistory } from "vue-router";

/*********************************        Vue Router       **************************************/

//Defined routes
import LandingPage from "../src/components/pages/LandingPage.vue";
import Home from "../src/components/pages/Home.vue";
import Contact from "../src/components/pages/Contact.vue";
import About from "../src/components/pages/About.vue";
import Portfolio from "../src/components/pages/Portfolio.vue";

const routes = [
    { path: "/", component: LandingPage, meta: { header: false } },
    { path: "/home", component: Home,  meta: { header: true }},
    { path: "/about", component: About, meta: { header: true }},
    { path: "/contact", component: Contact, meta: { header: true}},
    { path: "/portfolio", component: Portfolio, meta: {header: true} },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
