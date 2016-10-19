# CakePHP Application Skeleton whith Twig and Webpack

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![License](https://img.shields.io/packagist/l/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](http://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

### CakePHP

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist ozee31/cakephp-starter [app_name]`.

If Composer is installed globally, run
```bash
composer create-project --prefer-dist ozee31/cakephp-starter [app_name]
```

You should now be able to visit the path to where you installed the app and see the default home page.

### Front

Run `npm install`

## Configuration

Read and edit `config/app.php` and setup the 'Datasources' and any other
configuration relevant for your application.

## Front

### Architecture

- /front/build/* : webpack configuration
- /front/src/* : all front sources (es2015 + scss...)

### Debug mode

Run webpack web server with the command `npm run dev`

### Deployment

Run `npm run build` and change debug mode in app.php

### Subdirectory configuration

For exemple if url access is `/subdir/` instead of `/`

change in config/app.php :
```
'Webpack' => [
  'assets' => [
    'dev' => 'http://localhost:3003/subdir/app.js',
    'config' => 'assets.json',
  ],
],
```

and in front/build/config.js
```
assets_url: '/subdir/'
```
