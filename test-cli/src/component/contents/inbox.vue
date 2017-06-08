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
                <button class="btn btn-info btn-sm" @click="editTodo(todo.id)" v-if="!addMode">일정수정</button>
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

    var tempTodo = [
        {id: 1, title: '테스트 일정', date: '2017-04-01', type: 'inbox'},
        {id: 2, title: '테스트 일정2', date: '2017-04-05', type: 'inbox'},
        {id: 3, title: '테스트 일정3', date: '2017-04-10', type: 'inbox'},
        {id: 4, title: '테스트 일정4', date: '2017-04-15', type: 'inbox'}
    ];

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
            clicked(id) {
                this.addMode = false;

                for (var i = 0; i < this.todoList.length; i++) {
                    if (this.todoList[i].id === id) {
                        return this.todo = this.todoList[i];
                    }
                }
            },
            addTodo(){
                this.todo.id = this.todoList.length + 1;
                this.todoList.push(this.todo);
                this.reset();
            },
            editTodo(id){
                this.addMode = true;
                this.todoList[id] = this.todo;
                this.reset();
            },
            editCancel(){
                this.addMode = true;
                this.reset();
            },
            deleteTodo(id){
                var result = confirm('Are you sure?');
                if (result) {
                    for (var j = 0; j < this.todoList.length; j++) {
                        if (this.todoList[j].id === id) {
                            this.todoList.splice(j, 1);
                        }
                    }
                }
            }
        },
        created(){
            this.todoList = tempTodo;
        }
    }
</script>

<style>
</style>