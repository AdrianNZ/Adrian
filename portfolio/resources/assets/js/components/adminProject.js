/**
 * Created by Adrian on 23/2월/17.
 */

var adminProject = {
    showProject: function () {
        var url = $(this).attr('data-link');

        $.get(url, {}, function (response) {
            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }
        });
    },

    updateProject: function () {
        var url = $(this).attr('data-link');
        // var formData = $('.project_edit_form').serialize();
        tinymce.triggerSave();

        var form = $('#project_edit_form')[0];
        var formData = new FormData(form);

        // $.get(url, formData, function (response) {
        //     if (response.success == 1) {
        //         $('.admin_dashboard').html(response.data.html);
        //     }
        // });
        $.ajax({
            url: url,
            method: 'POST',
            contentType: false,
            processData: false,
            data: formData,
            token: $('meta[name="_token"]').attr('content'),
            success: function (response) {
                if (response.success == 1) {
                    $('.admin_dashboard').html(response.data.html);
                }
                if (response.success == 0) {
                    $('#error-msg').html(response.data.html);
                }
            }
        })
    },

    createProject: function () {
        var url = $(this).attr('data-link');
        $.get(url, {}, function (response) {
            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }
        });
    },

    storeProject: function () {
        var url = $(this).attr('data-link');
        // var formData = $('.project_add_form').serialize();
        tinymce.triggerSave();

        var form = $('#project_add_form')[0];
        var formData = new FormData(form);

        // $.post(url, formData, function (response) {
        //     if (response.success == 1) {
        //         $('.admin_dashboard').html(response.data.html);
        //     }
        // });
        $.ajax({
            url: url,
            method: 'POST',
            contentType: false,
            processData: false,
            data: formData,
            token: $('meta[name="_token"]').attr('content'),
            success: function (response) {
                if (response.success == 1) {
                    $('.admin_dashboard').html(response.data.html);
                }
                if (response.success == 0) {
                    $('#error-msg').html(response.data.html);
                }
            }
        })
    },

    deleteProject: function () {
        var url = $(this).attr('data-link');
        $.get(url, {}, function (response) {
            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }
        });
    },
    // multiple: function(){
    //     console.log('1');
    //     $('#multiple_select').select2();
    // },


    bind: function () {
        $('.admin_dashboard').on('click', '#do_project_delete', adminProject.deleteProject);
        $('.admin_dashboard').on('click', '#do_project_show', adminProject.showProject);
        $('.admin_dashboard').on('click', '#do_project_update', adminProject.updateProject);
        $('.admin_dashboard').on('click', '#do_project_store', adminProject.storeProject);
        $('.admin_dashboard').on('click', '#do_project_create', adminProject.createProject);
        // $('.admin_dashboard').on('click', '#do_project_create', adminProject.multiple);

    }
};

$(adminProject.bind);