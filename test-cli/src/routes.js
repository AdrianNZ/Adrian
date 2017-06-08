/**
 * Created by Adrian on 7/6월/17.
 */

import Home from './component/Home/Home.vue'
import Header from './component/Header.vue'
import Menu from './component/Menu.vue'

import Login from './component/Login.vue'
import Signup from './component/Signup.vue'
import UserInfo from './component/User/Info.vue'
import Content from './component/Contents.vue'
import ContentHome from './component/contents/contentsHome.vue'
import ContentInbox from './component/contents/Inbox.vue'
import ContentNextmonth from './component/contents/Nextmonth.vue'
import ContentNextweek from './component/contents/Nextweek.vue'
import ContentToday from './component/contents/Today.vue'


export const routes = [
    {
        path: '/', components: {
        default: Home,
        Header: Header,
        Menu: Menu
    },
        beforeEnter: (to, from, next) => {
            console.log('Hello World');
            next('/todo');
        }
    },

    {
        path: '/todo',
        components: {
            default: Content,
            Header: Header,
            Menu: Menu
        },
        children: [
            {path: '', component: ContentHome},
            {path: 'inbox', component: ContentInbox, name:ContentInbox},
            {path: 'nextmonth', component: ContentNextmonth, name:ContentNextmonth},
            {path: 'nextweek', component: ContentNextweek, name:ContentNextweek},
            {path: 'today', component: ContentToday, name:ContentToday},
        ]
    },

    {path: '/login', component: Login},
    {path: '/signup', component: Signup},
    {path: '/userinfo', component: UserInfo}
];