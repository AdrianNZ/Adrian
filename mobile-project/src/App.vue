<template>
    <div id="app">
        <div class="container-fluid">
            <div class="col-xs-12 no-padding content-view">
                <router-view name="header"></router-view>
                <router-view></router-view>
                <router-view name="footer"></router-view>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {}
        }
    }
</script>

<style lang="scss">
    .content-view {
        position: relative;
        min-height: 100vh;
    }

    .container-fluid {
        padding: 0;
    }

    .no-padding {
        padding: 0;
    }

    .no-margin {
        margin: 0;
    }
</style>
