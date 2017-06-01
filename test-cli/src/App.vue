<template>
  <div class="container">
    <app-header></app-header>
    <app-menu></app-menu>
    <app-content></app-content>
  </div>
</template>

<script>

    import Header from './component/Header.vue'
    import Menu from './component/Menu.vue'
    import Contents from './component/Contents.vue'


    export default{
        data: function () {
            return {}
        },
        components: {
            appHeader: Header,
            appMenu: Menu,
            appContent: Contents
        }
    }
</script>

<style>
</style>