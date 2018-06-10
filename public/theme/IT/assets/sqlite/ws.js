//websocket variables
var WebSocketServer = require('websocket').server;
var http = require('http');
var clients = []
var server = http.createServer(function(request, response) {});
server.listen(1337, function() {});

//connect to websocket
wsServer = new WebSocketServer({
    httpServer: server
});


// const sqlite3 = require('sqlite3').verbose();
// let db = new sqlite3.Database('/var/www/bolt/app/database/bolt.db', sqlite3.OPEN_READWRITE, (err) => {
//   if (err) {
//     console.error(err.message);
//   }
//   console.log('Connected to the bolt database.');
// });

// //mongo variables
// var MongoClient = require('mongodb').MongoClient;
// var url = "mongodb://localhost:27017/";
// var dbo;

// //connect to mongo
// MongoClient.connect(url, function(err, db) {
//     if (err) throw err;
//     dbo = db.db("myTestBase");
// });

//request from client incoming
wsServer.on('request', function(request) {
    //add client
    var connection = request.accept(null, request.origin);
    clients.push(connection);

    //event -> get message
    connection.on('message', function(rowMessage) {
	console.log("message");
        if (rowMessage.type === 'utf8') {
		console.log(rowMessage);
            var message = JSON.stringify(rowMessage.utf8Data);

            if (message.substring(1, 5) == 'sys ') {
                //incoming message is system message
                if (message.substring(1, 14) == 'sys username:') {
                    //become username, send courses from user
                    var mail = message.substring(14, message.length - 1);
                    sendCourses(mail, connection);
                } else if (message.substring(1, 17) == 'sys selectedTut:') {
                    //become selected tutorial, send old chat
                    var courseID = message.substring(17, message.length - 1);
                    sendOldChat(courseID, connection);
                }
            } else {
                //incoming message is user message
                for (var i = 0; i < clients.length; i++) {
                    var jsonMessage = JSON.parse(rowMessage.utf8Data);
                  //   addToSqlite(jsonMessage.message, jsonMessage.name);
                    clients[i].send(message);
                }
            }
        }
    });

    connection.on('close', function(connection) {
        //close
    });
});

// function sendOldChat(courseID, connection) {
//     var retChat = [];

//     dbo.collection("studCorp").findOne({ 'id': 'allCourses' }, function(err, resultCourses) {
//         if (err) throw err;
//         allCourses = resultCourses.courses;

//         allCourses.forEach(course => {
//             if (course.id == courseID) {
//                 if (course.chat) {
//                     course.chat.forEach(chat => {
//                         retChat.push(chat);
//                     });
//                 }
//                 connection.send("sys oldChat:" + JSON.stringify(retChat));
//             }
//         });
//     });
// }

// function sendCourses(mail, connection) {
//     var retCourses = [];

//     dbo.collection("studCorp").findOne({ 'id': 'allCourses' }, function(err, resultCourses) {
//         if (err) throw err;
//         allCourses = resultCourses.courses;

//         dbo.collection("studCorp").findOne({ 'id': 'allUsers' }, function(err, resultUser) {
//             if (err) throw err;
//             var users = resultUser.users;
//             var user = {};

//             for (var i = 0; i < users.length; i++) {
//                 if (users[i].mail == mail) {
//                     user = users[i];
//                 }
//             }

//             for (var j = 0; j < allCourses.length; j++) {
//                 var added = false;
//                 for (var x = 0; x < user.ownCourses.length && !added; x++) {
//                     if (String(allCourses[j].id) == String(user.ownCourses[x])) {
//                         retCourses.push(allCourses[j].name + "_" + allCourses[j].id);
//                         added = true;
//                     }
//                 }
//                 for (var y = 0; y < user.courses.length && !added; y++) {
//                     if (String(allCourses[j].id) == String(user.courses[y])) {
//                         retCourses.push(allCourses[j].name + "_" + user.courses[y]);
//                         added = true;
//                     }
//                 }
//             }

//             connection.send("sys coureses:" + JSON.stringify(retCourses));
//         });
//     });
// }

// function addToSqlite(message, name) {
//   var stmt = db.prepare(`INSERT INTO chat VALUES (?,?)`);
//   stmt.run(message, name);
//   stmt.finalize();
  
// }



// Von Mongo

// function addToMongo(message, name, tutorium) {
//     dbo.collection("studCorp").findOne({ 'id': 'allCourses' }, function(err, courses) {
//         var allCourses = courses;
//         for (let i = 0; i < allCourses.courses.length; i++) {
//             if (allCourses.courses[i].id == tutorium) {
//                 if (allCourses.courses[i].chat) {
//                     allCourses.courses[i].chat.push({ 'nickname': name, 'message': message });
//                 } else {
//                     allCourses.courses[i].chat = [];
//                     allCourses.courses[i].chat.push({ 'nickname': name, 'message': message });
//                 }
//             }
//         }

//         dbo.collection("studCorp").updateOne({ 'id': 'allCourses' }, { $set: allCourses }, function(err, res) {
//             if (err) throw err;
//         });
//     });
// }
