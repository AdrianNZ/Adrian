/**
 * Created by Adrian on 10/2월/17.
 */


var adminTitle = {
    showTitle:function(){
        var url = $(this).attr('data-link');

        $.get(url, {}, function(response){
            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }
        });
    },
    updateTitle: function () {
        var url = $(this).attr('data-link');
        var formData = $('.title_edit_form').serialize();

        $.get(url, formData, function (response) {
            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }
            if (response.success == 0) {
                $('#error-msg').html(response.data.html);
            }
        });
    },
    createTitle:function(){
        var url = $(this).attr('data-link');
        $.get(url, {}, function(response){
            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }
        });
    },
    storeTitle:function () {
        var url = $(this).attr('data-link');
        var formData = $('.title_add_form').serialize();

        $.post(url, formData, function (response) {
            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }
            if (response.success == 0) {
                $('#error-msg').html(response.data.html);
            }
        });
    },
    deleteTitle:function(){
        var url = $(this).attr('data-link');
        $.get(url, {}, function(response){
            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }
        });
    },
    selectOne:function () {
        $(this).siblings('input[type="checkbox"]').prop('checked', false);
    },
    bind: function () {
        $('.admin_dashboard').on('click', '#do_title_show', adminTitle.showTitle);
        $('.admin_dashboard').on('click', '#do_title_update', adminTitle.updateTitle);
        $('.admin_dashboard').on('click', '#do_title_create', adminTitle.createTitle);
        $('.admin_dashboard').on('click', '#do_title_store', adminTitle.storeTitle);
        $('.admin_dashboard').on('click', '#do_title_delete', adminTitle.deleteTitle);


        // $('input[type="checkbox"]').on('change', adminTitle.selectOne); why not bind???
    }
};

$(adminTitle.bind);
