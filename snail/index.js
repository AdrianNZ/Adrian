var snail = function () {

  var building = 100;

  var height = 0;

  var count = 0;

    for (height; height <= building;) {

        if (height < 50) {

            height = height + 5 - 1 ;

        } else if (height >= 50){

            height = height + 5 - 2 ;
        }

        count++;
    }
    return count;
};

var snail2 = function(){

  var floor = 0;
  
  var count2 = 0;

  while(floor<=100){
    if(floor<50){
      floor = floor + 5 - 1;
    } else if (floor>=50){
      floor = floor + 5 - 2;
    }
    count2++;
  }
  return count2;
};
