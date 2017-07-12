<template>
    <div class="edit-component">
        <div class="container-fluid wrapper">
            <div class="row">
                <div class="col-xs-3 config-title">
                    <h4 class="text-center">{{$route.meta.title}}</h4>
                </div>
            </div>
            <div class="row user-desc">
                <div class="col-xs-3 avatar">
                    <img src="../images/avatar.svg" alt="avatar" class="img-responsive center-block">
                </div>
                <div class="col-xs-9 desc text-left">
                    <h4>idattribute</h4>
                    <h5>ID번호: 2017215923-</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 cookie-desc">
                    <div class="col-xs-9">
                        <div class="col-xs-10">
                            <img src="../images/logo/biscuit.svg" alt="biscuit"
                                 class="pull-left">
                            <span class="">보유쿠키</span>
                        </div>
                        <div class="col-xs-2"><h3 class="text-right">483</h3></div>
                    </div>
                    <div class="col-xs-3 buy-cookie">
                        <h3 class="text-center">쿠키구매</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="col-xs-12 list-group">
                <a class="list-group-item disabled">고객지원</a>
                <a class="list-group-item"><i class="fa fa-question fa-fw" aria-hidden="true"></i><span>자주하는 질문</span></a>
                <a class="list-group-item"><i class="fa fa-list fa-fw" aria-hidden="true"></i><span>공지사항</span></a>
                <a class="list-group-item"><i class="fa fa-comment fa-fw" aria-hidden="true"></i><span>카카오톡 문의</span></a>
                <a class="list-group-item disabled">추천인</a>
                <a class="list-group-item"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span>추천인 관리</span></a>
                <a class="list-group-item"><i class="fa fa-external-link fa-fw" aria-hidden="true"></i><span>카카오톡 공유</span></a>
                <h6>친구에게 공유하고 추천인을 모아 무료쿠키를 획득하세요!</h6>
                <a class="list-group-item disabled">일반</a>
                <a class="list-group-item"><i class="fa fa-comments fa-fw" aria-hidden="true"></i><span>커뮤니티</span></a>
                <a class="list-group-item"><i class="fa fa-money fa-fw" aria-hidden="true"></i><span>광고주 신청</span></a>
                <a class="list-group-item">
                    <i class="fa fa-cart-plus fa-fw" aria-hidden="true"></i>
                    <span>자동 쿠키줍기</span>
                    <label class="switch pull-right">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </a>
                <a class="list-group-item disabled"></a>
                <a class="list-group-item"><span>(주)컴앤드키</span>
                    <i class="fa fa-home fa-fw pull-right" aria-hidden="true"></i>
                    <i class="fa fa-instagram fa-fw pull-right" aria-hidden="true"></i>
                    <i class="fa fa-facebook fa-fw pull-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <app-footer></app-footer>
    </div>
</template>

<script>
    import Footer from './Footer.vue'
    export default{
        data() {
            return {}
        },
        components: {
            appFooter: Footer
        }
    }
</script>

<style lang="scss" scoped>

    .edit-component {
        position: relative;
        overflow: scroll;
        padding-bottom: 90px;
        .wrapper {
            color: #fff;
            font-weight: 100 !important;
            background: linear-gradient(1deg, rgb(232, 83, 83), rgb(239, 135, 54));
            .config-title {
                margin-bottom: 10px;
                h4 {
                    font-weight: 100;
                }
            }
            .user-desc {
                img {
                    max-width: 130px;
                    max-height: 130px;
                }
                h4, h5 {
                    font-size: 2rem;
                    padding-top: 15px;
                    font-weight: 100;
                    letter-spacing: 1.7px;
                    transform: translateX(-7%);
                }
            }
            .desc > * {
                margin-top: 0;

            }
            .cookie-desc {
                min-height: 50px;
                position: relative;
                margin-top: 30px;
                border-top: 1px solid #fff;
                img {
                    position: absolute;
                    left: 10px;
                    top: 10px;
                    max-height: 30px;
                    max-width: 30px;
                    display: inline-block;
                }
                span {
                    display: inline-block;
                    position: absolute;
                    left: 50px;
                    top: 10px;
                    font-size: 1.8rem;
                }
                h3 {
                    font-weight: 100;
                    margin: 0;
                    font-weight: 100;
                    font-size: 1.9rem;
                    padding: 17px 0 15px 0;
                }
                .buy-cookie {
                    border-left: 1px solid #fff;
                }
            }
        }
        .list-group {
            padding: 0;

            a {
                padding: 20px 10px 20px 25px;
                font-size: 2.3rem;
                font-weight: 200;
                span{
                    padding-left: 20px;
                }
            }

            h6 {
                color: #000;
                opacity: .8;
                background-color: #eee;
                margin: 0;
                padding: 10px 0 10px 25px;
                font-size: 1.7rem;
            }
            :last-child>i{
                padding-right: 60px;
            }
        }
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
            margin-right: 50px;
        }

        /* Hide default HTML checkbox */
        .switch input {display:none;}

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    }

</style>