import { createRouter, createWebHistory } from "vue-router";

/*********************************        Vue Router       **************************************/

//Defined routes
import LandingPage from "../src/components/pages/LandingPage.vue";
import Home from "../src/components/pages/Home.vue";
import Contact from "../src/components/pages/Contact.vue";
import Resume from "../src/components/pages/Resume.vue";
import Portfolio from "../src/components/pages/Portfolio.vue";

const routes = [
    { path: "/", component: LandingPage, meta: { header: false } },
    { path: "/home", component: Home,  meta: { header: true, title: 'Hi, my name is Thomas Bockhorn.', subtitle: "I'm a full stack web developer." }},
    { path: "/resume", component: Resume, meta: { header: true, title: 'Resume' }},
    { path: "/contact", component: Contact, meta: { header: true, title: 'Contact'}},
    { path: "/portfolio", component: Portfolio, meta: {header: true, title: 'Portfolio' }},
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
