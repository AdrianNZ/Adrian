var index = {
    Url: "http://localhost:8004/",
    //DB쪽에 현재 입력한 이메일과 패스워드를 체크
    check: function() {
        var url = "http://localhost:8004/post/logincheck";

        var email = $('input[name="email"]').val();
        var password = $('input[name="password"]').val();

        var param = {
            email: email,
            password: password
        };
        //완료가 되면 주소록 main으로 redirect 시킴
        $.post(url, param).done(function(data) {

            window.location =
                index.Url + "main";

        });
    },

    onLoad: function() {
        var url = "http://localhost:8004/index";
    },
    //로그인 버튼을 클릭하면 DB의 데이터와 비교
    setEvent: function() {
        $('body').on('click', '#btn_send_data', index.check);
    },

    init: function() {
        index.onLoad();
        index.setEvent();
    }
};
