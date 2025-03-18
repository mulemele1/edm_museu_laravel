const mix = require('laravel-mix');

mix
    .js('resources/js/app.js', 'public/js')
    .sass('resources/css/app.scss', 'public/css')
    .copy('resources/css/bootstrap.min.css', 'public/assets/css/bootstrap.min.css')
    .copy('resources/css/bootstrap-datepicker.min.css', 'public/assets/css/bootstrap-datepicker.min.css')
    .copy('resources/css/bootstrap-select.min.css', 'public/assets/css/bootstrap-select.min.css')
    .copy('resources/css/fontawesome-all.min.css', 'public/assets/css/fontawesome-all.min.css')
    .copy('resources/css/jquery.mCustomScrollbar.min.css', 'public/assets/css/jquery.mCustomScrollbar.min.css')
    .copy('resources/css/magnific-popup.css', 'public/assets/css/magnific-popup.css')
    .copy('resources/css/owl.carousel.min.css', 'public/assets/css/owl.carousel.min.css')
    .copy('resources/css/owl.theme.default.min.css', 'public/assets/css/owl.theme.default.min.css')
    .copy('resources/css/animate.css', 'public/assets/css/animate.css')
    .copy('resources/css/hover-min.css', 'public/assets/css/hover-min.css')
    .copy('resources/css/muzex-icons.css', 'public/assets/css/muzex-icons.css')
    .copy('resources/css/style.css', 'public/assets/css/style.css')
    .copy('resources/css/responsive.css', 'public/assets/css/responsive.css')
    .copy('resources/images', 'public/assets/images')
    .copy('resources/js', 'public/assets/js');
