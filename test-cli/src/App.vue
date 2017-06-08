<template>
  <div class="container">
    <router-view name="Header"></router-view>
    <router-view name="Menu"></router-view>
    <router-view></router-view>
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