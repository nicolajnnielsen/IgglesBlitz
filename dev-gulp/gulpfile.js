const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');

// Compile Sass 
function style() {
	// find scss
	return gulp.src('../sass/style.scss')
	.pipe(sourcemaps.init({loadMaps: true}))
	// Pass through compiler 
	.pipe(sass().on('error', sass.logError))
	.pipe(autoprefixer('last 2 versions'))
	.pipe(sourcemaps.write('../'))
	// location of css 
	.pipe(gulp.dest('../'))
	.pipe(browserSync.stream());
}

function watch() {
	browserSync.init({
		proxy: 'http://localhost:8000'
	});
	gulp.watch('../sass/**/*.scss', style);
	gulp.watch('../**/*.php').on('change', browserSync.reload);
}

exports.style = style;
exports.watch = watch;