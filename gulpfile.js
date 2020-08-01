const { watch, src, dest, series, parallel } = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const postcss = require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const concat = require('gulp-concat');
const livereload = require('gulp-livereload');

function cssTask() {
  return src('./assets/scss/style.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({ outputStyle: 'expanded' })).on('error', sass.logError)
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(rename({ extname: '.min.css' })) //needs testing
    .pipe(sourcemaps.write('.'))
    .pipe(dest('./assets/dist/css/'))
    .pipe(livereload())
}

function jsTask(){
    return src('./assets/js/scripts.js')
        //.pipe(concat('all.js'))
        .pipe(uglify())
        .pipe(rename({ extname: '.min.js' })) //needs testing
        .pipe(dest('./assets/dist/js/')
    );
}

function watchFiles() {
  livereload.listen();
  watch(['./assets/scss/**/*.scss', './assets/js/*.js'], parallel(cssTask, jsTask));
};

exports.default = series( parallel(cssTask, jsTask), watchFiles);
