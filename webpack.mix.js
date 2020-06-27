const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

const glob = require('glob')

/*
 |--------------------------------------------------------------------------
 | Vendor assets
 |--------------------------------------------------------------------------
 */

function mixAssetsDir(query, cb) {
  (glob.sync('resources/assets/' + query) || []).forEach(f => {
    f = f.replace(/[\\\/]+/g, '/');
    cb(f, f.replace('resources', 'public'));
  });
}


// themes Core stylesheets
mixAssetsDir('supplier/sass/core/**/!(_)*.scss', (src, dest) => mix.sass(src, dest.replace(/(\\|\/)sass(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css')));

// pages Core stylesheets
mixAssetsDir('supplier/sass/pages/**/!(_)*.scss', (src, dest) => mix.sass(src, dest.replace(/(\\|\/)sass(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css')));

// Themescss task
mixAssetsDir('supplier/sass/plugins/**/!(_)*.scss', (src, dest) => mix.sass(src, dest.replace(/(\\|\/)sass(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css')));

// Core stylesheets
mixAssetsDir('supplier/sass/themes/**/!(_)*.scss', (src, dest) => mix.sass(src, dest.replace(/(\\|\/)sass(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css')));

// custom blank file for users
mixAssetsDir('supplier/scss/**/!(_)*.scss', (src, dest) => mix.sass(src, dest.replace(/(\\|\/)sass(\\|\/)/, '$1css$2').replace(/(\\|\/)scss(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css')));

// script js
mixAssetsDir('supplier/js/core/**/*.js', (src, dest) => mix.scripts(src, dest));

// custom script js
mixAssetsDir('supplier/js/scripts/**/*.js', (src, dest) => mix.scripts(src, dest));

// custom script js for users
mixAssetsDir('supplier/js/custom/**/*.js', (src, dest) => mix.scripts(src, dest));

/*
 |--------------------------------------------------------------------------
 | Application assets
 |--------------------------------------------------------------------------
 */

mix.copyDirectory('resources/assets/supplier/images', 'public/assets/supplier/images');
mix.copyDirectory('resources/assets/supplier/vendors', 'public/assets/supplier/vendors');
mix.copyDirectory('resources/assets/supplier/fonts', 'public/assets/supplier/fonts');
mix.copyDirectory('resources/assets/supplier/data', 'public/assets/supplier/data');


mix.sass('resources/assets/supplier/sass/bootstrap-extended.scss', 'public/assets/supplier/css')
  .sass('resources/assets/supplier/sass/bootstrap.scss', 'public/assets/supplier/css')
  .sass('resources/assets/supplier/sass/colors.scss', 'public/assets/supplier/css')
  .sass('resources/assets/supplier/sass/components.scss', 'public/assets/supplier/css')
  .sass('resources/assets/supplier/sass/custom-rtl.scss', 'public/assets/supplier/css')
  .options({
    processCssUrls: false
  });

// if (mix.inProduction()) {
//   mix.version();
//   mix.webpackConfig({
//     output: {
//       publicPath: '/demo/frest-bootstrap-laravel-admin-dashboard-template/demo-1'
//     }
//   });
//   mix.setResourceRoot("/demo/frest-bootstrap-laravel-admin-dashboard-template/demo-1");
// }
mix.version();
