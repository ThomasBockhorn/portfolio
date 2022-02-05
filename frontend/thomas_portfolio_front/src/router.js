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
    { path: "/home", component: Home,  meta: { header: true, title: 'Hi, my name is Thomas Bockhorn.', subtitle: "'You have power over your mind — not outside events. Realize this, and you will find strength' - Marcus Aurelius" }},
    { path: "/resume", component: Resume, meta: { header: true, title: 'Resume', subtitle: "'Because a thing seems difficult for you, do not think it impossible for anyone to accomplish' - Marcus Aurelius" }},
    { path: "/contact", component: Contact, meta: { header: true, title: 'Contact', subtitle: "'Luck is what happens when preparation meets opportunity' - Seneca"}},
    { path: "/portfolio", component: Portfolio, meta: {header: true, title: 'Portfolio', subtitle: "'How long are you going to wait before you demand the best for yourself?' - Epictetus" }},
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
