// var gwang = [1,3,8,11,12];
// var ggut = [2,4,5,6,7,8,9,10,12];
// var ttea = [1,2,3,4,5,6,7,9,10,12];
// var ppea = [];

function go() {
  var total = 0;

  var userGwang = parseInt(checkVal('#gwang'));
  var userGgut = parseInt(checkVal('#ggut'));
  var userTtea = parseInt(checkVal('#ttea'));
  var userPpea = parseInt(checkVal('#ppea'));
  var userGo = parseInt(checkVal('#go'));

  // 9짜 카드 ( 열끗 or 쌍피)

  var nineCard = document.querySelector('input[name=nineValue]:checked');

  if (nineCard !== null) {
    if (nineCard.value == 'ggut') {
      userGgut += 1
    } else if (nineCard.value == 'ppea') {
      userPpea += 2
    }
  }

  // 광

  var beeGwang;

  var checkBeeGwang = isChecked('#bee');

  if (checkBeeGwang) {
    beeGwang = true;
  } else {
    beeGwang = false;
  }

  if (userGwang == 3 && beeGwang == true) {
    total += 2;
  } else if (userGwang == 3 && beeGwang == false) {
    total += 3;
  } else if (userGwang == 4) {
    total += 4;
  } else if (userGwang == 5) {
    total += 15;
  } else if (userGwang >= 6) {
    alert('광은 5장이상이 될수없습니다.');
  }

  // 열끗

  var godori = isChecked('#godori');

  if (godori && userGgut >= 3) {
    total += 5;
  } else if (godori && userGgut < 3) {
    alert('고도리 아니잖아!!');
  }

  if (userGgut >= 5 && userGgut <= 9) {
    total += (userGgut - 4);
  } else if (userGgut >= 10) {
    alert('끗은 9장이상이 될수없습니다.');
  }

  // 띠

  var cho = isChecked('#cho');
  var hong = isChecked('#hong');
  var chung = isChecked('#chung');

  if(userTtea < 9){
    if( cho == true && hong == true && chung == true){
      alert('초단, 홍단, 청단은 9장이 되어야 가능합니다');
      return total = 0;
    }
  }

  if(userTtea < 6){
    if(cho == true && hong == true){
      alert('초단, 홍단은 6장이 되어야 가능합니다');
      return total = 0;
    } else if (hong == true && chung == true){
        alert('홍단, 청단은 6장이 되어야 가능합니다');
        return total = 0;
    } else if (chung == true && cho == true){
      alert('청단, 초단은 6장이 되어야 가능합니다');
      return total = 0;
    }
  }

  if (userTtea >= 3) {
    if (cho) {
      total += 3;
    }
    if (hong) {
      total += 3;
    }
    if (chung) {
      total += 3;
    }
  } else if (userTtea < 3) {
    if (cho || hong || chung) {
      alert('띠를 3개이상 먹어야 띠점수가 날수 있습니다');
    }
  }


  if (userTtea >= 5 && userTtea <= 10) {
    total += (userTtea - 4);
  } else if (userTtea >= 11) {
    alert('띠는 10장이상이 될수없습니다.');
  }

  // 피

  // var ninePpea = isChecked('#doublePpea1');
  var elevenPpea = isChecked('#doublePpea1');
  var twelvePpea = isChecked('#doublePpea2');

  if (elevenPpea) {
    userPpea += 2;
  }

  if (twelvePpea) {
    userPpea += 2;
  }
  
  if (userPpea >= 5 && userPpea <= 28) {
    total += (userPpea - 4);
  } else if (userPpea >= 29) {
    alert('일반피는 25장이상이 될수없습니다.');
  }

  // 고

  if (userGo == 1) {
    total += 1;
  } else if (userGo == 2) {
    total += 2;
  } else if (userGo == 3) {
    total = (total + 3) * 2;
  } else if (userGo == 4) {
    total = (total + 4) * 4;
  } else if (userGo == 5) {
    total = (total + 5) * 8;
  } else if (userGo == 6) {
    total = (total + 6) * 16;
  } else if (userGo == 7) {
    total = (total + 7) * 32;
  } else if (userGo > 7) {
    alert('날 쏘고 가라!');
    total = (total + 8) * 64;
  }

  // 박

  var lackOfGwang = isChecked('#lackofGwang');
  var lackOfGgut = isChecked('#lackofGgut');
  var lackOfPpea = isChecked('#lackofPpea');

  if (lackOfGwang && userGwang >= 3) {
    total *= 2;
  } else if (lackOfGwang && userGwang < 3) {
    alert('광으로 점수가 나지 않았습니다');
  }

  if (lackOfGgut && userGgut >= 5) {
    total *= 2;
  } else if (lackOfGgut && userGgut < 5) {
    alert('열끗으로 점수가 나지 않았습니다');
  }

  if (lackOfPpea && userPpea >= 5) {
    total *= 2;
  } else if (lackOfPpea && userPpea < 5) {
    alert('피로 점수가 나지 않았습니다');
  }

  console.log('총 점수는 : ' + total);
}

function isChecked(a) {
  return document.querySelector(a).checked;
}

function checkVal(b) {
  return document.querySelector(b).value;
}
