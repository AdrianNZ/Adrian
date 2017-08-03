import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import VueDropZone from 'vue2-dropzone'

import {routes} from './routes'
import {store} from './store/store'

Vue.use(VueResource);
Vue.use(VueRouter);
Vue.use(VueDropZone);

Vue.http.options.root = 'http://127.0.0.1:8000/api';

const router = new VueRouter({
    routes,
    mode: 'history'
});

Vue.component('DropZone', VueDropZone);

new Vue({
    el: '#app',
    router,
    store,
    render: h => h(App)
});
