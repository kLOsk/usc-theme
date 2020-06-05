const { watch, src, dest, series, parallel } = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const postcss = require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');

function cssTask() {
  return src('./assets/scss/style.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({ outputStyle: 'expanded' })).on('error', sass.logError)
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(sourcemaps.write('.'))
    .pipe(dest('./assets/dist/css'))
}

function jsTask(){
    return src('./assets/js/scripts.js')
        //.pipe(concat('all.js'))
        .pipe(uglify())
        .pipe(dest('./assets/dist/js')
    );
}

function watchFiles() {
  watch(['./assets/scss/**/*.scss', './assets/js/*.js'], parallel(cssTask, jsTask));
};

exports.default = series( parallel(cssTask, jsTask), watchFiles);
