var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');

var jsImport = require('gulp-js-import');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');

var notify = require('gulp-notify');
var rename = require('gulp-rename');
var replace = require('gulp-replace');
var runSequence = require('run-sequence');

var gulps = require("gulp-series");



var styleSRC = 'source/scss/style.scss';
var styleURL = 'assets/css';
var mapURL = '';


//-------------------------------------                                  
// Styles for Development
//
gulp.task('styles-dev', function () {
    gulp.src([styleSRC])
        .pipe(sourcemaps.init())
        .pipe(sass({
            errLogToConsole: true,
            outputStyle: 'expanded'
        }))
        .on('error', console.error.bind(console))
        .pipe(autoprefixer(['> 0.000001%']))
        .pipe(sourcemaps.write(mapURL))
        .pipe(gulp.dest(styleURL))
        .pipe(notify({
            message: 'SCSS COMPILED',
            onLast: true
        }))
});


//-------------------------------------                                  
// Styles for Production          
//
gulp.task('styles-prod', function () {
    gulp.src([styleSRC])
        .pipe(sass({
            errLogToConsole: true,
            outputStyle: 'compressed'
        }))
        .on('error', console.error.bind(console))
        .pipe(autoprefixer(['> 0.000001%']))
        .pipe(rename({ suffix: '.min' }))
        .pipe(sourcemaps.write(mapURL))
        .pipe(gulp.dest(styleURL))
        .pipe(notify({
            message: 'SCSS COMPILED PROD',
            onLast: true
        }))
});

//-------------------------------------                                  
// Concatenate JS for Development
//
gulp.task('scripts-dev', function () {
    return gulp.src('source/js/main.js')
        .pipe(jsImport({ hideConsole: true }))
        .pipe(concat('app.js'))
        .pipe(gulp.dest('assets/js'))
});

//-------------------------------------                                  
// Concatenate & Minify JS for Production
//
gulp.task('scripts-prod', function () {
    return gulp.src('assets/js/app.js')
        .pipe(concat('app.js'))
        .pipe(rename('app.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('assets/js'))
});

//-------------------------------------                                  
// Watch
//
gulp.task('watch', function () {

    // Watch .scss files
    gulp.watch('source/scss/**/*.scss', ['styles-dev']);

    // Watch .js files
    gulp.watch('source/js/**/*.js', ['scripts-dev']);

});

gulp.task('build', ['watch', 'styles-prod', 'scripts-prod']);
