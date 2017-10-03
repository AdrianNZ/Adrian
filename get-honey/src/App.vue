<template>
    <v-app white>
        <main>
            <router-view class="mb-5"></router-view>
        </main>
        <!--하단 네비게이션-->
        <v-card>
            <v-bottom-nav absolute :value="true" :active.sync="el" class="white footer--fixed z--index--top">
                <v-btn v-for="item in menuItems" flat small class="pink--text pt-1" :value="item.value" :key="item.id" :to="item.to">
                    <span>{{item.title}}</span>
                    <img class="btn--small" :src="item.src"/>
                </v-btn>
                <v-btn value="profile" router to="/profile" class="pt-1">
                    <span></span>
                    <img class="btn--icon" src="../src/assets/image/1.jpg">
                </v-btn>
            </v-bottom-nav>
        </v-card>
        <!--하단 네비게이션 종료-->
    </v-app>
</template>

<script>
    export default {
        data() {
            return {
                el: '',
                menuItems: [
                    {id: 1, title: '허니줍기', src: '../src/assets/icon/ic-허니줍기.svg', value: 'pick', to:'/pick'},
                    {id: 2, title: '허니받기', src: '../src/assets/icon/ic-허니받기.svg', value: 'get', to:'/get'},
                    {id: 3, title: '허니상점', src: '../src/assets/icon/ic-허니상점.svg', value: 'store', to:'/store'}
                ]
            }
        }
    }
</script>

<style lang="stylus">
    @import './stylus/main';
    z--index--top{
        z-index: 999;
    }
</style>