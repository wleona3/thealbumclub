var gulp = require('gulp'),
    cssnano = require('gulp-cssnano');

gulp.task('default', ['minify-css']);

gulp.task('minify-css', function() {
	return gulp.src('assets/css/*.css')
		.pipe(cssnano())
		.pipe(gulp.dest('htdocs/assets/'));
});


