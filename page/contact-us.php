<?php require_once("../common/header.php"); ?>

<body class="page-template page-template-page-blank page-template-page-blank-php page page-id-11662 lightbox nav-dropdown-has-arrow">

<a class="skip-link screen-reader-text" href="#main">Skip to content</a>

<div id="wrapper">


    <?php require_once("../common/nav-bar.php"); ?>


    <main id="main" class="">


        <div id="content" role="main" class="content-area">



            <script type="text/javascript">
                jQuery( document ).ready(function() {
                    function initialize() {
                        var styles = {
                            'flatsome':  [{
                                "featureType": "administrative",
                                "stylers": [
                                    { "visibility": "on" }
                                ]
                            },
                                {
                                    "featureType": "road",
                                    "stylers": [
                                        { "visibility": "on" },
                                        { "hue": "#58728a" }
                                    ]
                                },
                                {
                                    "stylers": [
                                        { "visibility": "on" },
                                        { "hue": "#58728a" },
                                        { "saturation": -30 }
                                    ]
                                }
                            ]};

                        var myLatlng = new google.maps.LatLng(43.7538827, -79.2706406);
                        var myOptions = {
                            zoom: 17,
                            center: myLatlng,
                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                            disableDefaultUI: true,
                            mapTypeId: 'flatsome',
                            draggable: true,
                            zoomControl: false,
                            zoomControlOptions: {
                                position: google.maps.ControlPosition.TOP_LEFT
                            },
                            // panControl: false,
                            // panControlOptions: {
                            //   position: google.maps.ControlPosition.TOP_LEFT
                            // },
                            mapTypeControl: false,
                            mapTypeControlOptions: {
                                position: google.maps.ControlPosition.TOP_LEFT
                            },
                            // scaleControl: false,
                            // scaleControlOptions: {
                            //   position: google.maps.ControlPosition.TOP_LEFT
                            // },
                            streetViewControl: false,
                            streetViewControlOptions: {
                                position: google.maps.ControlPosition.TOP_LEFT
                            },
                            // overviewMapControl: false,
                            // overviewMapControlOptions: {
                            //   position: google.maps.ControlPosition.TOP_LEFT
                            // },
                            scrollwheel: false,
                            disableDoubleClickZoom: true
                        }
                        var map = new google.maps.Map(document.getElementById("map-831048245-inner"), myOptions);
                        var styledMapType = new google.maps.StyledMapType(styles['flatsome'], {name: 'flatsome'});
                        map.mapTypes.set('flatsome', styledMapType);

                        var marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            title:""
                        });
                    }

                    google.maps.event.addDomListener(window, 'load', initialize);
                    google.maps.event.addDomListener(window, 'resize', initialize);
                });
            </script>

            <div class="google-map relative mb" id="map-831048245">
                <div class="map-height" id="map-831048245-inner"></div>
                <div id="map_overlay_top"></div>
                <div id="map_overlay_bottom"></div>
                <div class="map_inner map-inner last-reset absolute x95 md-x95 lg-x95 y95 md-y95 lg-y95">

                    <div class="contact-map-add">
                        <h3>80 midwest Rd. unit 22-24,<br />
                            Toronto, Ontario, M1P 4R2<br />
                            Canada</h3>
                    </div>
                </div>


                <style scope="scope">

                    #map-831048245 .map-inner {
                        background-color: #fff;
                        max-width: 30%;
                    }
                    #map-831048245 .map-height {
                        height: 400px;
                    }
                </style>
            </div><!-- .map -->


            <div class="row"  id="row-1766303339">
                <div class="col medium-6 large-6"  ><div class="col-inner"  >
                        <div class="container section-title-container" ><h3 class="section-title section-title-normal"><b></b><span class="section-title-main" >Contact Details</span><b></b></h3></div><!-- .section-title -->
                        <p><strong>SAVI EVENT PARTY &amp; TENT RENTALS</strong></p>
                        <p><strong>Address :</strong><br />
                            80 midwest Rd. unit 22-24, Toronto, Ontario, M1P 4R2 Canada</p>
                        <p><strong>Phone :</strong><br />
                            647-988-7284</p>
                        <p><strong>Email :</strong><br />
                            sales@savieventsimport.com<br />
                            info@savieventsimport.com</p>
                    </div></div>
                <div class="col medium-6 large-6"  ><div class="col-inner"  >
                        <div class="container section-title-container" ><h3 class="section-title section-title-normal"><b></b><span class="section-title-main" >Send us an email</span><b></b></h3></div><!-- .section-title -->
                        <div role="form" class="wpcf7" id="wpcf7-f11581-p11662-o2" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="/nationaleventsupply/contact-us/#wpcf7-f11581-p11662-o2" method="post" class="wpcf7-form" novalidate="novalidate">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="11581" />
                                    <input type="hidden" name="_wpcf7_version" value="4.9" />
                                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f11581-p11662-o2" />
                                    <input type="hidden" name="_wpcf7_container_post" value="11662" />
                                </div>
                                <p><label>Your Name (required)</label><br />
                                    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span></p>
                                <p><label>Your Email (required)</label><br />
                                    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> </p>
                                <p><label>Your Message (required)</label><br />
                                    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></textarea></span> </p>
                                <p><input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit button" /></p>
                                <div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
                    </div></div>
            </div>


        </div>



    </main><!-- #main -->

    <?php include_once '../common/footer.php' ?>
</body>
</html>
