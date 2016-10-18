var user = {
    // 현재 로그인된 정보를 수정하는 기능
    updateuser: function() {

        var url = "http://localhost:8004/post/logged";
        // 아이디와 패스워드를 입력값에서 가져옴(id는 이미 지정되어서 hidden처리되어있음)
        var idx = $('#infoid').val();
        var pwd = $('#infopassword').val();

        var param = {
            id: idx,
            password: pwd
        };
        // 완료가 되면 모달창을 닫고 세션에서 정보를 받아와 사용자 정보를 다시 고쳐줌
        $.post(url, param).done(function(data) {
            $('#myModal2').modal('hide');
            var targetele = $('#myModal2');
            targetele.find('#infoid').val(data.uniqueId);
            targetele.find('#infoEmail').val(data.uniqueemail);
            targetele.find('#infopassword').val(data.uniquepwd);
        });
    },

    // 현재 로그인된 사용자를 화면에 표시해줌
    getloggedin: function() {

        var url = "http://localhost:8004/get/logged";
        // 세션데이터를 받아와 모달창 데이터를 변경
        $.get(url, {}).done(function(data) {

            var targetele = $('#myModal2');
            targetele.find('#infoid').val(data.uniqueId);
            targetele.find('#infoEmail').val(data.uniqueemail);
            targetele.find('#infopassword').val(data.uniquepwd);
        });
    },

    // 화면이 로드될때 세션에서 정보를 받아와 현재 로그인한 사용자를 화면에 보여줌
    onLoad: function() {

        var url = "http://localhost:8004/get/logged";

        $.get(url, {}).done(function(data) {

            var targetele = $('nav .loggedin');
            targetele.text(data.uniqueemail);

        });

    },


    setEvent: function() {
        //모달창에서 사용자 정보를 수정해서 서버에서 업데이트
        $('#myModal2').on('click', '#btn_update_userdata', user.updateuser);
        //사용자 정보를 클릭했을때 모달창이 팝업되면 세션에서 정보를 가져오는 이벤트
        $('nav').on('click', '#infosearch', user.getloggedin);
    },

    init: function() {
        user.onLoad();
        user.setEvent();
    }
};
