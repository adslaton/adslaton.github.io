var express = require('express'),
	join = require('path').join
	staticPath = join(__dirname, 'public'),
    faviconPath = join(__dirname, 'public/favicon.ico'),
	app = express();

app.use(express.static(staticPath));
app.use(express.favicon(faviconPath));

app.get('/', function(req, res){
  res.send(join(staticPath, 'index.html'));
});

app.listen(8000);