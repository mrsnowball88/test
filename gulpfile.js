const { src, dest, series, parallel, watch} = require('gulp');
const gulp = require('gulp');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function(){
    return src('app/assets/sass/**/*.sass')
        .pipe(sourcemaps.init())       // активируем gulp-sourcemaps
        .pipe(sass({
            outputStyle: 'nested'      // вложенный (по умолчанию)
        }).on('error', sass.logError)) // уведомление об ошибках
        .pipe(sourcemaps.write('.'))   // создание карты css.map в текущей папке
        .pipe(dest('dist/css'));
});

