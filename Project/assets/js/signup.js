var signup = {
    Url: "http://localhost:8004/",
    //signup버튼을 누르면 DB에 사용자 정보를 입력
    go: function() {
        var url = "http://localhost:8004/post/join";


        var email = $('#signupEmail').val();
        var password = $('#signupPassword').val();


        var param = {
            email: email,
            password: password
        };

        $.post(url, param).done(function(data) {

            window.location =
                signup.Url;

        });

    },

    onLoad: function() {

    },
    setEvent: function() {
        $('body').on('click', '#doSignup', signup.go);
    },

    init: function() {
        signup.onLoad();
        signup.setEvent();
    }
};
