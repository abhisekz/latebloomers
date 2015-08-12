var gulp = require('gulp'),
	sass = require('gulp-ruby-sass'),
	autoprefix = require('gulp-autoprefixer'),
	minifycss = require('gulp-minify-css'),
	rename = require('gulp-rename');

// Setup the server at port 4000
gulp.task('express', function() {
  var express = require('express');
  var app = express();
  app.use(express.static(__dirname));
  app.listen(4000, '0.0.0.0');
});

// Setting up the style section
gulp.task('style', function() {
    return sass('sass', { style : 'expanded' })
    	.pipe(gulp.dest('css'))
    	.pipe(rename({ suffix : '.min' }))
    	.pipe(minifycss())
    	.pipe(gulp.dest('css'))
});

gulp.task('default', ['express'], function() {

});