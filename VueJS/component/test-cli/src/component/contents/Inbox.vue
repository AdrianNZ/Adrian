<template>
    <div class="inbox">
        <div class="sub-title">Today Todo List</div>

        <hr>

        <div id="inbox-form">
            <div class="form-group col-sm-3 col-md-3 col-ls-3">
                <input type="text" class="form-control input-sm" placeholder="일정"
                v-model="todoTitle">
            </div>

            <div class="form-group col-sm-3 col-md-3 col-ls-3">
                <input type="date" class="form-control input-sm" v-model="todoDate">
            </div>

            <div class="form-group col-sm-3 col-md-3 col-ls-3">
                <input type="text" class="form-control input-sm" placeholder="타입" v-model="todoType">
            </div>

            <div class="form-group col-sm-3 col-md-3 col-ls-3">
                <button class="btn btn-primary btn-sm" @click="addTodo()" v-if="addMode">일정추가</button>
                <button class="btn btn-info btn-sm" @click="updateTodo()" v-if="!addMode">일정수정</button>
                <button class="btn btn-danger btn-sm" @click="editCancel()" v-if="!addMode">취소</button>
            </div>
        </div>

        <div id="inbox-table">
            <table class="table table-striped">
                <caption>일정</caption>

                <tbody>
                <tr v-for="item in todoList">
                    <td><input type="checkbox"></td>
                    <td>{{item.title}}</td>
                    <td>{{item.date}}</td>
                    <td>{{item.type}}</td>
                    <td>
                        <button class="btn btn-success btn-xs" @click="clicked(item.id)"><span
                                class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                        <button class="btn btn-danger btn-xs" @click="deleteTodo(item.id)"><span
                                class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
</template>

<script>

    import {mapGetters} from 'vuex'

    export default{
        data: function () {
            return {
                addMode: true
            }
        },

        methods: {
            clicked(targetId) {
                this.addMode = false;
                let targetVal =  this.$store.getters.todoList.find(element=>element.id == targetId);
                this.$store.commit('SET_TODO', targetVal);
            },

            addTodo(){
                const newTodo = this.$store.getters.todo;
                this.$store.dispatch('saveTodo', newTodo);
            },

            updateTodo(){
                let data = this.$store.getters.todo;
                this.$store.dispatch('updateTodo', data);
            },

            editCancel(){
                this.addMode = true;
                this.$store.commit('RESET_TODO');
            },

            deleteTodo(id){
                let result = confirm('Are you sure?');
                if (result) {
                    this.$store.dispatch('deleteTodo', id);
                }
            },
        },

        created(){
            this.$store.dispatch('loadData');
        },

        computed:{
            ...mapGetters({
                todoList:'todoList'
            }),
            todoTitle : {
                get(){
                    return this.$store.getters.todo.title
                },
                set(value){
                    this.$store.commit('UPDATE_TODO_TITLE', value)
                }
            },
            todoDate:{
                get(){
                    return this.$store.getters.todo.date
                },
                set(value){
                    this.$store.commit('UPDATE_TODO_DATE', value)
                }
            },
            todoType:{
                get(){
                    return this.$store.getters.todo.type
                },
                set(value){
                    this.$store.commit('UPDATE_TODO_TYPE', value)
                }
            }
        }
    }
</script>

<style>
</style>