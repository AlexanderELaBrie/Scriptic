'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
 
sass.compiler = require('node-sass');
 
gulp.task('sass', function () {
	  return gulp.src('sass/style.scss')
	  	.pipe(sourcemaps.init())
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer())
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('.'));
});

gulp.task('sass-admin', function () {
	return gulp.src('sass/style-editor.scss')
		.pipe(sourcemaps.init())
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer())
		.pipe(sourcemaps.write('.'))
	  	.pipe(gulp.dest('.'));
});
 
gulp.task('default', function () {
	gulp.watch('sass/**/*.scss', gulp.series('sass'));
	gulp.watch('sass/**/*.scss', gulp.series('sass-admin'));
});