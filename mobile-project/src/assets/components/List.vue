<template>
    <div class="list-component">
        <div class="col-xs-12 pull-right">
            <ul class="pull-right">
                <li><a>전체</a></li>
                <li><a>좋아요</a></li>
                <li><a>팔로우</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <div class="row img-slide">
            <div class="col-xs-6 img-item">
                <img src="../images/1.jpg" alt="" class="img-responsive">
                <span>광고</span>
            </div>
            <div class="col-xs-6 img-item">
                <img src="../images/2.jpg" alt="" class="img-responsive">
                <span>광고</span>

            </div>
            <div class="col-xs-6 img-item">
                <img src="../images/3.jpg" alt="" class="img-responsive">
                <span>광고</span>

            </div>
            <div class="col-xs-6 img-item">
                <img src="../images/4.jpg" alt="" class="img-responsive">
                <span>광고</span>

            </div>
            <div class="col-xs-6 img-item">
                <img src="../images/1.jpg" alt="" class="img-responsive">
                <span>광고</span>

            </div>
            <div class="col-xs-6 img-item">
                <img src="../images/2.jpg" alt="" class="img-responsive">
                <span>광고</span>

            </div>
            <div class="col-xs-6 img-item">
                <img src="../images/3.jpg" alt="" class="img-responsive">
                <span>광고</span>

            </div>
            <div class="col-xs-6 img-item">
                <img src="../images/4.jpg" alt="" class="img-responsive">
                <span>광고</span>

            </div>
            <div class="col-xs-6 img-item">
                <img src="../images/1.jpg" alt="" class="img-responsive">
                <span>광고</span>

            </div>
            <div class="col-xs-6 img-item">
                <img src="../images/2.jpg" alt="" class="img-responsive">
                <span>광고</span>

            </div>
            <div class="col-xs-6 img-item">
                <img src="../images/3.jpg" alt="" class="img-responsive">
                <span>광고</span>

            </div>
            <div class="col-xs-6 img-item">
                <img src="../images/4.jpg" alt="" class="img-responsive">
                <span>광고</span>

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
    .list-component {
        position: relative;
        margin-top: 150px;
        overflow: scroll;
        padding-bottom: 90px;

        ul {
            text-decoration: none;
            margin-right: 2%;
            > * {
                margin-right: 20px;
                float: left;
                list-style: none;
            }
            a {
                font-size: 2rem;
            }
            li:after {
                content: '|';
                display: block;
                float: right;
                margin-left: 10px;
                font-size:2rem;
            }
            li:last-child:after {
                content: '';
                display: block;
            }

        }
        .img-slide {
            margin-top: 30px;

            > div {
                padding-left: 0;
                padding-right: 0;

                > img {
                    object-fit: cover;
                    width: 100%;
                    min-height: 500px;
                }
                > span {
                    overflow: hidden;
                    display: block;
                    width: 100%;
                    height: 50px;
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    background-color: darkgrey;
                    color: #fff;
                    opacity: 0.8;
                    z-index: 1;
                    font-size: 2.8rem;
                    padding-left: 40px;
                    padding-top: 5px;
                }
            }
        }
    }
</style>