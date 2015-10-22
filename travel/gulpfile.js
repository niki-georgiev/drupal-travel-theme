'use strict';
var gulp = require('gulp');
var sass = require('gulp-sass');

var sassOptions = {
        errLogToConsole: true,
        outputStyle: 'expanded'
    };

//config dirs
var input = './sass/*.scss';
var output = './css';

gulp.task('sass', function () {
    return gulp
        // Find all `.scss` files from the `sass/` folder
        .src(input)
        // Run Sass on those files
        .pipe(sass())
        // Print errors in console
        .pipe(sass(sassOptions).on('error', sass.logError))
        // Write the resulting CSS in the output folder
        .pipe(gulp.dest(output));
});


//Watch task
gulp.task('watch', function () {
    gulp.watch('sass/**/*.scss', ['sass']);
});

//Prod Task run just before deploy
gulp.task('prod', ['sassdoc'], function () {
    return gulp
        .src(input)
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(gulp.dest(output));
});