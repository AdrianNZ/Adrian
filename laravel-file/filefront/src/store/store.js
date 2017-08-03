/**
 * Created by Adrian on 2/8월/17.
 */

import Vue from 'vue';
import Vuex from 'vuex';
import VueResource from 'vue-resource'

import user from './modules/user'

Vue.use(Vuex);
Vue.use(VueResource);

export const store = new Vuex.Store({
    modules: {
        user
    }
});


