<template>
    <div class="container">
        <router-link to="/">HOME</router-link>
        <signup-component></signup-component>
    </div>
</template>

<script>

    import signupComponent from './Signup/SignupComponent.vue'
    export default{
        data: function () {
            return {

            }
        },
        components: {signupComponent}
    }
</script>

<style>
</style>