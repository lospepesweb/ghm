var gulp = require('gulp');
var minifycss = require('gulp-minify-css');


gulp.task('minify', function(){
	return gulp.src('dist/css/estilos.css')
		.pipe(minifycss())
		.pipe(gulp.dest('dist/css'));
});

gulp.task('watch', function(){
	gulp.watch('dist/css/estilos.css', ['minify']);
});


gulp.task('default',['watch']);