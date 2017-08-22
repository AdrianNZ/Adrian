/**
 * Created by Adrian on 20/8월/17.
 */

import Vue from 'vue';
import Vuex from 'vuex';


Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        auth: false,
        users: [],
        friends: []
    },
    actions: {
        getUsers({commit}) {
            axios.get('/users')
                .then(response => {
                    commit('SET_USERS', response.data.data)
                })
        },
        getFriends({commit}) {
            axios.get('/friends')
                .then(response => {
                    commit('SET_FRIENDS', response.data.data)
                })
        },
        setFriend({commit}, payload) {
            return new Promise((resolve, reject) => {
                axios.post('/friends', payload)
                    .then(response => {
                        resolve(response)
                    })
            })
        }
    },
    mutations: {
        'SET_USERS'(state, payload) {
            state.users = payload;
        },
        'SET_FRIENDS'(state, payload) {
            state.friends = payload;
        }
    },
    getters: {
        users(state) {
            return state.users;
        },
        friends(state) {
            return state.friends;
        }
    }
});