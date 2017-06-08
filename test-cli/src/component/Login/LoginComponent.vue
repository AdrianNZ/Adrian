<template>
    <div id="login-container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 outline">
                <div class="row login-info">
                    <div class="col-xs-6 col-xs-offset-2">
                        <h4>Member Login</h4>
                        <p>
                            <small class="">발급 받은 아이디와 패스워드를 입력해주세요</small>
                        </p>
                    </div>
                    <div class="col-xs-1 col-xs-offset-1">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row login-form">
                    <form class="form-horizontal" method="post" action="/login" @submit.prevent="onSubmit">
                        <div class="form-group">
                            <label for="inputEmail" class="col-xs-3 control-label text-right">Email</label>
                            <div class="col-xs-8">
                                <input v-model="email" type="email" class="form-control" id="inputEmail"
                                       placeholder="Email" name="email">
                            </div>
                            <br>
                            <span class="col-xs-offset-3 col-xs-9 text-danger"></span>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword" class="col-xs-3 control-label text-right">Password</label>
                            <div class="col-xs-8">
                                <input v-model="password" type="password" class="form-control" id="inputPassword"
                                       placeholder="Password" name="password">
                            </div>
                            <br>
                            <span class="col-xs-offset-3 col-xs-9 text-danger"></span>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-9">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 내 아이디 기억하기
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-9">
                                <button type="submit" class="btn btn-primary btn-block">로그인 하기
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
                <div class="row login-password">
                    <div class="col-sm-8 col-sm-offset-2">
                        <span class="glyphicon glyphicon-lock" aria-hidden="true"> 비밀번호를 잊으셨습니까?</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        data: function () {
            return {
                email: [],
                password: []

            }
        }
    }
</script>

<style>
    .outline {
        border: 0.11px solid #000000;
        background: linear-gradient(#3498db, #52EDC7)
    }

    #login-container {
        margin-top: 121px;
    }

    #login-container .login-info {
        padding-top: 10px;
        padding-bottom: 10px;

    }

    #login-container .login-form {
        background-color: lightgray;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    #login-container .login-password {
        color: #ffffff;
        padding-top: 10px;
        padding-bottom: 10px;
        background-color: #5e5d5d;
    }

    #login-container .glyphicon.glyphicon-user {
        font-size: 75px;
        color: slategray;
    }
</style>