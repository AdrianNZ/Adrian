<template>
    <div class="menu col-sm-3 col-md-4 col-lg-4">
        <div class="top-menu">
            <ul class="list-group">
                <app-menu-item v-for="menu in menus" :item="menu" :key="menu.id"></app-menu-item>
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
        {id: 1, title: "Inbox", href:"inbox", goto:"ContentInbox"},
        {id: 2, title: "Today", href:"today",goto:"ContentInbox"},
        {id: 3, title: "Next Week", href:'nextweek',goto:"ContentInbox"},
        {id: 4, title: "Next Month", href:'nextmonth',goto:"ContentInbox"}
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