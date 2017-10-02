import Vue from 'vue'
import Router from 'vue-router'
import Home from '../components/Home.vue'
import Get from '../components/Get.vue'
import Pick from '../components/Pick.vue'
import Profile from '../components/Profile.vue'
import Store from '../components/Store.vue'

Vue.use(Router)

export default new Router({
    routes:[
        {path:'/', name: 'Home', component: Home},
        {path:'/get', name: 'Get', component: Get},
        {path:'/pick', name: 'Pick', component: Pick},
        {path:'/profile', name: 'Profile', component: Profile},
        {path:'/store', name: 'Store', component: Store}
    ],
    mode: 'history'
})