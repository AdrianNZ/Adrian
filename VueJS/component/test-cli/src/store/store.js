/**
 * Created by Adrian on 25/6월/17.
 */

import Vue from 'vue';
import Vuex from 'vuex';
import VueRosource from 'vue-resource'

import inbox from './modules/inbox'
import todo from './modules/todo'
import * as actions from './actions'

Vue.use(Vuex);
Vue.use(VueRosource);


export const store = new Vuex.Store({
    actions,
    modules: {
        inbox,
        todo
    }
});
