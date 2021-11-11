var app = require('http').createServer(handler);
var io = require('socket.io').listen(app);
var static = require('node-static'); // for serving files

//Create a new server
var fileServer = new static.Server('./');

//The port to listen to
app.listen(port);

/**
 * Serves files from the server when opened in a browser
 * @param {IncomingMessage} request The request from the client
 * @param {ServerResponse} response The response to the client
 */
function handler(request, response) {
	request.addListener('end', function () {
		//Return the correct file
		fileServer.serve(request, response);
	});
}
