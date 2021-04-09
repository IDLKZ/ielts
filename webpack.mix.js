const mix = require('laravel-mix');

// mix.styles(
//     [
//         "resources/assets/css/vendor/fontawesome.min.css",
//         "resources/assets/css/plugins/splitting.min.css",
//         "resources/assets/css/plugins/animate.min.css",
//         "resources/assets/css/plugins/jquery-ui.min.css",
//         "resources/assets/css/plugins/nice-select.min.css",
//         "resources/assets/css/plugins/swiper-bundle.min.css",
//         "resources/assets/css/plugins/aos.min.css",
//         "resources/assets/css/plugins/magnific-popup-min.css",
//         "resources/assets/css/style.css",
//         "resources/assets/css/vendor/vendor.min.css",
//         "resources/assets/css/plugins/plugins.min.css",
//          "resources/assets/css/style.min.css",
//
//     ],
//     "public/css/frontend.css"
// )

mix.js(
    [
        "resources/assets/js/vendor/vendor.min.js",
        "resources/assets/js/vendor/jquery-3.5.1.min.js",
        "resources/assets/js/vendor/jquery-migrate-3.3.0.min.js",
        "resources/assets/js/vendor/modernizr-3.11.2.min.js",
        "resources/assets/js/plugins/splitting.min.js",
        "resources/assets/js/plugins/swiper-bundle.min.js",
        "resources/assets/js/plugins/waypoints.min.js",
        "resources/assets/js/plugins/counter.min.js",
        "resources/assets/js/plugins/aos.min.js",
        "resources/assets/js/plugins/jquery.magnific-popup.min.js",
        "resources/assets/js/plugins/jquery.vide.min.js",
        "resources/assets/js/plugins/masonry.min.js",
        "resources/assets/js/plugins/theia-sticky-sidebar.min.js",
        "resources/assets/js/plugins/nice-select.min.js",
        "resources/assets/js/plugins/jquery.ajaxchimp.min.js",
        "resources/assets/js/plugins/jquery-ui.min.js",
        "resources/assets/js/plugins/plugins.min.js",
        "resources/assets/js/main.js",
    ],
    "public/js/frontend.js"
)
