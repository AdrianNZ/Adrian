<template>
    <div class="dropzone">
        <DropZone id="myVueDropzone" url="http://127.0.0.1:8000/api/excel" @vdropzone-success="showSuccess" @vdropzone-error="showError" ref="dropArea" :dropzone-options="customOptionsObject">
            <!-- Optional parameters if any! -->
            <input type="hidden" name="token" value="xxx">
        </DropZone>
        <hr>
        <button v-if="removeAllFiles" class="btn btn-danger" @click="removeAllFilesBtn()">Remove all</button>
    </div>
</template>

<script>
    import DropZone from 'vue2-dropzone'
    import Vue from 'vue'

    export default {
        data() {
            return {
                removeAllFiles:false,
                customOptionsObject: {
                    acceptedFileTypes: '.xls, .xlsx'
                },
            }
        },
        name: 'MainApp',
        components: {
            DropZone
        },
        methods: {
            'showSuccess': function (file) {
                console.log('A file was successfully uploaded');
                this.removeAllFiles=true;
            },
            'showError':function(file){
                console.log('Fail to Upload');
                this.removeAllFiles=true;
            },
            removeAllFilesBtn(){
                this.removeAllFiles=false;
                this.$refs.dropArea.removeAllFiles()
            }
        }
    }
</script>

<style>

</style>