<template>
    <div class="header">
        <div class="col-xs-12 box1"></div>
        <div class="col-xs-12 box2"></div>
        <div class="col-xs-12 box3">
            <div class="col-xs-6 col-xs-offset-1">
                <h2 class="menu-title">{{$route.meta.title}}</h2>
            </div>
            <div class="col-xs-5">
                <div class="col-xs-6"><img src="../images/logo/biscuit.svg" alt="biscuit"
                                           class="img-responsive"></div>
                <div class="col-xs-6"><span class="text-left cookie-count">483</span></div>
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        data() {
            return {}
        }
    }
</script>

<style lang="scss" scoped>
    .header {
        position: fixed;
        overflow: hidden;
        z-index: 100;
        top: 0;
        width: 100%;
        height: 130px;
        .box1 {
            position: absolute;
            top: 0;
            height: 130px;
            background-color: #fff;
            z-index: -3;
        }
        .box2 {
            position: absolute;
            top: 0;
            height: 120px;
            z-index: -2;
            background-color: #c16d6c;

        }
        .box3 {
            position: absolute;
            top: 0;
            height: 110px;
            z-index: -1;
            background-color: #e85455;
            > div > * {
                padding-top: 35px;
                margin: 0;
            }
            .menu-title {
                color: #fff;
                font-size: 3rem;
                font-weight: 100;
                margin-top: 0;
            }
            img {
                max-height: 50px;
                position: absolute;
                right: -10%;
            }
            .cookie-count {
                font-size: 3rem;
                color: #fff;
                font-weight: 100;
            }
        }
    }

</style>
