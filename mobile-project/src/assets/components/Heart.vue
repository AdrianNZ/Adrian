<template>
    <div class="heart-component">
        <div class="col-xs-10 col-xs-offset-1 text-center">
            <div class="btn-group btn-group-justified">
                <div class="btn-group">
                    <button class="btn btn-danger" type="button">신규 등록</button>
                </div>
                <div class="btn-group">
                    <button class="btn btn-default" type="button">진행 목록</button>
                </div>
            </div>
        </div>
        <div class="center-icon">
            <div class="col-xs-4 col-xs-offset-4 circle-layout">
                <img src="../images/logo/shapes_active.svg" alt="get heart" class="img-responsive center-block img-circle">
            </div>
            <div class="col-xs-6 col-xs-offset-3">
                <p class="text-center">좋아요를 올릴 게시물 또는<br/> 팔로워를 늘릴 계정을 선택해주세요.</p>
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
    .heart-component {
        position: relative;
        margin-top: 150px;
        overflow: scroll;
        padding-bottom: 90px;

        button {
            height: 50px;
            letter-spacing: 2px;
        }
        .center-icon {
            margin-top: 300px;
            .circle-layout {
                img {
                    padding: 30px;
                    border: 5px solid #e85455;
                }
            }

            p {
                margin-top: 20px;
                color: #e85455;
                font-size: 3rem;
            }
        }
    }
</style>