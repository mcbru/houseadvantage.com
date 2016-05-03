<?php
/**
 *
 * The template for displaying the Contact page
 *
 */
?>

<?php
if(isset($_POST['submitted'])) {
  if(trim($_POST['contact_name']) === '') {
    $nameError = 'Please enter your name.';
    $hasError = true;
  } else {
    $name = trim($_POST['contact_name']);
  }

  if(trim($_POST['contact_email']) === '')  {
    $emailError = 'Please enter an email address.';
    $hasError = true;
  } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['contact_email']))) {
    $emailError = 'You entered an invalid email address.';
    $hasError = true;
  } else {
    $email = trim($_POST['contact_email']);
  }

  if(trim($_POST['contact_message']) === '') {
    $messageError = 'Please enter a message for us.';
    $hasError = true;
  } else {
    if(function_exists('stripslashes')) {
      $message = stripslashes(trim($_POST['contact_message']));
    } else {
      $message = trim($_POST['contact_message']);
    }
  }

  if(!isset($hasError)) {
    $emailTo = get_option('tz_email');
    if (!isset($emailTo) || ($emailTo == '') ){
      $emailTo = get_option('admin_email');
    }
    $subject = '[PHP Snippets] From '.$name;
    $body = "Name: $name \n\nEmail: $email \n\nMessage: $message";
    $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

    if (wp_mail($emailTo, $subject, $body, $headers)) {
      $emailSent = true;
      echo 'EMAIL SENT!';
    }
  }

}
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
        <ul class="menu  icon-menu">
          <li><a href="https://www.linkedin.com/company/house-advantage-llc"><i class="fa  fa-linkedin-square  fa-2x"></i></a></li>
          <li><a href="https://twitter.com/houseadv"><i class="fa  fa-twitter-square  fa-2x"></i></a></li>
        </ul>
      </ul>
    </div>
    <div class="large-8  column">
    <!-- TODO: Complete ARIA form help text -->
    <form action="<?php the_permalink(); ?>" id="contact-form" method="post" data-abide novalidate>
        <!-- <label>Input Label -->
        <!--   <input type="text" placeholder=".large&#45;8.column"> -->
        <!-- </label> -->
        <div data-abide-error class="alert  callout" style="display: none;">
          <p><i class="fi-alert"></i>We need a little more information in order to best serve you. Please fill out the highlighted fields below.</p>
        </div>
        <label>
          <input name="contact_name" type="text" placeholder="Name*" aria-describedby="exampleHelpText" required>
          <span class="form-error">Please enter your name</span>
        </label>
        <label>
          <input name="contact_email" type="text" placeholder="Email*" aria-describedby="exampleHelpText" required>
          <span class="form-error">Please enter an email address</span>
        </label>
        <label>
          <input name="contact_subject" type="text" placeholder="Subject" aria-describedby="exampleHelpText">
        </label>
        <label>
          <textarea name="contact_message" rows="7" placeholder="Message*" aria-describedby="exampleHelpText" required></textarea>
          <span class="form-error">Please enter a message for us</span>
        </label>
        <fieldset>
          <button class="button  hvr-sweep-to-right" type="submit" value="Submit">Submit</button>
        </fieldset>
        <input value="true" id="submitted" name="submitted" type="hidden">
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
