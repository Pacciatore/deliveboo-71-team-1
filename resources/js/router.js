import Vue from "vue";
import VueRouter from "vue-router";

import Home from './pages/Home.vue';


Vue.use(VueRouter);

const router = new VueRouter({
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        // {
        //     path: '/restaurant',
        //     name: 'restaurant',
        //     component: Restaurant
        // },
        {
            path: "/restaurant/:slug",
            name: "restaurant",
            component: () => import(/* webpackChunkName: "restaurant" */ './pages/Restaurant.vue'),
        },
        {
            path: '/404',
            alias: '*',
            name: 'notFound',
            component: () => import(/* webpackChunkName: "notFound" */  './pages/NotFound.vue')
        }

    ]
})

export default router;
