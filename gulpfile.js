const gulp = require('gulp');
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');
const stylus = require('gulp-stylus');
const sourcemaps = require('gulp-sourcemaps');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify-es').default;
const browserSync = require('browser-sync').create();
const del = require('del');

gulp.task('delete-min-css', () => {
    return del('./public/css/styles.min.css');
})

gulp.task('stylus', () => {
    return gulp.src('./src/stylus/main.styl')
               .pipe(stylus())
               .pipe(rename('styles.css'))
               .pipe(gulp.dest('./public/css'))
               .pipe(browserSync.stream())
});

gulp.task('stylus-minify', () => {
    return gulp.src('./src/stylus/main.styl')
               .pipe(stylus())
               .pipe(rename('styles.css'))
               .pipe(gulp.dest('./public/css'))
               .pipe(cleanCSS({compatibility: 'ie8'}))
               .pipe(rename({suffix: '.min'}))
               .pipe(gulp.dest('./public/css'));
});

gulp.task('sourcemap', () => {
    return gulp.src('./src/stylus/main.styl')
               .pipe(sourcemaps.init())
               .pipe(stylus())
               .pipe(rename('styles.css'))
               .pipe(browserSync.stream())
               .pipe(cleanCSS({compatibility: 'ie8'}))
               .pipe(rename({suffix: '.min'}))
               .pipe(sourcemaps.write('.'))
               .pipe(gulp.dest('./public/css'));
});

gulp.task('styles', gulp.series('delete-min-css', 'stylus', 'sourcemap', 'stylus-minify'));

gulp.task('watch-css', () => {
    return gulp.watch('./src/stylus/*.styl', (gulp.task('styles')));
});



gulp.task('minify-js', () => {
    return gulp.src('./src/js/*.js')
               .pipe(concat('app.js'))
               .pipe(uglify())
               .pipe(rename({suffix: '.min'}))
               .pipe(gulp.dest('./public/js/'))
               .pipe(browserSync.stream());
});

gulp.task('watch-js', () => {
    return gulp.watch('./js/*.js', gulp.task('minify-js'));
});

gulp.task('watch', () => {
    return gulp.watch(['./src/stylus/*', './js/*.js'], gulp.series('styles', 'minify-js'));
});


gulp.task('watch-refresh', () => {
    browserSync.init({
        files: ['public/**/*.*'],
        watchOptions: {
            usePolling: true
        },
        proxy: 'http://192.168.33.10'
    });    
    gulp.watch('./src/stylus/*.styl', gulp.task('styles'))
    gulp.watch('./src/js/*.js', gulp.task('minify-js'))
});

gulp.task('default', gulp.task('watch-refresh'));