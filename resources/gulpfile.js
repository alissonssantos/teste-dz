'use strict';

var gulp = require('gulp'),
    jshint = require('gulp-jshint'),
    sass = require('gulp-sass'),
    svgSprite = require('gulp-svg-symbols'),
    uglify = require('gulp-uglify');

var sassOptions = {
    errLogToConsole: true,
    outputStyle: 'compressed'
};


// CSS
gulp.task('css-base', function () {
    return gulp.src('./scss/base.scss')
        .pipe(sass.sync(sassOptions).on('error', sass.logError))
        .pipe(gulp.dest('./css'));
});

// JS APP
gulp.task('js-app', function () {
    return gulp.src('./js/app.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'))
        .pipe(uglify())
        .on('error', function (err) { console.log(err.message); })
        .pipe(gulp.dest('./js/min'));
});

// SVG SPRITE
gulp.task('svg-sprite', function () {
    return gulp.src('./img/svg/*.svg')
        .pipe(svgSprite(svgSpriteOptions))
        .on('error', function (err) { console.log(err.message); })
        .pipe(gulp.dest('./img'));
});

// WATCH
gulp.task('watch', function () {
    //gulp.watch('./img/svg/*.svg', ['svg-sprite']);
    gulp.watch('./scss/**/*.scss', ['css-base']);
    gulp.watch('./js/app.js', ['js-app']);
});

gulp.task('default', ['watch']);
