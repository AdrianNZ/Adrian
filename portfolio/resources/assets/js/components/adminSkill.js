/**
 * Created by Adrian on 12/2월/17.
 */

var adminSkill = {
    showSkill: function () {
        var url = $(this).attr('data-link');

        $.get(url, {}, function (response) {
            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }
        });
    },
    updateSkill: function () {
        var url = $(this).attr('data-link');
        var formData = $('.skill_edit_form').serialize();

        $.get(url, formData, function (response) {
            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }
            if (response.success == 0) {
                $('#error-msg').html(response.data.html);
            }
        });
    },
    createSkill: function () {
        var url = $(this).attr('data-link');
        $.get(url, {}, function (response) {
            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }
        });
    },
    storeSkill: function () {
        var url = $(this).attr('data-link');
        var formData = $('.skill_add_form').serialize();

        $.post(url, formData, function (response) {
            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }
            if (response.success == 0) {
                $('#error-msg').html(response.data.html);
            }
        });
    },
    deleteSkill: function () {
        var url = $(this).attr('data-link');
        $.get(url, {}, function (response) {
            if (response.success == 1) {
                $('.admin_dashboard').html(response.data.html);
            }
        });
    },

    bind: function () {
        $('.admin_dashboard').on('click', '#do_skill_show', adminSkill.showSkill);
        $('.admin_dashboard').on('click', '#do_skill_update', adminSkill.updateSkill);
        $('.admin_dashboard').on('click', '#do_skill_create', adminSkill.createSkill);
        $('.admin_dashboard').on('click', '#do_skill_store', adminSkill.storeSkill);
        $('.admin_dashboard').on('click', '#do_skill_delete', adminSkill.deleteSkill);


    }
};

$(adminSkill.bind);