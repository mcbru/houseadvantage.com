<?php
/**
 *
 * The template for displaying the Contact page
 *
 */

get_header(); ?>

<header class="hero  hero--abstract-1" role="banner">
  <div class="row  column">
    <h1 class="hero__text">Contact House Advantage</h1>
    <p class="hero__text">We want to hear from you!</p>
    <!-- <a role="button" class="large  button  button&#45;&#45;hero" href="#"><i class="fa  fa&#45;lightbulb&#45;o"></i>CTA</a> -->

    <!-- <div id="watch"> -->
    <!--   <section id="stargazers"> -->
    <!--     <a href="https://github.com/olefredrik/foundationpress">1.5k stargazers</a> -->
    <!--   </section> -->
    <!--   <section id="twitter"> -->
    <!--     <a href="https://twitter.com/olefredrik">@olefredrik</a> -->
    <!--   </section> -->
    <!-- </div> -->
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

<section class="band">
  <div class="row">
    <div class="large-4  column">
      <ul class="no-marker">
        <li>House Advantage</li>
        <li>10100 W. Charleston Blvd., Ste. 130</li>
        <li>Las Vegas, NV 89135</li>
        <br>
        <li>Phone: 702-240-4655</li>
        <li>Fax: 702-410-6606</li>
        <li>http://www.houseadv.com</li>
        <li><a href="mailto:sales@houseadv.com">Sales@houseadv.com</a></li>
        <br>
        <ul class="menu">
          <li><a href="#"><i class="fi-social-linkedin  size-24"></i></a></li>
          <li><a href="#"><i class="fi-social-twitter  size-24"></i></a></li>
        </ul>
      </ul>
    </div>
    <div class="large-8  column">
      <form data-abide novalidate>
        <!-- <label>Input Label -->
        <!--   <input type="text" placeholder=".large&#45;8.column"> -->
        <!-- </label> -->
        <div data-abide-error class="alert  callout" style="display: none;">
          <p><i class="fi-alert"></i>We need a little more information in order to best serve you. Please fill out the highlighted fields below.</p>
        </div>
        <label>
          <input type="text" placeholder="Name*" aria-describedby="exampleHelpText" required>
          <span class="form-error">Please enter your name</span>
        </label>
        <label>
          <input type="text" placeholder="Email*" aria-describedby="exampleHelpText" required>
          <span class="form-error">Please enter an email address</span>
        </label>
        <label>
          <input type="text" placeholder="Subject" aria-describedby="exampleHelpText">
        </label>
        <label>
          <textarea rows="7" placeholder="Message*" aria-describedby="exampleHelpText" required></textarea>
          <span class="form-error">Please enter a message for us</span>
        </label>
        <!-- <input type="submit" class="button" value="Submit"> -->
        <fieldset>
          <button class="button" type="submit" value="Submit">Submit</button>
        </fieldset>
      </form>
    </div>
  </div>
</section>
<div>
  <div class="row  expanded">
    <!-- <img src="http://placehold.it/2000x800?text=Live Google Map location"> -->
    <div id="map"></div>
  </div>
</div>


<?php get_footer();
