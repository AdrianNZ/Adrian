<template>
    <div class="list">
        <div class="form-group">
            <label for="search" class="col-sm-2">Search User <span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
            <div class="col-sm-10">
                <input type="text" :value="search" class="form-control" id="search" @keyup.stop="searchUser">
            </div>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Mobile</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="item in users">
                <td>{{item.id}}</td>
                <td>{{item.name}}</td>
                <td>{{item.email}}</td>
                <td>{{item.mobile}}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {}
        },
        created() {
            this.$store.dispatch('loadUsers');
        },
        computed: {
            users() {
                return this.$store.getters.users
            },
            search(){
                return this.$store.getters.search
            }
//            search:{
//              get(){
//                  return this.$store.state.search
//              },
//              set(value){
//                  this.$store.commit('UPDATE_SEARCH_VAL', value)
//              }
//            }
        },
        methods:{
          searchUser(e){
              this.$store.commit('UPDATE_SEARCH_VAL', e.target.value)
          }
        }
    }
</script>

<style>

</style>