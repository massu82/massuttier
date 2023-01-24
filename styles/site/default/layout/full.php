<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="author" content="Andrés Massuttier <andres@massuttier.com.mx>"/>
    <meta name="description" content="<?php echo config('meta_description') ?>">
    <meta name="Keywords" content="<?php echo config('meta_keywords') ?>">
    <link rel="shortcut icon" href="<?php echo base_url() ?>/cdn/settings/<?php echo config('favicon') ?>"
          type="image/x-icon"/>
    <title><?php echo config('title') ?></title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/bootstrap.min.css" type="text/css">
    <!-- Animation -->
    <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/animate.min.css" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/owl.carousel.min.css" type="text/css">
    <!-- Light Case -->
    <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/lightcase.min.css" type="text/css">
    <!-- Template style -->
    <?php if (config('direction') == 'ltr'): ?>
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/style.css" type="text/css">
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/style-rtl.css" type="text/css">
    <?php endif ?>
    <?php if (config('color') == 'default'): ?>
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/colors/default.css" type="text/css"><?php endif ?>
    <?php if (config('color') == 'blue'): ?>
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/colors/blue.css" type="text/css"><?php endif ?>
    <?php if (config('color') == 'red'): ?>
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/colors/red.css" type="text/css"><?php endif ?>
    <?php if (config('color') == 'orange'): ?>
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/colors/orange.css" type="text/css"><?php endif ?>
    <?php if (config('color') == 'yellow'): ?>
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/colors/yellow.css" type="text/css"><?php endif ?>
    <?php if (config('color') == 'purple'): ?>
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/colors/purple.css" type="text/css"><?php endif ?>
    <?php if (config('color') == 'green'): ?>
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/colors/green.css" type="text/css"><?php endif ?>
    <?php if (config('color') == 'teal'): ?>
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/colors/teal.css" type="text/css"><?php endif ?>
    <?php if (config('color') == 'pink'): ?>
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/colors/pink.css" type="text/css"><?php endif ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11076440793"></script>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M8TCCNC');</script>
    <!-- End Google Tag Manager -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QX7821D16H"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-QX7821D16H');
    </script>
    <style>
        .whatsapp {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            z-index: 100;
        }
    </style>

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M8TCCNC"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- preloader -->
<div id="preloader">
    <div id="preloader-circle">
        <span></span>
        <span></span>
    </div>
</div>
<!-- /preloader -->
<div class="wrapper-page">
    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <div class="profile-picture-block">
                <div class="my-photo">
                    <img src="<?php echo base_url() ?>/cdn/about/<?php echo config('avatar') ?>" class="img-fluid"
                         alt="<?php echo config('name') ?>">
                </div>
            </div>
            <!-- Header Head -->
            <div class="site-title-block">
                <div class="site-title"><?php echo config('name') ?></div>
                <div class="type-wrap">
                    <div class="cd-headline clip">
                                <span class="cd-words-wrapper">
                                    <?php foreach (explode("\n", config('position_typing')) as $i): ?>
                                        <b><?php echo $i ?></b>
                                    <?php endforeach; ?>
                                </span>
                    </div>
                </div>
            </div>
            <!-- /Header Head -->

            <!-- Navigation -->
            <div class="site-nav">
                <!-- Main menu -->
                <ul class="header-main-menu" id="header-main-menu">
                    <li><a class="active" href="<?php echo $this->uri->segment(1) ? site_url() : null ?>#home"><i
                                    class="fas fa-home"></i> <?php echo lang('global_home') ?></a></li>
                    <li><a href="<?php echo $this->uri->segment(1) ? site_url() : null ?>#about-me"><i
                                    class="fas fa-user-tie"></i> <?php echo lang('global_about') ?></a></li>
                    <?php if (config('display_resume') == '1'): ?>
                        <li><a href="<?php echo $this->uri->segment(1) ? site_url() : null ?>#resume"><i
                                    class="fas fa-award"></i> <?php echo lang('global_Resume') ?></a></li><?php endif ?>
                    <?php if (config('display_portfolio') == '1'): ?>
                        <li><a href="<?php echo $this->uri->segment(1) ? site_url() : null ?>#portfolio"><i
                                    class="fas fa-business-time"></i> <?php echo lang('global_Portfolio') ?></a>
                        </li><?php endif ?>
                    <?php if (config('display_blog') == '1'): ?>
                        <li><a href="<?php echo $this->uri->segment(1) ? site_url() : null ?>#blog"><i
                                    class="fas fa-book-reader"></i> <?php echo lang('global_Blog') ?></a>
                        </li><?php endif ?>
                    <li><a href="https://cursos.massuttier.com.mx/"><i class="fas fa-graduation-cap"></i> Cursos</a>
                    </li>
                    <li><a href="<?php echo $this->uri->segment(1) ? site_url() : null ?>#contact"><i
                                    class="fas fa-paper-plane"></i> <?php echo lang('global_contact_me') ?></a></li>
                </ul>
                <!-- /Main menu -->
            </div>
            <!-- /Navigation -->
        </div>
    </header>
    <!-- /Header -->

    <!-- Mobile Header -->
    <div class="responsive-header">
        <div class="responsive-header-name">
            <img class="responsive-logo" src="<?php echo base_url() ?>/cdn/about/<?php echo config('avatar') ?>"
                 alt="<?php echo config('name') ?>"/>
            <?php echo config('name') ?>
        </div>
        <span class="responsive-icon"><i class="lnr lnr-menu"></i></span>
    </div>
    <!-- /Mobile Header -->
    {layout}
</div>

<!--JS Files-->
<script src="<?php echo STYLE_JS ?>/jquery.min.js"></script>
<script src="<?php echo STYLE_JS ?>/bootstrap.min.js"></script>
<!--Owl Coursel-->
<script src="<?php echo STYLE_JS ?>/owl.carousel.min.js"></script>
<!-- Typing Text -->
<script src="<?php echo STYLE_JS ?>/typed.min.js"></script>
<!--Images LightCase-->
<script src="<?php echo STYLE_JS ?>/lightcase.min.js"></script>
<!-- Portfolio filter -->
<script src="<?php echo STYLE_JS ?>/jquery.isotope.min.js"></script>
<!-- Wow Animation -->
<script src="<?php echo STYLE_JS ?>/wow.min.js"></script>
<!-- Map -->
<!-- Main Script -->
<?php if (config('direction') == 'ltr'): ?>
    <script src="<?php echo STYLE_JS ?>/script.js"></script>
<?php else: ?>
    <script src="<?php echo STYLE_JS ?>/script-rtl.js"></script>
<?php endif ?>

<?php if (config('map_key')): ?>
    <script src="https://maps.google.com/maps/api/js?key=<?php echo config('map_key') ?>"></script>
<?php endif ?>
<script>
    if ($('#google-map').length > 0) {
        //set your google maps parameters
        var latitude = <?php echo config('latitude') ?>,
            longitude = <?php echo config('longitude') ?>,
            map_zoom = 14;

        //google map custom marker icon
        var marker_url = '<?php echo STYLE_IMAGES ?>/map-marker.png';

        //we define here the style of the map
        var style = [{
            "featureType": "landscape",
            "stylers": [{"saturation": -100}, {"lightness": 65}, {"visibility": "on"}]
        }, {
            "featureType": "poi",
            "stylers": [{"saturation": -100}, {"lightness": 51}, {"visibility": "simplified"}]
        }, {
            "featureType": "road.highway",
            "stylers": [{"saturation": -100}, {"visibility": "simplified"}]
        }, {
            "featureType": "road.arterial",
            "stylers": [{"saturation": -100}, {"lightness": 30}, {"visibility": "on"}]
        }, {
            "featureType": "road.local",
            "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]
        }, {
            "featureType": "transit",
            "stylers": [{"saturation": -100}, {"visibility": "simplified"}]
        }, {"featureType": "administrative.province", "stylers": [{"visibility": "off"}]}, {
            "featureType": "water",
            "elementType": "labels",
            "stylers": [{"visibility": "on"}, {"lightness": -25}, {"saturation": -100}]
        }, {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]
        }];

        //set google map options
        var map_options = {
            center: new google.maps.LatLng(latitude, longitude),
            zoom: map_zoom,
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            streetViewControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            styles: style,
        }
        //inizialize the map
        var map = new google.maps.Map(document.getElementById('google-map'), map_options);
        //add a custom marker to the map
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(latitude, longitude),
            map: map,
            visible: true,
            icon: marker_url,
        });
    }
    <?php if (config('google_analytics_id')): ?>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-<?php echo config('google_analytics_id') ?>-1', 'auto');
    ga('send', 'pageview');

    <?php endif ?>
</script>
<!--WhatsApp-->
<div id="whatsapp">
    <a href="https://api.whatsapp.com/send?phone=5215583309756&text=Hola%20quisiera%20información%20sobre%20los%20servicios"
       target="_blank" class="whatsapp"><img src="<?php echo STYLE_IMAGES ?>/whatsapp.png" alt="whatsapp" width="100%"></a>
</div>
<script>
    window.addEventListener('load', function () {
        jQuery('.whatsapp').click(function () {
            gtag('event', 'conversion', {
                send_to: 'AW-10816117326/RLIlCNXlvL8DEM60w6Uo',
            });
        });
    });

</script>
</body>
</html>