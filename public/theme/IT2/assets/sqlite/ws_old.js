//npm install websocket --save

var WebSocketServer = require('websocket').server;
var http = require('http');
var clients = []
var server = http.createServer(function(request, response) {
    // process HTTP request. Since we're writing just WebSockets
    // server we don't have to implement anything.
});
server.listen(1337, function() {});

// create the server
wsServer = new WebSocketServer({
    httpServer: server
});

// WebSocket server
wsServer.on('request', function(request) {
    var connection = request.accept(null, request.origin);
    clients.push(connection)
        // This is the most important callback for us, we'll handle
        // all messages from users here.
    connection.on('message', function(message) {
        if (message.type === 'utf8') {
            // process WebSocket message
            console.log("Nachricht : " + JSON.stringify(message.utf8Data))
            for (var i = 0; i < clients.length; i++) {
                clients[i].send(JSON.stringify(message.utf8Data))
            }
        }
    });

    connection.on('close', function(connection) {
        // close user connection
    });
});