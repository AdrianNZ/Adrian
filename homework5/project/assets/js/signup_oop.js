var signup = {

	doSignup:function(){
		var email = $('#exampleInputEmail1').val();
		var name = $('#exampleInputName1').val();
		var password = $('#exampleInputPassword1').val();

		$.post(config.url+"signin", {email: email, name:name, password: password})
		.done(function(data){
			$('.custom_form').css('display', 'none');
			$('.signup_info p.name').text(data.name);
			$('.signup_info p.email').text(data.email);
			$('.signup_info p.password').text(data.password);

			$('#confirmed_form').css('display', 'block');
			$('#signup_input_form').css('display', 'none');

		}).fail(function(data){
			$('.custom_form').css('display', 'none');
			$('#failed_form').css('display', 'block');
		});
	},

	setEvent: function(){
		$('#doSignup').click(signup.doSignup);
	},
	init: function(){
		signup.setEvent();
	}

};
