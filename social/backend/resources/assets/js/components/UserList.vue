<template>
    <div>
        <div class="panel panel-default">
            <div class="panel-heading">{{title}}</div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td>Name</td>
                        <td class="pull-right">Action</td>
                    </tr>
                    </thead>
                    <tbody>

                    <tr v-for="item in list">
                        <td>{{item.name}}</td>
                        <td>
                            <button class="btn btn-info pull-right" @click="getFriends(item.id)">{{action}}</button>
                        </td>
                    </tr>
                    <tr v-if="list.length==0">
                        <td class="danger" colspan="2">There are no more users</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex'
    import {mapMutations} from 'vuex'
    import {mapActions} from 'vuex'



    export default {
        props: ['title', 'action', 'list'],
        data() {
            return {}
        },

        methods: {
            getFriends(id) {
                const target = this.list.find(t => t.id === id);
                const param = {'friend': target.id};
                this.$store.dispatch('setFriend', param)
                    .then(response => {
                        this.$store.dispatch('getUsers');
                        this.$store.dispatch('getFriends');
                    })
            }
        }
    }
</script>

<style>
    table > tbody > tr {
        margin: 1rem;
    }
</style>