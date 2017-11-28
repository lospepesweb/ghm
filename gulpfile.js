var gulp = require('gulp');
var minifycss = require('gulp-minify-css');


gulp.task('minify', function(){
	return gulp.src('css/estilos.css')
		.pipe(minifycss())
		.pipe(gulp.dest('css'));
});

gulp.task('watch', function(){
	gulp.watch('css/estilos.css', ['minify']);
});


gulp.task('default',['watch']);