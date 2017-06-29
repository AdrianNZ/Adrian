/**
 * Created by Adrian on 28/6월/17.
 */

import Vue from 'vue'

export const loadData = ({commit})=>{
  Vue.http.get('todo')
      .then(response=>{
          if(response.body.success){
              const todoList = response.body.data;
              commit('SET_TODO_LISTS', todoList);
          }
      }, response=>{
          commit('INIT_TODO_LIST')
      });
};