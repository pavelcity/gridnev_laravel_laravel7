const mix = require('laravel-mix');





mix.sass('resources/assets/admin/css/adminstyle.scss', 'public/css/adminstyle.css');
mix.styles('resources/assets/admin/css/uikit.min.css', 'public/css/uikit.min.css');
mix.styles([
    'resources/assets/admin/js/uikit.min.js',
    'resources/assets/admin/js/uikit-icons.min.js'
], 'public/js/admin.js');
mix.scripts('resources/assets/admin/js/adminscripts.js', 'public/js/adminscripts.js');


