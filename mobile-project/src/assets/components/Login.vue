<template>
    <div class="login-component">
        <div class="login-background">
        </div>
        <div class="login-section">
            <div class="logo col-xs-6 col-xs-offset-3 text-center">
                <img src="../images/logo/shapes-1.svg" alt="logo" class="img-responsive">
            </div>

            <div class="login-form col-xs-10 col-xs-offset-1 text-center">
                <form action="">
                    <div class="form-group">
                        <input type="text" class=form-control  placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class=form-control  placeholder="password" required>
                    </div>
                </form>
            </div>
            <div class="col-xs-10 col-xs-offset-1 text-center">
                <button class="btn btn-success btn-lg btn-block">
                    Log in
                </button>
            </div>

            <div class="forget-password col-xs-8 col-xs-offset-2 text-center">
                <h2><a> Forgot your password?</a></h2>
            </div>

            <div class="signup col-xs-12 text-center">
                <h3>No Account yet? <span><a>Sign Up</a></span></h3>
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
    .login-component {
        margin: 0;
        min-height:100vh;
        overflow: hidden;
    }

    .login-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.2;
        z-index: -1;
        background-image: url('../images/stock-photo-211492303.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .login-section {
        background: transparent;
        position: relative;
        margin-top: 30%;

        .logo img {
            width: 100%;
            opacity: 0.7;
        }

        .login-form form:first-child {
            margin-top: 150px;
        }

        .form-group {
            margin-bottom: 40px;
            input {
                height: 80px;
                font-size: 2rem;
                background: transparent;
                border: solid 1.2px #fff;
            }
        }

        button {
            margin-top: 80px;
            margin-bottom: 40px;
            font-size: 2rem;
            padding: 20px 0 20px 0 !important;
        }

        .signup {
            padding: 20px 0 20px 0;
            border-top: 1px solid #4a4946;
            margin-top: 85px;
        }
    }
</style>