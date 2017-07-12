<template>
    <div class="footer col-xs-12">
        <div class="row">
            <div class="col-xs-3 item">
                <div class="col-xs-12"><img src="../images/logo/cookies.svg" alt="gather cookie"
                                            class="img-responsive text-center"></div>
                <div class="col-xs-12">
                    <router-link :to="menus[0].to" tag="p" class="text-center">{{menus[0].title}}</router-link>
                </div>
            </div>
            <div class="col-xs-3 item">
                <div class="col-xs-12"><img src="../images/logo/shapes.svg" alt="get heart" class="img-responsive">
                </div>
                <div class="col-xs-12">
                    <router-link :to="menus[1].to" tag="p" class="text-center">{{menus[1].title}}</router-link>
                </div>
            </div>
            <div class="col-xs-3 item">
                <div class="col-xs-12"><img src="../images/logo/shop.svg" alt="heart store" class="img-responsive">
                </div>
                <div class="col-xs-12"><p class="text-center">{{menus[2].title}}</p></div>
            </div>
            <div class="col-xs-3 item">
                <div class="col-xs-12"><img src="../images/logo/settings.svg" alt="config" class="img-responsive">
                </div>
                <div class="col-xs-12">
                    <router-link :to="menus[3].to" tag="p" class="text-center">{{menus[3].title}}</router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        data() {
            return {
                menus: [
                    {id: 1, to: 'list', title: '쿠키줍기'},
                    {id: 2, to: 'heart', title: '하트받기'},
                    {id: 3, to: 'store', title: '쿠키상점'},
                    {id: 4, to: 'config', title: '환경설정'},
                ]
            }
        }
    }
</script>

<style lang="scss" scoped>
    .footer {
        position: fixed;
        z-index: 10;
        bottom: 0;
        overflow: hidden;
        background-color: #fff;
        opacity: 0.9;
        height: 90px;

        .item {
            margin-top: 15px;
            img {
                max-height: 30px;
            }
            p {
                font-size: 2rem;
            }
        }
    }
</style>