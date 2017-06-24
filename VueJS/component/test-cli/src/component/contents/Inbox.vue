<template>
    <div class="inbox">
        <div class="sub-title">Today Todo List</div>

        <hr>

        <div id="inbox-form">
            <div class="form-group col-sm-3 col-md-3 col-ls-3">
                <input type="text" class="form-control input-sm" placeholder="일정" v-model="todo.title">
            </div>

            <div class="form-group col-sm-3 col-md-3 col-ls-3">
                <input type="date" class="form-control input-sm" v-model="todo.date">
            </div>

            <div class="form-group col-sm-3 col-md-3 col-ls-3">
                <input type="text" class="form-control input-sm" placeholder="타입" v-model="todo.type">
            </div>

            <div class="form-group col-sm-3 col-md-3 col-ls-3">
                <button class="btn btn-primary btn-sm" @click="addTodo()" v-if="addMode">일정추가</button>
                <button class="btn btn-info btn-sm" @click="updateTodo(todo.id)" v-if="!addMode">일정수정</button>
                <button class="btn btn-danger btn-sm" @click="editCancel()" v-if="!addMode">취소</button>
            </div>
        </div>

        <div id="inbox-table">
            <table class="table table-striped">
                <caption>일정</caption>

                <tbody>
                <tr v-for="data in todoList">
                    <td><input type="checkbox"></td>
                    <td>{{data.title}}</td>
                    <td>{{data.date}}</td>
                    <td>{{data.type}}</td>
                    <td>
                        <button class="btn btn-success btn-xs" @click="clicked(data.id)"><span
                                class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                        <button class="btn btn-danger btn-xs" @click="deleteTodo(data.id)"><span
                                class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
</template>

<script>

    import api from '../../api'

    export default{
        data: function () {
            return {
                todo: {
                    id: '',
                    title: '',
                    date: '',
                    type: ''
                },

                todoList: [],
                addMode: true
            }
        },
        methods: {
            reset(){
                this.todo = {
                    id: '',
                    title: '',
                    date: '',
                    type: ''
                }
            },

            kick(arr, val){
                for (let i = 0; i < arr.length; i++) {
                    if (arr[i].id == val) {
                        return arr = arr.splice(i, 1);
                    }
                }
            },

            findIndex(arr, val){
                for (let i = 0; i < arr.length; i++) {
                    if (arr[i].id == val) {
                        return arr.indexOf(arr[i]);
                    }
                }
            },

            clicked(id) {
                this.addMode = false;

                for (let i = 0; i < this.todoList.length; i++) {
                    if (this.todoList[i].id === id) {
                        return this.todo = this.todoList[i];
                    }
                }
            },

            addTodo(){
                api.addTodo(this.todo).then(response => {
                    if (response.body.success) {
                        this.todoList.push(response.body.data);
                        this.reset();
                    }
                });
            },

            updateTodo(frontId){
                api.updateTodo(this.todo, frontId).then(response => {
                    if (response.body.success) {
                        this.addMode = true;
                        let index = this.findIndex(this.todoList, response.body.data.id);
                        this.todoList[index] = response.body.data;
                        alert('Updated Completed');
                        this.reset();
                    }
                });
            },

            editCancel(){
                this.addMode = true;
                this.reset();
            },

            deleteTodo(id){
                let result = confirm('Are you sure?');
                if (result) {
                    api.deleteTodo(id).then(response => {
                        this.kick(this.todoList, response.body.data);
                    });
                }
            }
        },
        created(){
            api.getTodo().then(response => {
                if (response.body.success) {
                    console.log('go?');
                    this.todoList = response.body.data;
                }
            })
        },

    }
</script>

<style>
</style>