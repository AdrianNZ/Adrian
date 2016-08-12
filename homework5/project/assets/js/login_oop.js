var login = {

	doLogin:function(){
		var email = $('#exampleInputEmail1').val();
		var password  = $('#exampleInputPassword1').val();


		$.post(config.url+"signin", { email: email, password: password})
		.done(function(data){
			$('.custom_form').css('display', 'none');
			$('.login_info p.email').text(data.email);
			$('.login_info p.password').text(data.password);

			$('#confirmed_form').css('display', 'block');
			$('#login_input_form').css('display', 'none');

		}).fail(function(data){
			$('.custom_form').css('display', 'none');
			$('#failed_form').css('display', 'block');
		});
	},

	setEvent: function(){
		$('#doLogin').click(login.doLogin);
	},
	init: function(){
		login.setEvent();
	}

};
