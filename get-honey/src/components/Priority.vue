<template>
    <v-layout row>
        <v-flex xs3>
            <v-card-media
                    src="../../src/assets/image/1.jpg"
                    height="80px"
                    class="img-rounded">
            </v-card-media>
        </v-flex>
        <v-flex xs6>
            <v-card-text class="pt-2">
                <h5 class="mb-1"><b>{{priority.name}}</b></h5>
                <b>{{priority.follower}}</b>
                <small class="grey--text">Follower</small>

                <b>{{priority.following}}</b>
                <small class="grey--text">Following</small>
            </v-card-text>
        </v-flex>
        <v-flex xs3>
            <v-card-actions class="pt-2">
                <v-spacer></v-spacer>
                <v-chip class="white--text pl-3 pr-3" style="background-color: #ff3366">Follow</v-chip>
            </v-card-actions>
        </v-flex>
    </v-layout>
</template>

<script>
    export default {
        data() {
            return {
                priority: {
                    name: 'Masakomashu',
                    gender: 'female',
                    instagram: 'testidentity',
                    follower: '23k',
                    following: '9k'
                }
            }
        }
    }
</script>

<style scoped="">
    .img-rounded {
        border-radius: 10%;
    }
</style>
