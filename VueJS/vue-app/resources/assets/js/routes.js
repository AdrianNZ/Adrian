/**
 * Created by Adrian on 4/4월/17.
 */

import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        component: require('./views/Home')
    },

    {
        path: '/home',
        component: require('./views/Home')
    },

    {
        path: '/about',
        component: require('./views/About')
    },

    {
        path: '/contact',
        component: require('./views/Contact')
    },

    {
        path: '/login',
        component: require('./views/Login')
    }
];

export default new VueRouter({
    routes,
    mode:'history',
    linkActiveClass: 'active'
});
