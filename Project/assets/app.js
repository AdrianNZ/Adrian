// 1. Load module from node JS
//==============================================
var mysql = require('mysql');
var express = require('express');
var sessions = require('express-session');
var bodyParser = require('body-Parser');
var fs = require('fs');
var ejs = require('ejs');
var path = require('path');
var http = require('http');
var cookieParser = require('cookie-parser');
var generic_pool = require('generic-pool');

// 2. Connect DB
//==============================================

var db = mysql.createConnection({
  user:'root',
  password:'123456',
  port:3306
});

db.query('USE tasman_project');

// 3. Create server
//==============================================

var session;
var app = express();

// 4. Connect module to server
//==============================================

// cross-access hack.
app.use(function(req, res, next){
  res.setHeader('Access-Control-Allow-Origin', '*');
  res.setHeader('Access-Control-Allow-Methods', 'GET, POST');
  res.setHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-type, Authorization');
  next();
});

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended:true}));

app.use(express.static(path.join(__dirname)));
app.use(cookieParser());
app.use(sessions({secret:'qbweo@ras$%&@$nfwtgf', resave:false, saveUninitialized:true}));


// * 서버가동 *

app.listen(8004, function(){
  console.log("Server is running localhost:8004....");
});



// 5. Router setting
//==============================================



// 로그인처리

// 화면에 들어가면 index파일을 읽어들임
app.get('/index', function(request, response){
  session = request.session;
  if(session.uniqueId){
    response.redirect('/');
}
  fs.readFile('view/index.html', 'utf-8', function(err, data){
      response.status(200).send(ejs.render(data, {data:data}));
  });
});


// 로그인에 성공하면 main주소를 받아서 main.html로 접근
app.get('/main', function(request, response){
  session = request.session;
  if(session.uniqueId){
    fs.readFile('view/main.html', 'utf-8', function(err, data){
      response.status(200).send(ejs.render(data, {data:data}));
    });
  } else {
    response.redirect('/');
}
});

// 로그인 버튼을 누르면 실행
app.post('/post/logincheck', function(request, response){

session = request.session;
if(session.uniqueId){
  response.redirect('/');
}

var strSql = "SELECT id, email, password FROM logintb WHERE email = ? AND password = ?";

var data = {
  email: request.body.email,
  password: request.body.password
};


db.query(strSql, [data.email, data.password], function(error, rows){

if(error) return response.status(500).json({error:error});


    if(error){
      console.log(err);
      return response.status(200).send();

    } else if(!rows[0]){
      response.redirect('/index');

    } else{
      session.uniqueId = rows[0].id;
      response.redirect('/');
  }
});

});


// localhost:8004에 접속하면 세션이 있는지 확인하고 있으면 main페이지로 바로보내고 없으면 index로 보내는...

app.get('/', function(request, response){
  session = request.session;

  if(session.uniqueId){
    response.redirect('/main');
  } else{
    response.redirect('/index');
  }
});
//

// 로그아웃 처리

app.get('/logout', function(request, response, next){
  request.session.destroy(function(error){
    response.redirect('/');
  });
});

//


// main 페이지에 들어가면 db에 있는 사람 전부 불러오는
app.get('/get/user', function(request, response){

var strSql = "SELECT id, email, name, phone, address, dob, status FROM adbook WHERE status = 'active'";

db.query(strSql, null, function(error, data){


    if(error) return response.status(500).json({error:error});

    response.status(200).json(data);

});

});


// 주소록에서 정보를 입력하면 보내는

app.post('/post/user', function(request, response){
  var strSql = "INSERT INTO adbook (email, name, phone, address, dob, status) VALUES(?,?,?,?,?,'active')";

  db.query(strSql, [request.body.email, request.body.name, request.body.phone, request.body.address, request.body.dob], function(error, results){

    if(error) return response.status(500).json({error:error});

    var param = {
                email:request.body.email,
                name:request.body.name,
                phone:request.body.phone,
                address:request.body.address,
                dob:request.body.dob,
                id:results.insertId};

    response.status(200).json(param);

  });
});



// 주소록 정보를 수정하면 보내는

app.post('/update/user', function(request, response){
  var strSql = "UPDATE adbook SET email = ?, name = ?, phone = ?, address = ?, dob = ? WHERE id = ?";

  db.query(strSql, [request.body.email, request.body.name, request.body.phone, request.body.address, request.body.dob, request.body.id], function(error, results){

    if(error) return response.status(500).json({error:error});

    var param = {
                email:request.body.email,
                name:request.body.name,
                phone:request.body.phone,
                address:request.body.address,
                dob:request.body.dob,
                id:request.body.id};

    response.status(200).json(param);

  });
});

// 삭제시 실행

app.get('/delete/:id', function(request, response){
  var strSql = "UPDATE adbook SET status='inactive' WHERE id = ?";

  db.query(strSql, [request.params.id], function(error, results){

    if(error) return response.status(500).json({error:error});

    var param = {id:request.params.id};

    response.redirect('/');

  });
});

// // 사용자 정보 조회
// app.get('/get/info', function(request, response){
//
// session = request.session;
//
// var strSql = "SELECT id, email, password FROM logintb WHERE id = ?";
//
// db.query(strSql, [session.uniqueId], function(error, results){
//
//   if(error) return response.status(500).json({error:error});
//
//   response.status(200).json(data);
//
// });
//
// });
//
// // 사용자 정보 수정
//
// app.post('/info/update', function(request, response){
//   var strSql = "UPDATE logintb SET email = ?, password = ? WHERE id = ?";
//
//   db.query(strSql, [request.body.email, request.body.password, request.body.id], function(error, results){
//
//     if(error) return response.status(500).json({error:error});
//
//     var param = {
//                 email:request.body.email,
//                 password:request.body.password,
//                 id:request.body.id};
//
//     response.status(200).json(param);
//     response.redirect('/');
//   });
// });
