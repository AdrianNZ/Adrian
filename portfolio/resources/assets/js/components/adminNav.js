/**
 * Created by Adrian on 11/3월/17.
 */

var adminNav = {
    showNav: function () {
        var url = $(this).attr('data-link');

        $.get(url, {}, function (response) {
            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }
        });
    },
    updateNav: function () {

        var url = $(this).attr('data-link');
        var formData = $('.nav_edit_form').serialize();

        $.get(url, formData, function (response) {

            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }

            if (response.success == 0) {
                $('#error-msg').html(response.data.html);
            }
        });
    },
    createNav: function () {
        var url = $(this).attr('data-link');
        $.get(url, {}, function (response) {
            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }
        });
    },
    storeNav: function () {
        var url = $(this).attr('data-link');
        var formData = $('.nav_add_form').serialize();

        $.post(url, formData, function (response) {
            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }
            if (response.success == 0) {
                $('#error-msg').html(response.data.html);
            }
        });
    },
    deleteNav: function () {
        var url = $(this).attr('data-link');
        $.get(url, {}, function (response) {
            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }
        });
    },

    bind: function () {
        $('.admin_dashboard').on('click', '#do_nav_show', adminNav.showNav);
        $('.admin_dashboard').on('click', '#do_nav_update', adminNav.updateNav);
        $('.admin_dashboard').on('click', '#do_nav_create', adminNav.createNav);
        $('.admin_dashboard').on('click', '#do_nav_store', adminNav.storeNav);
        $('.admin_dashboard').on('click', '#do_nav_delete', adminNav.deleteNav);
    }
};

$(adminNav.bind);