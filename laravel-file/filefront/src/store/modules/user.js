/**
 * Created by Adrian on 2/8월/17.
 */

import Vue from 'vue'

const state = {
    users: [],
    search: ''
};

const mutations = {
    'SET_USERS_LISTS'(state, users) {
        state.users = users;
    },
    'INIT_USERS_LIST'(state) {
        state.users = [{
            id: '',
            name: '',
            email: '',
            mobile: ''
        }]
    },
    'UPDATE_SEARCH_VAL'(state, value) {
        state.search = value;
    }
};

const actions = {
    loadUsers({commit}) {
        Vue.http.get('excel')
            .then(response => {
                if (response.body.success) {
                    const users = response.body.data;
                    commit('SET_USERS_LISTS', users);
                }
            }, response => {
                commit('INIT_USERS_LIST');
            })
    }
};

const getters = {
    users: state => {
        const searchResult = state.search.trim().toLowerCase();

        if (!searchResult.length) return state.users;

        return state.users.filter(item => item.name.toLowerCase().indexOf(searchResult) > -1);
    },
    search: state => {
        return state.search;
    }
};

export default {
    state,
    mutations,
    actions,
    getters
}