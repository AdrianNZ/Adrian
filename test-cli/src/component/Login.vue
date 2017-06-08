<template>
    <div class="container">
        <router-link to="/">HOME</router-link>
        <login-component></login-component>
    </div>
</template>

<script>

    import loginComponent from './Login/LoginComponent.vue'
    export default{
        data: function () {
            return {

            }
        },
        components: {loginComponent}
    }
</script>

<style>
</style>