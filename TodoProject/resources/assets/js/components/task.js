/**
 * Created by Adrian on 20/12월/16.
 */


var task = {

    deleteForm:function () {
        var url = $(this).attr('data-link');

        $.get(url, {}, function(response){
            if (response.success == 1) {

                $('.Task_Panel').html(response.data.html);
            }
        });
    },
    storeForm: function () {

        var url = $(this).attr('data-link');
        var formData = $('.task_create_form').serialize();

        $.post(url, formData, function(response){
            if (response.success == 1) {
                $('.Task_Panel').html(response.data.html);
            }
        });
    },

    createForm:function(){
        var url = $(this).attr('data-link');

        $.get(url, {}, function(response){
            if (response.success == 1) {

                $('.Task_Panel').html(response.data.html);
            }
        });
    },


    updateForm: function () {

        var url = $(this).attr('data-link');
        var formData = $('.task_edit_form').serialize();

        $.get(url, formData, function(response){
            if (response.success == 1) {

                $('.Task_Panel').html(response.data.html);
            }
        });
    },

    editForm: function () {
        var url = $(this).attr('data-link');

        $.get(url, {}, function(response){
            if (response.success == 1) {

                $('.Task_Panel').html(response.data.html);
            }
        });
    },


    showForm: function () {
        var url = $(this).attr('data-link');

        $.get(url, {}, function(response){
            if (response.success == 1) {

                $('.Task_Panel').html(response.data.html);
            }
        });
    },

    bind: function () {

        $('.table').on('click', '#task_show', task.showForm);
        $('.table').on('click', '#task_edit', task.editForm);
        $('.Task_Panel').on('click', '#do_TaskSave', task.updateForm);
        $('body').on('click','#task_create', task.createForm);
        $('.Task_Panel').on('click', '#do_TaskCreate', task.storeForm);
        $('.Task_Panel').on('click', '#do_TaskDelete', task.deleteForm);

    }
};

$(task.bind);