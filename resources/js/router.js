import {createRouter, createWebHistory} from "vue-router";
import { AuthStore } from "@/store/auth";

import Register from "@/pages/Register.vue";
import Home from "@/pages/Home.vue";
import Login from "@/pages/Login.vue";
import {storeToRefs} from "pinia";

const routes = [
    { name: 'home', path: '/', component: Home },
    { name: 'register', path: '/register', component: Register },
    { name: 'login', path: '/login', component: Login },
]

const router = createRouter({
    history: createWebHistory(),
    routes
})


router.beforeEach((to, from, next) => {
    // Define store
    const store = AuthStore();
    // Routing
    if (to.path === '/login' || to.path === '/register') !store.getAuth ? next() : next({ name: 'home' })
    else if (!store.getAuth) next({ name: 'login' })
    else next()
})

export default router;
