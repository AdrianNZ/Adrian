var main = {

    // infoupdate : function(){
    //
    //     var url = "http://localhost:8004/info/update";
    //
    //     var id = $('#infoid').val();
    //     var email = $('#infoemail').val();
    //     var password = $('#infopassword').val();
    //
    //     var param = {id:id, email:email, password:password};
    //
    //     $.post(url, param).done(function(data){
    //
    //         $('#myModal2').modal('hide');
    //
    //     });
    //
    //     $('body').on('click', '#btn_update_data', main.info);
    // },
    //
    // info : function(){
    //
    //     var url = "http://localhost:8004/get/info";
    //
    //     $.get(url, {}).done(function(data){
    //
    //         $('#myModal2').find('#infoid').text(data.id);
    //         $('#myModal2').find('#infoEmail').text(data.email);
    //         $('#myModal2').find('#infoinfopassword').text(data.password);
    //     });
    //
    //
    // },

    update : function(){

        var url = "http://localhost:8004/update/user";
        var idx = $('input[name="id"]').val();
        var name = $('input[name="name"]').val();
        var email = $('input[name="email"]').val();
        var phone = $('input[name="phone"]').val();
        var address = $('input[name="address"]').val();
        var dob = $('input[name="dob"]').val();

        var param = {id:idx, name:name, email:email, phone:phone, address:address, dob:dob};

        $.post(url, param).done(function(data){

            $('#myModal1').modal('hide');

            $('tr#'+data.id).find('#name').text(data.name);
            $('tr#'+data.id).find('#email').text(data.email);
            $('tr#'+data.id).find('#phone').text(data.phone);
            $('tr#'+data.id).find('#address').text(data.address);
            $('tr#'+data.id).find('#dob').text(data.dob);

        });
    },

    getVal : function(){

        var tr = $(this).closest('tr');

        $('input[name="id"]').val(tr.attr('id'));
        $('input[name="name"]').val(tr.find('#name').text());
        $('input[name="email"]').val(tr.find('#email').text());
        $('input[name="phone"]').val(tr.find('#phone').text());
        $('input[name="address"]').val(tr.find('#address').text());
        $('input[name="dob"]').val(tr.find('#dob').text());


        $('body').on('click', '#btn_update_data', main.update);
    },

    send : function(){

        var url = "http://localhost:8004/post/user";


        var name = $('#insertName').val();
        var email = $('#insertEmail').val();
        var phone = $('#insertPhone').val();
        var address = $('#insertAddress').val();
        var dob = $('#insertdob').val();


        var param = {name:name, email:email, phone:phone, address:address, dob:dob};

        $.post(url, param).done(function(data){

            $('#myModal3').modal('hide');

            var objTBody = $('table tbody');

            var clonetr = $('.template').clone();

            clonetr.attr('id', data.id);

            clonetr.find('#name').text(data.name);
            clonetr.find('#email').text(data.email);
            clonetr.find('#phone').text(data.phone);
            clonetr.find('#address').text(data.address);
            clonetr.find('#dob').text(data.dob);

            clonetr.find('#edit').val(edit);

            clonetr.find('#del a').attr('href', '/delete/'+data.id);


            clonetr.removeClass('template');

            objTBody.append(clonetr);

        });
    },

    onLoad : function(){
        var url = "http://localhost:8004/get/user";
        $.get(url, {}).done(function(data){

            var objTBody = $('table tbody');

            $.each(data, function(idx, val){
                var clonetr = $('.template').clone();

                clonetr.attr('id', val.id);

                clonetr.find('#name').text(val.name);
                clonetr.find('#email').text(val.email);
                clonetr.find('#phone').text(val.phone);
                clonetr.find('#address').text(val.address);
                clonetr.find('#dob').text(val.dob);

                clonetr.find('#edit').val(edit);
                // clonetr.find('#edit a').attr('href', '/edit/'+val.id);
                clonetr.find('#del a').attr('href', '/delete/'+val.id);

                clonetr.removeClass('template');

                objTBody.append(clonetr);
            });
        });
    },
    setEvent : function(){

        // $('body').on('click', '#infosearch', main.info);

        $('body').on('click','#btn_send_data', main.send);

        $('body').on('click','tbody .edit', main.getVal);


        $(function() {
            $('.modal').on('hidden.bs.modal', function(e) {
                 $(this).find("input,textarea").val('');
            });
        });

        $('body').on('click','#del', function(){
            $(this).remove();
        });


    },

    init : function(){
        main.onLoad();
        main.setEvent();
    }
};
