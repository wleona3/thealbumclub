var 	gulp = require('gulp'),
	cssnano = require('gulp-cssnano'),
	watch = require('gulp-watch'),
	batch = require('gulp-batch');

gulp.task('default', ['minify-css']);

gulp.task('minify-css', function() {
	return gulp.src('assets/css/*.css')
		.pipe(cssnano())
		.pipe(gulp.dest('htdocs/assets/'));
});

gulp.task('watch', function() {
	watch('assets/css/*.css', batch(function(events, done) {
		gulp.start('minify-css', done);
	}));
});

