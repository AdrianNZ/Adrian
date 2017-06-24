<template>
    <div class="user">
        <router-link to="/">HOME</router-link>
        <user-information></user-information>
    </div>
</template>

<script>
    import userInformation from './User/Info.vue'
    export default{
        data: function () {
            return {

            }
        },
        components: {userInformation}
    }
</script>

<style>
</style>