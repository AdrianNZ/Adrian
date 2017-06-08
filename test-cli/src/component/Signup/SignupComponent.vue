<template>
    <div id="signup-container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 outline">
                <div class="row signup-info">
                    <div class="col-xs-6 col-xs-offset-2">
                        <h4>Member signup</h4>
                        <p>
                            <small class="">가입하실 아이디와 패스워드를 입력해주세요</small>
                        </p>
                    </div>
                    <div class="col-xs-1 col-xs-offset-1">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row signup-form">
                    <form class="form-horizontal" method="post" action="/signup" @submit.prevent="onSubmit">
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
                                <button type="submit" class="btn btn-primary btn-block">가입 하기
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
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

    #signup-container {
        margin-top: 121px;
    }

    #signup-container .signup-info {
        padding-top: 10px;
        padding-bottom: 10px;

    }

    #signup-container .signup-form {
        background-color: lightgray;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    #signup-container .signup-password {
        color: #ffffff;
        padding-top: 10px;
        padding-bottom: 10px;
        background-color: #5e5d5d;
    }

    #signup-container .glyphicon.glyphicon-user {
        font-size: 75px;
        color: slategray;
    }
</style>