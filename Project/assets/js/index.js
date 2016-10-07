var index = {
    Url: "http://localhost:8004/",

    check : function(){
        var url = "http://localhost:8004/post/logincheck";

        var email = $('input[name="email"]').val();
        var password = $('input[name="password"]').val();

        var param = {email:email, password:password};

        $.post(url, param).done(function(data){

            window.location=
            index.Url+"main";

        });
    },

    onLoad : function(){
        var url = "http://localhost:8004/index";
    },
    setEvent : function(){
        $('body').on('click','#btn_send_data', index.check);
    },

    init : function(){
        index.onLoad();
        index.setEvent();
    }
};
