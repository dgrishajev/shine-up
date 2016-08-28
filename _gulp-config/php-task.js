var gulp       = require('gulp'),
    plumber    = require('gulp-plumber'),
    livereload = require('gulp-livereload'),
    notify     = require('gulp-notify'),
    path       = require('./path');


module.exports = function () {
  gulp.src(path.src.php)
    .pipe(plumber())
    .pipe(livereload())
    .pipe(notify({ message: 'PHP task complete', onLast: true }));
};