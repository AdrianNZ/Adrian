<template>
    <div class="tab">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active" @click="clickedTab('project')">
                <a href="#project" aria-controls="project" role="tab" data-toggle="tab">Projects</a>
            </li>
            <li role="presentation" @click="clickedTab('last')">
                <a href="#last" aria-controls="last" role="tab" data-toggle="tab">Last Plan</a>
            </li>
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="project">
                <ul>
                    <app-menu-tab-page v-for="item in list" :item="item" :key="item.id"></app-menu-tab-page>
                </ul>
            </div>

            <div role="tabpanel" class="tab-pane" id="last">
                <ul>
                    <app-menu-tab-page v-for="item in lastplan" :item="item" :key="item.id"></app-menu-tab-page>
                </ul>
            </div>
        </div>
    </div>


</template>

<script>

    import MenuTabPage from './MenuTabPage.vue'

    var list = [
        {id: 1, title: "project1"},
        {id: 2, title: "project2"},
        {id: 3, title: "project3"},
        {id: 4, title: "project4"}
    ];

    var plan = [
        {id: 1, title: "plan1"},
        {id: 2, title: "plan2"},
        {id: 3, title: "plan3"},
        {id: 4, title: "plan4"}
    ];

    export default{
        data: function () {
            return {
                list: [],
                lastplan: []
            }
        },
        components: {
            appMenuTabPage: MenuTabPage
        },
        methods: {
            clickedTab(title){
                title == 'project' ? this.list = list : this.lastplan = plan;
            }
        },
        created(){
            this.list = list;
        }
    }
</script>

<style scoped>
    ul{list-style: none; padding: 0 10px;}
</style>