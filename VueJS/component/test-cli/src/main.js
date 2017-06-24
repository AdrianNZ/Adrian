import Vue from 'vue'
import VueRouter from 'vue-router'
import App from './App.vue'
import VueResource from 'vue-resource'

import {routes} from './routes'

import Auth from './package/auth/auth'


Vue.use(VueRouter);
Vue.use(VueResource);
Vue.use(Auth);

// export const eventBus = new Vue();
Vue.http.options.root = 'http://localhost:8000/api/';

const router = new VueRouter({
    routes, 
    mode: 'history'
});

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.forAuth)) {
        if (Vue.auth.isAuthenticated()) {
            console.log('next route');
            next();
        } else {
            next({name: 'Login'})
        }
    } else {
        next();
    }
});

new Vue({
    el: '#app',
    router,
    render: h => h(App)
});