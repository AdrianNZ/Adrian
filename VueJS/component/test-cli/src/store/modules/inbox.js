/**
 * Created by Adrian on 28/6월/17.
 */
import Vue from 'vue'

const state = {
    todoList: [],
};

const mutations = {
    'SET_TODO_LISTS'(state, todoList){
        state.todoList = todoList
    },
    'INIT_TODO_LIST'(state){
        state.todoList = [{
            id: '',
            date: '',
            title: '',
            type: ''
        }]
    },
    'SAVE_TODO'(state, val){
        state.todoList.push(val);
    },
    'DELETE_TODO'(state, val){
        const target = state.todoList.find(element => element.id == val);

        state.todoList.splice(state.todoList.indexOf(target), 1);
    },
    'UPDATE_TODO'(state, data){
        const target = state.todoList.find(element => element.id == data.id);
        const index = state.todoList.indexOf(target);

        state.todoList[index] = data;
    }
};

const actions = {
    saveTodo({commit}, val){
        Vue.http.post('todo', val)
            .then(response => {
                if (response.body.success) {
                    commit('SAVE_TODO', response.body.data);
                    commit('RESET_TODO');
                }
            }, response => {
                console.log('Fail to save Data');
            });
    },
    deleteTodo({commit}, val){
        Vue.http.get('deleteTodo/' + val)
            .then(response => {
                if (response.body.success) {
                    commit('DELETE_TODO', response.body.data);
                }
            }, response => {
                console.log('Fail to delete Data');
            })
    },
    updateTodo({commit}, data){
        if (data.hasOwnProperty('id')) {
            Vue.http.post('updateTodo/' + data.id, data)
                .then(response => {
                    if (response.body.success) {
                        commit('UPDATE_TODO', response.body.data);
                        alert('Updated Completed');
                    }
                }, response => {
                    console.log('Fail to update Data');
                })
        } else {
            console.log('Data do not have ID value');
        }
    }
};

const getters = {
    todoList: state => {
        return state.todoList;
    }
};

export default {
    state,
    mutations,
    actions,
    getters
}