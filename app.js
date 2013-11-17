var express = require('express'),
	join = require('path').join
	staticPath = join(__dirname, 'public'),
    faviconPath = join(__dirname, 'public/favicon.ico'),
	app = express();

app.use(express.static(staticPath));
app.use(express.favicon(faviconPath));

/*app.get('/:uri', function(req, res) {
    var uri = req.params.uri,
        status = res.status;
    if (uri === '/') {
        uri = 'index.html';
    }
    res.send(join(staticPath, uri));
});*/

app.listen(8000);
console.log('Listening on port 8000');