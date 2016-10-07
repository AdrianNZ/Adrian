var config = {

  baseUrl : window.location.origin+"/tutor/9/week7",

  url : "http://128.199.188.157:7000/api/",

  req : {
    post:function(uri,param,success,fail){
        $.post(config.url + uri, param)
        .done(success === undefined ? config.req.success : success)
        .fail(fail === undefined ? config.req.fail : fail);
        //사망 연산자 , if와 비슷
        /* if(success == undefined){
        config.success
        } else {
        success
        }
      */
    },

    get:function(uri,param,success,fail){
      $.get(config.url + uri, param)
      .done(success === undefined ? config.req.success : success)
      .fail(fail === undefined ? config.req.fail : fail);
    },

    success : function(res){
      console.log(res);
    },

    fail : function(res){
      console.log(res);
    }
  }
};

//$(config.init);
