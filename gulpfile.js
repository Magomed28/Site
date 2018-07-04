var 	gulp          = require('gulp'),
		gutil         = require('gulp-util' ),
		sass          = require('gulp-sass'),
		browserSync   = require('browser-sync'),
		concat        = require('gulp-concat'),
		uglify        = require('gulp-uglify'),
		cleancss      = require('gulp-clean-css'),
		rename        = require('gulp-rename'),
		autoprefixer  = require('gulp-autoprefixer'),
		notify        = require("gulp-notify"),
		rsync         = require('gulp-rsync');

gulp.task('browser-sync', function() {
	browserSync({
		server: {
			baseDir: 'template'
		},
		notify: false,
		// open: false,
		// online: false, // Work Offline Without Internet Connection
		// tunnel: true, tunnel: "test-lamp.local", // Demonstration page: http://projectname.localtunnel.me
	});
});

gulp.task('styles', function() {
	return gulp.src('template/sass/**/*.sass')
	.pipe(sass({ outputStyle: 'expanded' }).on("error", notify.onError()))
	.pipe(rename({ suffix: '.min', prefix : '' }))
	.pipe(autoprefixer(['last 15 versions']))
	.pipe(cleancss( {level: { 1: { specialComments: 0 } } })) // Opt., comment out when debugging
	.pipe(gulp.dest('template/css'))
	//.pipe(browserSync.stream())
});

gulp.task('js', function() {
	return gulp.src([
		'template/libs/jquery/dist/jquery.min.js',
		'template/slick/slick.js',
		'template/js/common.js', // Always at the end
		])
	.pipe(concat('scripts.min.js'))
	// .pipe(uglify()) // Mifify js (opt.)
	.pipe(gulp.dest('template/js'))
	//.pipe(browserSync.stream())
});


gulp.task('watch', ['styles', 'js','browser-sync'], function() {
	gulp.watch('template/sass/**/*.sass', ['styles']);
	gulp.watch(['libs/**/*.js', 'template/js/common.js'], ['js']);
});

gulp.task('default', ['watch']);
