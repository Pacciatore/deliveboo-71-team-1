import Vue from "vue";
import VueRouter from "vue-router";

import Home from './pages/Home.vue';

import Restaurant from './pages/Restaurant.vue';

import NotFound from './pages/NotFound.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/restaurant',
            name: 'restaurant',
            component: Restaurant
        },
        {
            path: '/404',
            alias: '*',
            name: 'notFound',
            component: NotFound
        }

    ]
})

export default router;
