/**
 * Created by Adrian on 30/7월/17.
 */

import  Home from './components/Home.vue';
import DropZone from './components/Dropzone.vue'
import List from './components/List.vue'

export const routes = [
    {path: '/', component: Home},
    {path: '/drop', component: DropZone},
    {path: '/list', component: List}
]