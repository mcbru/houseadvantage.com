<?php
/**
 *
 * The template for displaying the Contact page
 *
 */
?>


<?php get_header(); ?>

<header class="hero" role="banner">
  <div class="row  column">
    <?php if ( get_field('hero_head') ) : ?>
      <h1><?php the_field('hero_head'); ?></h1>
    <?php endif; ?>
    <?php if ( get_field('hero_subhead') ) : ?>
      <p><?php the_field('hero_subhead'); ?></p>
    <?php endif; ?>
  </div>
  <div class="hero__image  hero__image--gold-1">
  </div>
</header>

<?php /*
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
  <div class="fp-intro">

    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <footer>
        <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
        <p><?php the_tags(); ?></p>
      </footer>
      <?php do_action( 'foundationpress_page_before_comments' ); ?>
      <?php comments_template(); ?>
      <?php do_action( 'foundationpress_page_after_comments' ); ?>
    </div>

  </div>

</section>
<?php endwhile;?>
 */ ?>

<!-- <div class="section&#45;divider"> -->
<!--   <hr /> -->
<!-- </div> -->

<section class="band  scroll-target">
  <div class="row">
    <div class="large-4  column">
      <ul class="no-marker">
        <li>House Advantage</li>
        <li>10100 W. Charleston Blvd., Ste. 130</li>
        <li>Las Vegas, NV 89135</li>
        <br>
        <li><strong>Phone:</strong> 702-240-4655</li>
        <li><strong>Fax:</strong> 702-410-6606</li>
        <li><strong>Web:</strong> http://www.houseadv.com</li>
        <li><strong>Email:</strong> <a href="mailto:contact@houseadv.com">contact@houseadv.com</a></li>
        <br>
        <ul class="menu  icon-menu">
          <li><a href="https://www.linkedin.com/company/house-advantage-llc"><i class="fa  fa-linkedin-square  fa-2x"></i></a></li>
          <li><a href="https://twitter.com/houseadv"><i class="fa  fa-twitter-square  fa-2x"></i></a></li>
        </ul>
      </ul>
      <h3 class="delta">Customer Support</h3>
        <ul class="no-marker">
          <li><strong>Online:</strong> <a href="http://support.houseadv.com">support.houseadv.com</a></li>
          <li><strong>Phone:</strong> 866-216-4077</li>
        </ul>
    </div>
    <div class="large-8  column">
      <!-- TODO: Complete ARIA form help text -->
      <form action="http://go.pardot.com/l/185502/2016-05-24/2bm" id="contact-form" method="post" data-abide novalidate>
        <div id="form-messages" class="callout" style="display: none;"></div>
        <!-- <label>Input Label -->
        <!--   <input type="text" placeholder=".large&#45;8.column"> -->
        <!-- </label> -->
        <div data-abide-error class="alert  callout" style="display: none;">
          <p><i class="fi-alert"></i>We need a little more information in order to best serve you. Please fill out the highlighted fields below.</p>
        </div>
        <label>
          <input name="first_name" id="first_name" type="text" placeholder="First Name*" aria-describedby="exampleHelpText" required>
          <span class="form-error">Please enter your first name</span>
        </label>
        <label>
          <input name="last_name" id="last_name" type="text" placeholder="Last Name*" aria-describedby="exampleHelpText" required>
          <span class="form-error">Please enter your last name</span>
        </label>
        <label>
          <input name="email" id="email" type="email" placeholder="Email*" aria-describedby="exampleHelpText" required>
          <span class="form-error">Please enter an email address</span>
        </label>
        <label>
          <textarea name="message" id="message" rows="7" placeholder="Message*" aria-describedby="exampleHelpText" required></textarea>
          <span class="form-error">Please enter a message for us</span>
        </label>
        <fieldset>
          <button class="button  hvr-sweep-to-right  hvr-sweep-to-right--gold" type="submit" value="Submit">Submit</button>
        </fieldset>
        <!-- <input value="true" id="submitted" name="submitted" type="hidden"> -->
      </form>
    </div>
  </div>
</section>
<div>
  <div class="row  expanded">
    <div id="map"></div>
  </div>
</div>


<?php get_footer();
