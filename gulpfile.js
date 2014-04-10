var gulp = require('gulp');
var bower = require('gulp-bower');
var sass = require('gulp-sass');
var concat = require('gulp-concat');

gulp.task('download', function() {
    bower()
        .pipe(gulp.dest('app/Resources/lib/'))
});

gulp.task('default', function() {
    gulp.src('app/Resources/style.scss')
        .pipe(sass())
        .pipe(gulp.dest('web/css'));

    gulp.src([
            'app/Resources/lib/jquery/jquery.js',
            'app/Resources/lib/angular/angular.js',
            'app/Resources/js/app.js',
            'app/Resources/js/controllers.js',
        ])
        .pipe(concat('all.js'))
        .pipe(gulp.dest('web/js'));

    gulp.src('app/Resources/lib/bootstrap-sass-official/vendor/assets/fonts/bootstrap/*')
        .pipe(gulp.dest('web/fonts'));
});