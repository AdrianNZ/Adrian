<template>
    <div class="contents col-sm-9 col-md-8 col-lg-8">
        <!--<app-inbox></app-inbox>-->
        <component :is="selectedComponent"></component>
    </div>
</template>

<script>

    import Inbox from './contents/inbox.vue'
    import {eventBus} from '../main'

    export default{
        data: function () {
            return {
                selectedComponent:'appInbox'
            }
        },

        components:{
            appInbox : Inbox
        },


        created(){
            eventBus.$on('setScreen', (appScreen)=>{
                this.selectedComponent = appScreen;
            })
        }
    }
</script>

<style>
</style>