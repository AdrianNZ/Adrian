
//단발성 메소드
function getParam(id){

  var values = {}; //data 담는 json object
  //넘겨준 ID로 부터 file type이 아닌 모든 input 받아오기
  var elements = $(id + " input:not([type='file'])").get();

  var len = elements.length;

//elements에서 값을 받아올수 있는 type만 처리

  for(var i = 0; i<len; i++){
    switch(elements[i].type){
      case "email":
      case "text":
      case "password":
          values[elements[i].name] = elements[i].value;
      break;
    }
  }

return values;
}
