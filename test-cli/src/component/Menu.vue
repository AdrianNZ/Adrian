<template>
    <div class="menu col-sm-3 col-md-4 col-lg-4">
        <div class="top-menu">
            <ul class="list-group">
                <app-menu-item v-for="menu in menus" :item="menu"></app-menu-item>
            </ul>
        </div>
        <div class="tab-menu">
            <app-tab-menu-item></app-tab-menu-item>
        </div>
    </div>
</template>

<script>

    import MenuItem from './menu/MenuItem.vue';
    import TabItem from './menu/MenuTab.vue'

    var dataMenu = [
        {id: 1, title: "Inbox", href:"inbox", to:"ContentInbox"},
        {id: 2, title: "Today", href:"today",to:"ContentInbox"},
        {id: 3, title: "Next Week", href:'nextweek',to:"ContentInbox"},
        {id: 4, title: "Next Month", href:'nextmonth',to:"ContentInbox"}
    ];

    export default{
        data: function () {
            return {
                menus: []
            }
        },

        components: {
            appMenuItem: MenuItem,
            appTabMenuItem: TabItem,
        },
        methods:{

        },
        created(){
            this.menus = dataMenu;
        }
    }
</script>

<style>
</style>