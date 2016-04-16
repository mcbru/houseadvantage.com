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
        <div class="menu-centered">
          <ul class="menu">
            <li><a href="#"><i class="fa  fa-linkedin  fa-3x"></i></a></li>
            <li><a href="#"><i class="fa  fa-twitter  fa-3x"></i></a></li>
            <li><a href="#"><i class="fa  fa-envelope  fa-3x"></i></a></li>
          </ul>
        </div>
        <div class="menu-centered">
          <ul class="menu  vertical  large-horizontal">
            <li>&copy; <?php echo date( "Y" ); ?> House Advantage, LLC&nbsp;</li>
            <li>10100 W. Charleston Blvd., Ste. 130, Las Vegas, NV 89135</li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
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
</body>
</html>
