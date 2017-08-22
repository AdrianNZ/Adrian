/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('vue-users', require('./components/UserList.vue'));
Vue.component('show-summary', require('./components/Summary.vue'));

import {store} from './store/store'
import axios from 'axios'
import {mapGetters} from 'vuex'

window.axios = axios;

const app = new Vue({
    el: '#app',
    store,
    mounted() {
        this.$store.dispatch('getUsers');
        this.$store.dispatch('getFriends');

    },
    computed: {
        ...mapGetters([
            'users',
            'friends'
        ])
    }
});
