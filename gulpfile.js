var browserSync = require('browser-sync'),
    gulp        = require('gulp');

var config = './config.json' || {
  "devUrl": "wcsd.dev"
};

// ### Watch
// `gulp watch` - Use BrowserSync to proxy your dev server and synchronize code
// changes across devices. Specify the hostname of your dev server at
// `manifest.config.devUrl`. When a modification is made to an asset, run the
// build step for that asset and inject the changes into the page.
// See: http://www.browsersync.io
gulp.task('watch', function() {
  browserSync({
    proxy: config.devUrl,
    snippetOptions: {
      whitelist: ['/wp-admin/admin-ajax.php'],
      blacklist: ['/wp-admin/**']
    }
  });
  gulp.watch(['./styles/**/*'], ['styles']);
  gulp.watch(['./scripts/**/*'], ['jshint', 'scripts']);
  gulp.watch(['./fonts/**/*'], ['fonts']);
  gulp.watch(['./images/**/*'], ['images']);
  gulp.watch(['bower.json'], ['wiredep']);
  gulp.watch('**/*.php', function() {
    browserSync.reload();
  });
});