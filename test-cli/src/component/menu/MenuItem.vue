<template>
    <div class="menuitem">
        <li class="list-group-item" @click="getMenu(item.id)">{{item.title}}
            <span class="badge">14</span>
        </li>

    </div>
</template>
<script>


    import Inbox from '../contents/inbox.vue';
//    import NextWeek from '../contents/NextWeek.vue';
//    import Today from '../contents/Today.vue';

    import {eventBus} from '../../main'


    var srcInbox = Inbox;
//    var srcNextWeek = NextWeek;
//    var srcToday = Today;

    export default{
        props: ['item'],

        data: function () {
            return {}
        },
        methods:{
            getMenu(id){
                var screen = null;

                switch(id){
                    case 1:
                        screen = srcInbox;
                        break;
                    case 2:
                        screen = srcNextWeek;
                        break;
                    case 3:
                        screen = srcToday;
                        break
                }

                eventBus.$emit('setScreen', screen);
            }
        }
    }
</script>

<style>
    .menuitem>li:hover{
        cursor:pointer;
        background-color: lightskyblue;
    }
</style>