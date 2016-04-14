<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

    </section>
    <div id="footer-container">
      <footer id="footer">
        <?php do_action( 'foundationpress_before_footer' ); ?>
        <?php dynamic_sidebar( 'footer-widgets' ); ?>
        <?php do_action( 'foundationpress_after_footer' ); ?>
      </footer>
    </div>

    <?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
    </div><!-- Close off-canvas wrapper inner -->
  </div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
    <script>
      function initMap() {
        var location = new google.maps.LatLng(36.1654401, -115.3410981);
        var mapOptions = {
          center: location,
          zoom: 13,
          disableDefaultUI: true,
        };
        var styles = [
          {
            "featureType": "poi",
            "stylers": [
              { "visibility": "off" }
            ]
          },{
            "featureType": "landscape.man_made",
            "elementType": "geometry.fill",
            "stylers": [
              { "color": "#868080" },
              { "saturation": -34 },
              { "lightness": 74 }
            ]
          },{
            "featureType": "road.highway",
            "stylers": [
              { "color": "#808080" },
              { "lightness": 39 }
            ]
          },{
            "featureType": "water",
            "stylers": [
              { "color": "#968080" },
              { "hue": "#ffe500" },
              { "saturation": 23 },
              { "lightness": 37 }
            ]
          }
        ]
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, mapOptions);
        map.setOptions({styles: styles});
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        async defer></script>
</body>
</html>
