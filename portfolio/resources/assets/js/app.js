
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

var util = require('./util/config');
util.ajaxConfig();

require('./bootstrap');
require('./components/admin');
require('./components/adminProfile');
require('./components/adminNav');
require('./components/adminTitle');
require('./components/adminSkill');
require('./components/adminCategory');
require('./components/adminProject');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});
