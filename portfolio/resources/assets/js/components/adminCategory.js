/**
 * Created by Adrian on 22/2월/17.
 */

var adminCategory = {
    showCategory: function () {
        var url = $(this).attr('data-link');

        $.get(url, {}, function (response) {
            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }
        });
    },
    updateCategory: function () {
        var url = $(this).attr('data-link');
        var formData = $('.category_edit_form').serialize();

        $.get(url, formData, function (response) {
            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }
            if (response.success == 0) {
                $('#error-msg').html(response.data.html);
            }
        });
    },
    createCategory: function () {
        var url = $(this).attr('data-link');
        $.get(url, {}, function (response) {
            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }
        });
    },
    storeCategory: function () {
        var url = $(this).attr('data-link');
        var formData = $('.category_add_form').serialize();

        $.post(url, formData, function (response) {
            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }
            if (response.success == 0) {
                $('#error-msg').html(response.data.html);
            }
        });
    },
    deleteCategory: function () {
        var url = $(this).attr('data-link');
        $.get(url, {}, function (response) {
            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }
        });
    },

    bind: function () {
        $('.admin_dashboard').on('click', '#do_category_show', adminCategory.showCategory);
        $('.admin_dashboard').on('click', '#do_category_update', adminCategory.updateCategory);
        $('.admin_dashboard').on('click', '#do_category_create', adminCategory.createCategory);
        $('.admin_dashboard').on('click', '#do_category_store', adminCategory.storeCategory);
        $('.admin_dashboard').on('click', '#do_category_delete', adminCategory.deleteCategory);


    }
};

$(adminCategory.bind);