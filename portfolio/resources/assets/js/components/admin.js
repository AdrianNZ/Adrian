/**
 * Created by Adrian on 8/2월/17.
 */

var admin = {
    showProject: function () {
        var url = $(this).attr('data-link');

        $.get(url, {}, function (response) {
            if (response.success == 1) {

                $('.admin_dashboard').html(response.data.html);
            }
        });
    },
    showCategory: function () {
        var url = $(this).attr('data-link');

        $.get(url, {}, function (response) {
            if (response.success == 1) {

                $('.admin_dashboard').html(response.data.html);
            }
        });
    },
    showSkill: function () {
        var url = $(this).attr('data-link');

        $.get(url, {}, function (response) {
            if (response.success == 1) {

                $('.admin_dashboard').html(response.data.html);
            }
        });
    },

    showTitle: function () {
        var url = $(this).attr('data-link');

        $.get(url, {}, function (response) {
            if (response.success == 1) {

                $('.admin_dashboard').html(response.data.html);
            }
        });
    },
    showNav: function () {
        var url = $(this).attr('data-link');

        $.get(url, {}, function (response) {
            if (response.success == 1) {

                $('.admin_dashboard').html(response.data.html);
            }
        });
    },
    showProfile: function () {
        var url = $(this).attr('data-link');

        $.get(url, {}, function (response) {
            if (response.success == 1) {

                $('.admin_dashboard').html(response.data.html);
            }
        });
    },
    activeClass: function (e) {
        $('#admin_menu_ul li').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    },

    bind: function () {
        $('.admin_menu').on('click', '#admin_menu_ul li', admin.activeClass);
        $('.admin_menu').on('click', '#profile_index', admin.showProfile);
        $('.admin_menu').on('click', '#nav_index', admin.showNav);
        $('.admin_menu').on('click', '#title_index', admin.showTitle);
        $('.admin_menu').on('click', '#skill_index', admin.showSkill);
        $('.admin_menu').on('click', '#category_index', admin.showCategory);
        $('.admin_menu').on('click', '#project_index', admin.showProject);
    }
};

$(admin.bind);
