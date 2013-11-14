# Node application
This is an [Express][expressjs] web application.


## Prerequisites

- [Node][nodejs] v0.10.x
- [Redis][redis] v2.6.x
- [Bundler][bundler] v1.3.x
- [Grunt][gruntjs] v0.4.x
- [Compass][compass] v0.12.x


## Native Installation (OS X/Linux)


### Install Node
- Follow the instructions from the [Node][nodejs] site.


### Install Redis

```
$ cd ~/dev
$ curl -O http://redis.googlecode.com/files/redis-2.6.14.tar.gz
$ tar xvzf redis-2.6.14.tar.gz
$ cd redis-2.6.14
$ make
$ make test
$ sudo make install
```

### Install Bundler

```
$ sudo gem install bundler
```


### Install Grunt

```
$ sudo npm install -g grunt-cli
```


[expressjs]: http://expressjs.com/
[nodejs]: http://nodejs.org/
[redis]: http://redis.io/
[gruntjs]: http://gruntjs.com/
[bundler]: http://bundler.io/
[compass]: http://compass-style.org/install/
[sass]: http://sass-lang.com/
[jslint]: http://www.jslint.com/