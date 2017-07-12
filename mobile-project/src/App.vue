<template>
    <div id="app">
        <div class="container-fluid">
            <div class="col-xs-12 no-padding content-view">
                <router-view name="header"></router-view>
                <transition name="slide" mode="out-in" type="transition">
                    <keep-alive>
                        <router-view></router-view>
                    </keep-alive>
                </transition>
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

    .slide-enter,
    .slide-leave {
        opacity: 0;
    }

    .slide-enter-active{
        animation: slide-in .2s ease-out forwards;
        transition: opacity ease-out .3s;
    }
    .slide-leave-active {
        animation: slide-out .3s ease-out forwards;
        transition: opacity ease-out .3s;
        opacity: 0;
    }

    @keyframes slide-in {
        from {
            transform: translateX(-30px);
        }
        to {
            transform: translateX(0);

        }
    }

    @keyframes slide-out {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(-100px);

        }
    }
</style>
