var main = {

    //사용자 정보가 수정되었을때 입력값을 받아서 서버로 넘겨줌
    update: function() {

        var url = "http://localhost:8004/update/user";
        var idx = $('input[name="id"]').val();
        var name = $('input[name="name"]').val();
        var email = $('input[name="email"]').val();
        var phone = $('input[name="phone"]').val();
        var address = $('input[name="address"]').val();
        var dob = $('input[name="dob"]').val();

        var param = {
            id: idx,
            name: name,
            email: email,
            phone: phone,
            address: address,
            dob: dob
        };

        //완료가 되면 모달창을 닫고 변경된 아이디를 가진 이름, 이메일등을 찾아서 텍스트를 변경
        $.post(url, param).done(function(data) {

            $('#myModal1').modal('hide');

            $('tr#' + data.id).find('#name').text(data.name);
            $('tr#' + data.id).find('#email').text(data.email);
            $('tr#' + data.id).find('#phone').text(data.phone);
            $('tr#' + data.id).find('#address').text(data.address);
            $('tr#' + data.id).find('#dob').text(data.dob);

        });
    },

    getVal: function() {
        //Edit버튼을 누르면 현재 row 정보를 모달창으로 전달해야함
        var tr = $(this).closest('tr');

        $('input[name="id"]').val(tr.attr('id'));
        $('input[name="name"]').val(tr.find('#name').text());
        $('input[name="email"]').val(tr.find('#email').text());
        $('input[name="phone"]').val(tr.find('#phone').text());
        $('input[name="address"]').val(tr.find('#address').text());
        $('input[name="dob"]').val(tr.find('#dob').text());


        $('body').on('click', '#btn_update_data', main.update);
    },

    send: function() {
        //주소록 정보가 추가되었을때 DB로 정보를 넘겨서 입력
        var url = "http://localhost:8004/post/user";


        var name = $('#insertName').val();
        var email = $('#insertEmail').val();
        var phone = $('#insertPhone').val();
        var address = $('#insertAddress').val();
        var dob = $('#insertdob').val();


        var param = {
            name: name,
            email: email,
            phone: phone,
            address: address,
            dob: dob
        };
        //완료가 되면 모달창을 닫고 새로 추가한 데이터를 테이블에 추가
        $.post(url, param).done(function(data) {

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

            clonetr.find('#del a').attr('href', '/delete/' + data.id);


            clonetr.removeClass('template');

            objTBody.append(clonetr);

        });
    },
    //화면이 로드되었을때 DB에 저장된 사용자 전부를 가져와 보여줌
    onLoad: function() {

        var url = "http://localhost:8004/get/user";
        $.get(url, {}).done(function(data) {

            var objTBody = $('table tbody');

            $.each(data, function(idx, val) {
                var clonetr = $('.template').clone();

                clonetr.attr('id', val.id);

                clonetr.find('#name').text(val.name);
                clonetr.find('#email').text(val.email);
                clonetr.find('#phone').text(val.phone);
                clonetr.find('#address').text(val.address);
                clonetr.find('#dob').text(val.dob);

                clonetr.find('#edit').val(edit);
                // clonetr.find('#edit a').attr('href', '/edit/'+val.id);
                clonetr.find('#del a').attr('href', '/delete/' + val.id);

                clonetr.removeClass('template');

                objTBody.append(clonetr);
            });
        });
    },
    setEvent: function() {

        $('body').on('click', '#btn_send_data', main.send);

        $('body').on('click', 'tbody .edit', main.getVal);

        //모달창이 새로 띄워졌을때 안에 있는 내용을 전부 지워줌
        $(function() {
            $('.modal').on('hidden.bs.modal', function(e) {
                $(this).find("input,textarea").val('');
            });
        });
        //삭제 버튼을 누르면 현재 row를 삭제
        $('body').on('click', '#del', function() {
            $(this).remove();
        });


    },

    init: function() {
        main.onLoad();
        main.setEvent();
    }
};
