
var user = {

  auth:{},

  onLoadEvent:function(){
    //1. hash
    var hashData = window.location.hash;
    //2. hash protocol (해쉬태그 떼기)
    var strBase64 = hashData.substr(1);
    //3. hash to decode
    var decodedData = atob(strBase64);
    //4. convert string to object
    var objData = $.parseJSON(decodedData);

    user.auth.name = objData.name;
    user.auth.email = objData.email;
    user.auth.password = objData.password;

    $('.loggedin').text(objData.name);
    user.findUserAll();
  },

  findUserAll:function(){

    config.req.get("search",
                    {},
                    user.successCallBack,
                    user.failCallBack);
  },

  finduserByEmail:function(){

    config.req.post("search",
                    {email:$('.keyword').val()},
                    user.successCallBack,
                    user.failCallBack);
  },

  successCallBack:function(res){
    //1.node table
    var tbody = $('.table tbody');
    tbody.children().not('.tr-temp').remove();

    //2. each 1st param -> real decodedData
    //         2nd param - >param function 데이터 가공할 함수
    $.each(res.result, function(index,value){ // index, value 가 오는건 inbuilt 함수
      var objTr = $('.tr-temp').clone();


      // tr에 id를 value에 추가

        objTr.find('#id').text(value._id);// 서버에서 던질때 언더바가 들어가있음
        objTr.find('#name').text(value.name);
        objTr.find('#email').text(value.email);
        objTr.find('#password').text(value.password);

        objTr.removeClass('tr-temp');

        tbody.append(objTr);
    });
  },


  setEvent:function(){
    $('#btn_srch').click(user.finduserByEmail);

    $('#myModal').on('show.bs.modal', function (e) {
      $('.modal-body').find("#mname").val(user.auth.name);
      $('.modal-body').find("#memail").val(user.auth.email);
      $('.modal-body').find("#mpassword").val(user.auth.password);

    });
    
  },
  init:function(){
    user.onLoadEvent(); // when page onload, triggered
    user.setEvent(); // set up event to elements
  }
};
