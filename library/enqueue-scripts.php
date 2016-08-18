<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_scripts' ) ) :
  function foundationpress_scripts() {

  wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic|Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic', false );

  // Enqueue the main Stylesheet.
  wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/assets/stylesheets/foundation.css', array(), false, 'all' );

  // Deregister the jquery version bundled with WordPress.
  wp_deregister_script( 'jquery' );

  // CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
  wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );

  // If you'd like to cherry-pick the foundation components you need in your project, head over to gulpfile.js and see lines 35-54.
  // It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
  wp_enqueue_script( 'foundation', get_template_directory_uri() . '/assets/javascript/foundation.js', array('jquery'), '2.6.1', true );

  // Make our theme path available as a JavaScript variable
  // http://wordpress.stackexchange.com/questions/89791/theme-path-in-javascript-file
  $translation_array = array('templateUrl' => get_stylesheet_directory_uri());
  wp_localize_script('foundation', 'object_name', $translation_array);

  // Add the comment-reply library on pages where it is necessary
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

  }

  add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
endif;


/**
 * Conditionally add Google Maps scripts
 */
// TODO: Add Google Maps API key
if ( ! function_exists( 'map_scripts' ) ) :
  function map_scripts() {
    if(is_page('contact')) {
      wp_register_script('google-maps-api', 'https://maps.googleapis.com/maps/api/js?callback=initMap', array(), '3.15', true);
      wp_enqueue_script('google-maps-api');
    }
  }

  add_action('wp_enqueue_scripts', 'map_scripts');
endif;


/**
 * Add sitewide Pardot tracking code
 */
add_action('wp_footer', 'add_pardot_tracking');
function add_pardot_tracking() { ?>
  <script type="text/javascript">
    piAId = '186502';
    piCId = '1396';

    (function() {
      function async_load(){
        var s = document.createElement('script'); s.type = 'text/javascript';
        s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';
        var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);
      }
      if(window.attachEvent) { window.attachEvent('onload', async_load); }
      else { window.addEventListener('load', async_load, false); }
    })();
  </script>
<?php } ?>
