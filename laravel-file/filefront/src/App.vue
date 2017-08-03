<template>
    <div id="app">
        <div class="container">
            <div class="jumbotron">
                <h1>File Upload System</h1>
                <p>User Information</p>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <router-link to="/drop" tag="button" class="btn btn-block">Upload</router-link>
                </div>
                <div class="col-xs-6">
                    <router-link to="/list" tag="button" class="btn btn-block">List</router-link>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <router-view></router-view>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

</script>

<style>


</style>
