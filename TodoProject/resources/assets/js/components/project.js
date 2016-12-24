/**
 * Created by Adrian on 20/12월/16.
 */


var project = {

    deleteForm:function () {
        var url = $(this).attr('data-link');

        $.get(url, {}, function(response){
            if (response.success == 1) {

                $('.Project_Panel').html(response.data.html);
            }
        });
    },
    storeForm: function () {

        var url = $(this).attr('data-link');
        var formData = $('.create_form').serialize();

        $.post(url, formData, function(response){
            if (response.success == 1) {
                $('.Project_Panel').html(response.data.html);
            }
        });
    },

    createForm:function(){
        var url = $(this).attr('data-link');

        $.get(url, {}, function(response){
            if (response.success == 1) {

                $('.Project_Panel').html(response.data.html);
            }
        });
    },


    updateForm: function () {

        var url = $(this).attr('data-link');
        var formData = $('.edit_form').serialize();

        $.get(url, formData, function(response){
            if (response.success == 1) {

                $('.Project_Panel').html(response.data.html);
            }
        });
    },

    editForm: function () {
        var url = $(this).attr('data-link');

        $.get(url, {}, function(response){
            if (response.success == 1) {

                $('.Project_Panel').html(response.data.html);
            }
        });
    },


    showForm: function () {
        var url = $(this).attr('data-link');

        $.get(url, {}, function(response){
            if (response.success == 1) {

                $('.Project_Panel').html(response.data.html);
            }
        });
    },

    bind: function () {

        $('.table').on('click', '#project_show', project.showForm);
        $('.table').on('click', '#project_edit', project.editForm);
        $('.Project_Panel').on('click', '#do_Save', project.updateForm);
        $('body').on('click','#project_create', project.createForm);
        $('.Project_Panel').on('click', '#do_Create', project.storeForm);
        $('.Project_Panel').on('click', '#do_Delete', project.deleteForm);


    }
};

$(project.bind);