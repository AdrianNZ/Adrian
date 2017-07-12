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
    {path: '/config', name:'Config', component: Config, meta:{title:'환경설정'}},


    {
        path: '/', components: {
        default: Home,
        'header': Header,
        'footer': Footer,
    }, children: [
        {path: '', component: Home},
        {path: 'list', component: List, name:'List', meta:{title:'쿠키줍기'}},
        {path: 'heart', component: Heart, name:'Heart', meta:{title:'하트받기'}},
    ]
    },

];