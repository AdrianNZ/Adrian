<template>
    <v-container fluid white class="pa-0">
        <v-layout row wrap class="pl-4 pr-3">
            <v-flex xs12>
                <v-card flat>
                    <v-layout row>
                        <v-flex xs11 class="text-xs-center">
                            <v-card-title class="pl-0">
                                <!--홈으로 돌아가는 라우터-->
                                <router-link to="/" tag="i"><v-icon>arrow_back</v-icon></router-link>
                                <h4 class="ma-0 pl-2">허니줍기</h4>
                            </v-card-title>
                        </v-flex>
                        <v-flex xs1 class="text-xs-center">
                            <!--노티피케이션 종-->
                            <v-card-actions style="padding-top: 16px">
                                <v-btn icon>
                                    <div v-if="notification==true" class="notification--box"></div>
                                    <img class="" src="../../src/assets/logo/ring.png" style="height: 18px">
                                </v-btn>
                            </v-card-actions>
                        </v-flex>
                    </v-layout>
                </v-card>
            </v-flex>
        </v-layout>
        <v-divider></v-divider>
        <!--우선 설정된 사용자들 모아서 보여주는 컴퍼넌트-->
        <!--###추후 carousel로 변경 요망-->
        <app-priority-component class="mt-3 mb-3 pl-4 pr-3"></app-priority-component>
        <!--컴퍼넌트 종료-->
        <!--회색 Border-->
        <v-layout>
            <v-flex xs12>
                <div class="border--box"></div>
            </v-flex>
        </v-layout>
        <!--회색 Border 종료-->
        <!--사진 보여주는 필터링-->
        <v-container class="pa-0">
            <v-layout row>
                <v-flex xs4>
                    <v-btn flat block>
                        <v-icon>format_list_bulleted
                        </v-icon>
                        <small>전체</small>
                    </v-btn>
                </v-flex>
                <v-flex xs4>
                    <v-btn flat block>
                        <v-icon>grid_on</v-icon>
                        <small>라이크필요</small>
                    </v-btn>
                </v-flex>
                <v-flex xs4>
                    <v-btn flat block>
                        <v-icon>bookmark_border
                        </v-icon>
                        <small>팔로우필요</small>
                    </v-btn>
                </v-flex>
            </v-layout>
        </v-container>
        <!--필터링 종료-->
        <!--사진 보여주는 컨테이너 시작-->
        <v-container fluid class="pa-0">
            <v-layout row wrap>
                <v-flex xs4 v-for="item in items" :key="item.id">
                    <v-card-media
                            :src="item.src"
                            height="140px">
                    </v-card-media>
                </v-flex>
            </v-layout>
        </v-container>
        <!--사진 보여주는 컨테이너 종료-->
    </v-container>
</template>

<script>
    export default {
        data() {
            return {
                notification: true,
                items: [
                    {id: 1, src: '../src/assets/image/1.jpg'},
                    {id: 2, src: '../src/assets/image/2.png'},
                    {id: 3, src: '../src/assets/image/3.jpg'},
                    {id: 4, src: '../src/assets/image/4.png'},
                    {id: 5, src: '../src/assets/image/5.png'},
                    {id: 6, src: '../src/assets/image/6.jpg'},
                    {id: 7, src: '../src/assets/image/7.jpg'},
                    {id: 8, src: '../src/assets/image/8.jpg'},
                    {id: 9, src: '../src/assets/image/9.jpg'},
                    {id: 9, src: '../src/assets/image/9.jpg'},
                    {id: 9, src: '../src/assets/image/9.jpg'},
                    {id: 9, src: '../src/assets/image/9.jpg'},
                    {id: 9, src: '../src/assets/image/9.jpg'},
                    {id: 9, src: '../src/assets/image/9.jpg'},
                ]
            }
        }
    }
</script>

<style scoped="">
    .notification--box {
        width: 8px;
        height: 8px;
        background-color: #ff3366;
        position: absolute;
        top: 5px;
        right: 0;
        border-radius: 50%;
    }
    .border--box{
        height: 10px;
        background: #fafafa;
        color: rgba(0,0,0,0.87);
    }
</style>
