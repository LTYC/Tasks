var path = require('path');
var gulp = require('gulp');
var less = require('gulp-less');
var notify = require('gulp-notify');

var publicCSSDir = path.join(__dirname, '..', '..', 'public', 'css');

gulp.task('less', function() {
    return gulp.src(['less/main.less'])
        .pipe(less({}))
        .pipe(gulp.dest(publicCSSDir))
        .pipe(notify({"message": "LESS compiled!"}));
});

gulp.task('watch', function() {
    gulp.watch('less/**/*.less', ['less']);
});

gulp.task('default', ['watch']);