import Vue from 'vue'
import App from './App.vue'
import Vuetify from 'vuetify'

import router from './router'
import {store} from './store/index'

import priorityComponent from '../src/components/Priority.vue'

Vue.use(Vuetify)
Vue.component('app-priority-component', priorityComponent)

new Vue({
    el: '#app',
    router,
    store,
    render: h => h(App)
})
