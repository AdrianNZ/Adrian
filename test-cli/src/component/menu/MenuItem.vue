<template>
    <div class="menuitem">
        <router-link tag="li" class="list-group-item" activeClass="active" v-bind:to="{ path:'/todo/'+item.href}" replace>
            {{item.title}}
            <span class="badge">14</span>
        </router-link>
    </div>
</template>

<script>
    export default{
        props: ['item'],

        data: function () {
            return {

            }
        },
        methods:{

        }
    }
</script>

<style>
    .menuitem>li:hover{
        cursor:pointer;
        background-color: lightskyblue;
    }
</style>