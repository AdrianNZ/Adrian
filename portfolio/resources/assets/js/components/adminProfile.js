/**
 * Created by Adrian on 10/2월/17.
 */


var adminProfile = {

    updateProfile: function () {
        var url = $(this).attr('data-link');
        // var formData = $('.profile_edit_form').serialize();

        var form = $('#profile_edit_form')[0];
        var formData = new FormData(form);

        // $.get(url, formData, function(response){
        //     if (response.success == 1) {
        //
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
            },
            error: function (response) {
                if (response.success == 0) {
                    $('#error-msg').html(response.data.html);
                }
            }
        })
    },

    bind: function () {
        $('.admin_dashboard').on('click', '#do_profile_update', adminProfile.updateProfile);
    }
};

$(adminProfile.bind);