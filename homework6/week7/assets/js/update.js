var update = {

	doUpdate: function(){
		config.req.post("update",
										getParam('#myModal'),
	 									update.updateSuccessCallback);
	},

	updateSuccessCallback:function(data){
		$('#myModal').modal('hide');
		user.findUserAll();
	},

	setEvent: function(){
		$('#doUpdate').click(update.doUpdate);
	},

	init: function(){
		update.setEvent();
	}

};
