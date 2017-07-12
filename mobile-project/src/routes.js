/**
 * Created by Adrian on 10/7월/17.
 */

import Home from './assets/components/Home.vue'
import Login from './assets/components/Login.vue'
import List from './assets/components/List.vue'
import Heart from './assets/components/Heart.vue'
import Config from './assets/components/Config.vue'
import Header from './assets/components/Header.vue'
import Footer from './assets/components/Footer.vue'


export const routes = [
    {path: '*', redirect: '/'},
    {path: '/login', name: 'Login', component: Login},


    {path: '/', components: {
        default: Home,
        'header': Header,
        'footer': Footer,
    }},

    {path: '/list', components: {
        default: List,
        'header': Header,
        'footer': Footer,
    },
    meta:{title:'쿠키줍기'}},

    {path: '/heart', components: {
        default: Heart,
        'header': Header,
        'footer': Footer,
    },
    meta:{title:'하트받기'}},

    {path: '/config', components: {
        default: Config,
        'footer': Footer,
    },
        meta:{title:'환경설정'}},

];