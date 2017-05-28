var argv = require('yargs').argv; //arguments
var gulp = require('gulp');
var gulpif = require('gulp-if');
var concat = require('gulp-concat');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var minify = require('gulp-minify');
var uglify = require('gulp-uglify');
var autoprefixer = require('gulp-autoprefixer');
var cssnano = require('gulp-cssnano');

var paths = {
    sassWatch: ['public/scss/**/*.scss'],
    src: {
        js: ['public/js/*'],
        sass: ['public/scss/app.scss']
    },
    dist: {
        js: 'public/dist/js/',
        sass: 'public/dist/css/'
    },
    libs: [
        'node_modules/jquery/dist/jquery.min.js'
    ]
};

// SITE TASKS
gulp.task('sassSite', function () {
    gulp.src(paths.src.sass).pipe(sass({
        errLogToConsole: true,
        outputStyle: 'compressed'
    }))
        .pipe(autoprefixer({
            browsers: ['> 0.1%']
        }))
        .pipe(cssnano())
        .pipe(rename({extname: '.min.css'}))
        .pipe(gulp.dest(paths.dist.sass))
});


gulp.task('jsSite', function (done) {
    gulp.src(paths.src.js)
        .pipe(concat('app.js'))
        .pipe(gulpif(argv.production, uglify()))
        .pipe(gulpif(argv.production, minify()))
        .pipe(gulp.dest(paths.dist.js))
        .on('end', done);
});

gulp.task('watchSite', function () {
    gulp.watch(paths.src.js, ['jsSite']);
    gulp.watch(paths.sassWatch, ['sassSite']);
});

gulp.task('minifyLibrariesSite', function (done) {
    gulp.src(paths.libs)
        .pipe(concat('libs.js'))
        .pipe(gulpif(!argv.production, uglify()))
        .pipe(gulpif(!argv.production, minify()))
        .pipe(gulp.dest(paths.dist.js))
        .on('end', done);
});

gulp.task('distSite', ['jsSite', 'sassSite', 'minifyLibrariesSite']);

gulp.task('default', ['distSite', 'watchSite']);