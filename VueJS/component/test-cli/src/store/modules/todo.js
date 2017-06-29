/**
 * Created by Adrian on 28/6월/17.
 */

const state = {
    todo: {
        title: '',
        date: '',
        type: ''
    }
};

const mutations = {
    'UPDATE_TODO_TITLE'(state, value){
        state.todo.title = value
    },
    'UPDATE_TODO_DATE'(state, value){
        state.todo.date = value
    },
    'UPDATE_TODO_TYPE'(state, value){
        state.todo.type = value
    },
    'RESET_TODO'(state){
        state.todo = {
            title: '',
            date: '',
            type: ''
        }
    },
    'SET_TODO'(state, value){
        state.todo = value;
    }
};

const actions = {
    updateTodoTitle: ({commit}, payload) => {
        commit('UPDATE_TODO_TITLE', payload)
    },
    updateTodoDate: ({commit}, payload) => {
        commit('UPDATE_TODO_DATE', payload)
    },
    updateTodoType: ({commit}, payload) => {
        commit('UPDATE_TODO_TYPE', payload)
    },
    resetTodo:({commit})=>{
        commit('RESET_TODO')
    },
    setTodo:({commit}, payload)=>{
        commit('SET_TODO', payload)
    }
};

const getters = {
    todo: state => {
        return state.todo;
    },
};

export default {
    state,
    mutations,
    actions,
    getters
}