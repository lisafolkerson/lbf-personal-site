var gulp = require ( 'gulp' );
var sass = require ( 'gulp-sass' );
var notify = require ( 'gulp-notify' );

gulp.task( 'styles', function() {
	gulp.src( 'wp-content/themes/theme-hackeryou/stylesheets/style.scss' )
	.pipe( sass({errLogToConsole : true}))
	.pipe( gulp.dest('wp-content/themes/theme-hackeryou/' ))
	.pipe( notify ( 'CSS Compiled' ));
	});

gulp.task( 'watch', function() {
	gulp.watch('wp-content/themes/theme-hackeryou/stylesheets/*.scss',['styles'])
	});