const mix = require('laravel-mix');




// для админки
mix.sass('resources/assets/admin/css/adminstyle.scss', 'public/css/adminstyle.css');
mix.styles([
    'resources/assets/admin/css/uikit.min.css',
    'resources/assets/admin/css/datepicker.minimal.css',
    'resources/assets/admin/css/datepicker.material.css'
    ],
    'public/css/uikit.min.css');
mix.styles([
    'resources/assets/admin/js/uikit.min.js',
    'resources/assets/admin/js/uikit-icons.min.js',
    'resources/assets/admin/js/jquery-3.5.1.min.js',
    'resources/assets/admin/js/datepicker.js'
], 'public/js/admin.js');
mix.scripts('resources/assets/admin/js/adminscripts.js', 'public/js/adminscripts.js');





// для сайта
mix.sass('resources/assets/site/css/mainstyle.scss', 'public/css/main.css');
mix.styles([
    'resources/assets/site/css/uikit.min.css'
], 'public/css/uikit_for_site.min.css');

mix.scripts([
    'resources/assets/site/js/uikit.min.js',
    'resources/assets/site/js/uikit-icons.min.js',
    'resources/assets/site/js/jquery-3.5.1.min.js'
], 'public/js/uikit_for_site.js');
mix.scripts('resources/assets/site/js/my.js', 'public/js/my.js');
















