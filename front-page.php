<?php
/**
 *
 * The template for displaying the Home page
 *
 */

get_header(); ?>

<header class="hero  hero--front" role="banner">
  <div class="row  collapse">
    <div class="medium-11  medium-offset-1  column">
      <div class="diagonals">
        <?php if ( get_field('hero_head') ) : ?>
          <h1><?php the_field('hero_head'); ?></h1>
        <?php endif; ?>
        <?php if ( get_field('hero_subhead') ) : ?>
          <p><?php the_field('hero_subhead'); ?></p>
        <?php endif; ?>
          <a role="button" class="button  button--hero  hvr-sweep-to-right  hvr-sweep-to-right--red" href="solutions"><i class="fa  fa-lightbulb-o"></i>see our solutions</a>
      </div>
    </div>
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


<section class="[ band  band--special ]">
  <div class="row  text-center">

    <!-- <h2 class="slashes">What We Do</h2> -->
<!--
    <p class="lede">In today’s highly dynamic resort, leisure and entertainment markets, operators like you are looking for meaningful ways to build stronger customer bonds and drive revenue profitably. Enhancing the customer experience through a comprehensive loyalty proposition is a proven way of ensuring you gain that competitive edge and deliver bottom line results.</p>
-->
    <h2>Supercharge Your Programs With The Power And Flexibility of HALo.</h2>
    <p class="subhead">HALo is a comprehensive suite of loyalty solutions that will help you differentiate and extend your offerings to gain competitive advantage in highly dynamic markets.</p>

  </div>
  <div class="row">
    <div class="small-12  medium-4  column">
      <div class="nugget-group  text-left">
        <div class="nugget__item">
          <h3 class="epsilon">Extend the value of your current investments</h3>
          <p>Seamlessly integrate HALo loyalty solutions with existing systems.</p>
        </div>

        <div class="nugget__item">
          <h3 class="epsilon">Incorporate patron data universally</h3>
          <p>Provide a consistent experience across all existing transactional systems.</p>
        </div>

        <div class="nugget__item">
          <h3 class="epsilon">Expand the value proposition of your program</h3>
          <p>Engage your members across all amenities and touch points, in real time.</p>
        </div>
      </div>
    </div>

    <div class="small-12  medium-4  column">
      <div class="pull-quote  pull-quote--vanilla  text-center">
        <p>Differentiate your loyalty program with the power and flexibility of HALo, an advanced loyalty solution that can help you boost customer engagement and gain competitive advantage in highly dynamic markets.</p>
      </div>
    </div>

    <div class="small-12  medium-4  column">
      <div class="nugget-group  text-left">
        <div class="nugget__item">
          <h3 class="epsilon">Empower patrons to redeem offers and rewards when they want</h3>
          <p>Let customers manage experiences through a variety of self-service interfaces.</p>
        </div>

        <div class="nugget__item">
          <h3 class="epsilon">Enable the creation and execution of new programs</h3>
          <p>Offer and promotional campaigns through a suite of advanced loyalty marketing capabilities.</p>
        </div>

      </div>
    </div>

  </div>
</section>


<section class="[ band  band--special-dark  band--large ]  text-center">
  <div class="row">
    <h2>Finally A Loyalty Platform That Works The Way You Do</h2>
    <p class="subhead">House Advantage offers decades of experience in loyalty programs for the resort, leisure and entertainment markets. We bring proven technology and the strategic expertise needed to enhance your loyalty program. We offer ongoing services support after we implement your solution.</p>
  </div>
  <div class="nugget-group  animation-wrapper" data-equalizer  data-equalize-on="medium">
    <div class="row  small-up-1  medium-up-2  large-up-3">
        <div class="nugget__item  column">
          <span class="feature-icon  feature-icon--circle">
            <span class="icon  icon-1">
              <svg class="icon__item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118 118"><path d="M59.6,35a2,2,0,0,0-1.22,0c-7.28,2.31-15.94,8.25-15.94,23.45,0,10.72,5.47,18.6,15.79,22.81a2,2,0,0,0,.77.15,2,2,0,0,0,.76-0.15C70.09,77,75.54,69.19,75.54,58.47,75.54,43.27,66.87,37.33,59.6,35Zm4,25H61v2.2a2,2,0,0,1-4,0V60H54.32a2,2,0,0,1,0-4H57V52.85a2,2,0,1,1,4,0V56h2.66a2,2,0,0,1,0,4h0Z"/><path d="M76,84.47A47.57,47.57,0,0,1,58.23,81.3a2,2,0,0,1,0-3.74C67,74,71.49,67.54,71.49,58.48c0-10.24-4.41-16.83-13.16-19.59a2,2,0,0,1,0-3.86,33.5,33.5,0,0,1,9.89-1.51c18.22,0,30.7,7.19,33.3,19.23a21.25,21.25,0,0,1-7.08,20.71,16.07,16.07,0,0,0,3.21.32h0q0.69,0,1.39-.06A2,2,0,0,1,100.79,77C97.41,81.39,87.23,84.47,76,84.47Zm-11.77-5.4A47.7,47.7,0,0,0,76,80.47a45.67,45.67,0,0,0,17.29-3,20.1,20.1,0,0,1-4.47-1.61,2,2,0,0,1,0-3.66c6.46-2.92,10.24-11.07,8.63-18.54-1-4.83-5.91-16-29.27-16a23,23,0,0,0-2.77.13c5.38,3.4,10.12,9.57,10.12,20.77C75.54,67.5,71.66,74.52,64.28,79.07Z"/><path d="M41.88,84.47a58.44,58.44,0,0,1-7-.43C26.4,83,19.79,80.38,17.17,77a2,2,0,0,1,1.76-3.25,16.43,16.43,0,0,0,4.6-.27,21.33,21.33,0,0,1-7.18-20.17c1-5.5,6-18.41,29.76-19.65a2,2,0,0,1,.21,4c-20.88,1.09-25.13,11.8-26,16.36-1.41,7.44,2.34,15.24,8.7,18.13a2,2,0,0,1,0,3.66,20,20,0,0,1-4.34,1.54c7.49,3.19,22.14,4.86,33.53.19a2,2,0,1,1,1.54,3.74A48,48,0,0,1,41.88,84.47Z"/></svg>
            </span>
          </span>
          <h3 class="delta  min-height-small">Strategy Services</h3>
          <p data-equalizer-watch>House Advantage is your “always-on” partner in every aspect of loyalty and customer engagement, applying more than a century of combined experience implementing, managing, and optimizing loyalty solutions to meet your requirements.</p>
          <a role="button" class="large  button  hvr-sweep-to-right  hvr-sweep-to-right--gold" href="solutions#services">learn more</a>
        </div>

        <div class="nugget__item  column">
          <span class="feature-icon  feature-icon--circle">
            <span class="icon  icon-2">
              <svg class="icon__item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118 118"><path d="M43.67,42.15a1.41,1.41,0,0,0,2,.16,1.65,1.65,0,0,0,.53-1.24,7,7,0,1,1,7,7A1.65,1.65,0,0,0,52,48.6a1.41,1.41,0,0,0,.16,2l7,7,7-7a3.56,3.56,0,0,1,5.09-.16,3.82,3.82,0,0,1,1.16,2.69v0.05a4.85,4.85,0,1,0,4.82-4.82H77.19a3.81,3.81,0,0,1-2.69-1.16,3.56,3.56,0,0,1,.16-5.09l7.06-7.06L65.19,18.57a8.75,8.75,0,0,0-12.38,0L36.45,34.92Z"/><path d="M76.18,43.68a1.41,1.41,0,0,0-.16,2,1.65,1.65,0,0,0,1.24.53,7,7,0,1,1-7,7A1.65,1.65,0,0,0,69.73,52a1.41,1.41,0,0,0-2,.16l-7,7,3.95,3.95a3.56,3.56,0,0,1,.16,5.09,3.81,3.81,0,0,1-2.69,1.16H62.05a4.84,4.84,0,1,0,4.82,4.82V74.13A3.82,3.82,0,0,1,68,71.44a3.56,3.56,0,0,1,5.09.16l10,10L99.44,65.19a8.75,8.75,0,0,0,0-12.38L83.24,36.62Z"/><path d="M42.36,74.44a1.41,1.41,0,0,0,.16-2,1.65,1.65,0,0,0-1.24-.53,7,7,0,1,1,7-7,1.65,1.65,0,0,0,.53,1.24,1.41,1.41,0,0,0,2-.16l6.79-6.79-7-7a3.56,3.56,0,0,1-.16-5.09,3.81,3.81,0,0,1,2.69-1.16h0.05a4.84,4.84,0,1,0-4.82-4.82v0.06a3.81,3.81,0,0,1-1.16,2.69,3.57,3.57,0,0,1-5.09-.16l-7.22-7.22L18.56,52.81a8.75,8.75,0,0,0,0,12.38L35.09,81.71Z"/><path d="M71.6,73.13a1.41,1.41,0,0,0-2-.16A1.65,1.65,0,0,0,69,74.21a7,7,0,1,1-7-7,1.65,1.65,0,0,0,1.24-.53,1.41,1.41,0,0,0-.16-2l-3.95-3.95-6.79,6.79a3.56,3.56,0,0,1-5.09.16,3.81,3.81,0,0,1-1.16-2.69V64.89a4.85,4.85,0,1,0-4.82,4.82h0.06A3.82,3.82,0,0,1,44,70.87,3.57,3.57,0,0,1,43.89,76l-7.28,7.28L52.81,99.44a8.76,8.76,0,0,0,12.38,0L81.55,83.08Z"/></svg>
            </span>
          </span>
          <h3 class="delta  min-height-small">Integrated Software Solutions</h3>
          <p data-equalizer-watch>HALo is a suite of centrally managed loyalty solutions. It has the power to integrate your loyalty program across hotel, restaurant, point of sale, food and beverage, spa and entertainment systems in service of a coherent, enterprise-wide customer experience.</p>
          <a role="button" class="large  button  hvr-sweep-to-right  hvr-sweep-to-right--gold" href="solutions#products">learn more</a>
        </div>

        <div class="nugget__item  column">
          <span class="feature-icon  feature-icon--circle">
            <span class="icon  icon-3">
              <svg class="icon__item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118 118"><circle cx="60.69" cy="47" r="2.74"/><path d="M89.91,82.24L67.29,39.06V24.31h0.06a4.29,4.29,0,1,0,0-8.58H50.64a4.29,4.29,0,1,0,0,8.58h0.06V39.06L28.09,82.25A18.19,18.19,0,0,0,26,89.85a12.32,12.32,0,0,0,1.79,6.38v0l0,0a12.41,12.41,0,0,0,10.6,6H79.58A12.44,12.44,0,0,0,92,89.84,18.28,18.28,0,0,0,89.91,82.24ZM52.56,57.13a2.74,2.74,0,0,0-2.74,2.74h-7L53.37,39.72V21.64H50.64a1.63,1.63,0,1,1,0-3.25H67.35a1.63,1.63,0,1,1,0,3.25H64.63V39.72L75.18,59.87H55.29A2.74,2.74,0,0,0,52.56,57.13ZM63.43,92.92a7.43,7.43,0,1,1,7.43-7.43A7.43,7.43,0,0,1,63.43,92.92ZM73.85,75a3.62,3.62,0,1,1,3.62-3.62A3.62,3.62,0,0,1,73.85,75Z"/><path d="M68.9,85.48A5.47,5.47,0,1,1,63.43,80,5.47,5.47,0,0,1,68.9,85.48Z"/><circle cx="73.85" cy="71.4" r="1.92"/></svg>
            </span>
          </span>
          <h3 class="delta  min-height-small">System Interface and Integration Technologies</h3>
          <p data-equalizer-watch>House Advantage offers certified tools for point-to-point and information-bus integrations, with deep expertise deploying HALo on legacy infrastructures to preserve your existing technology investments.</p>
          <a role="button" class="large  button  hvr-sweep-to-right  hvr-sweep-to-right--gold" href="solutions#integrations">learn more</a>
        </div>
      </div>
  </div>
</section>

<section class="[ band  band--gold  band--large  triple-border ]  text-center">
  <div class="row">
    <h2>Client Testimonials</h2>
    <p class="subhead">Hear from our customers how a <strong>House Advantage</strong> partnership has generated results for some of the most successful brands in the resort and entertainment industry.</p>
    <a role="button" class="large  button  button--dark  hvr-sweep-to-right  hvr-sweep-to-right--gray" href="the-house-advantage#testimonials">the house advantage</a>
  </div>
</section>

<section class="[ band  band--large ]  text-center">
  <div class="row">
    <h2>Our Team</h2>
    <p class="subhead">The <strong>House Advantage</strong> leadership team has decades of senior-level experience operating and managing resort, leisure and entertainment companies and the technologies that serve them.</p>
    <a role="button" class="large  button  hvr-sweep-to-right  hvr-sweep-to-right--gold" href="meet-the-team">meet the ha team</a>
  </div>
</section>



<?php get_footer();
