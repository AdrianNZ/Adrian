var login = {

	doLogin:function(){
			config.req.post("signin",
											getParam('#form_login'),
											login.successCallback,
											login.failCallback);
	},

	successCallback:function(data){

		var strData = JSON.stringify(data);
		var baseObject = btoa(strData);
		window.location = config.baseUrl+"/main.html#"+baseObject;

	},

	failCallback:function(data){
		$('.custom_form').css('display', 'none');
		$('#failed_form').css('display', 'block');
	},

	doSignup: function(){
		config.req.post("signup",
										getParam('#form_signup'),
	 									login.signupSuccessCallback);
	},

	signupSuccessCallback:function(data){
		clearForm($('#form_signup'));
		$('.alert-success').fadeIn("slow", function(){
			setTimeout(function(){$('.alert-success').fadeOut();}, 2000);
		});
	},

	setEvent: function(){
		$('#doLogin').click(login.doLogin);
		$('#doSignup').click(login.doSignup);
	},

	init: function(){
		login.setEvent();
	}

};
