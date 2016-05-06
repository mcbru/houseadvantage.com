<?php
/**
 *
 * The template for displaying the Solutions page
 *
 */

get_header(); ?>

<header class="hero" role="banner">
  <div class="row  column">
    <?php if ( get_field('hero_head') ) : ?>
      <h1 class="hero__head"><?php the_field('hero_head'); ?></h1>
    <?php endif; ?>
    <?php if ( get_field('hero_subhead') ) : ?>
      <p class="hero__subhead"><?php the_field('hero_subhead'); ?></p>
      <!-- <a role="button" class="large  button" href="#">CTA</a> -->
    <?php endif; ?>
  </div>
  <div class="hero__image  hero__image--solutions">
  </div>
</header>

<!-- <header class="hero  hero&#45;&#45;abstract&#45;1" role="banner"> -->
<!--   <div class="row  column"> -->
<!--     <h1 class="hero__text">Pick a Winner</h1> -->
<!--     <p class="hero__text">House Advantage loyalty marketing solutions provide the world’s largest and most innovative leading resort, leisure and entertainment companies with the tools to increase customer engagement, drive revenue, and gain competitive advantage in fast&#45;moving, highly competitive markets. -->
<!--     <br> -->
<!--     <strong>At House Advantage, we deliver value.</strong> -->
<!--     </p> -->
<!--     <a role="button" class="large  button  button&#45;&#45;hero" href="#"><i class="fa  fa&#45;lightbulb&#45;o"></i>CTA</a> -->

    <!-- <div id="watch"> -->
    <!--   <section id="stargazers"> -->
    <!--     <a href="https://github.com/olefredrik/foundationpress">1.5k stargazers</a> -->
    <!--   </section> -->
    <!--   <section id="twitter"> -->
    <!--     <a href="https://twitter.com/olefredrik">@olefredrik</a> -->
    <!--   </section> -->
    <!-- </div> -->
<!--   </div> -->
<!--  -->
<!-- </header> -->

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
  <div class="row column">
    <h2>House Advantage will deliver demonstrable value.</h2>
    <div class="row  small-up-1  medium-up-3">
      <div class="column">
        <P>We offer the most advanced and comprehensive <strong>loyalty strategy platform</strong>.</P>
      </div>
      <div class="column">
        <p>As your trusted partner, we stand with you in the development, management and optimization of your loyalty program.  </p>
      </div>
      <div class="column">
        <p>We deploy a centralized platform that integrates all your patron spending and behavioral data across multiple touch points.</p>
      </div>
      <div class="column">
        <p>Our <strong>loyalty software solutions</strong> are able to consolidate data from disparate transactional and management systems across the enterprise, all in real-time.</p>
      </div>
      <div class="column">
        <p>We provide deep <strong>system interface and integration expertise</strong> to deploy our solution on legacy infrastructures to leverage the value of existing systems.</p>
      </div>
    </div>
    <p><strong>House Advantage</strong> works with you hand-in-hand to configure a loyalty solution that addresses your unique requirements and programs. Depending on your needs, this personalized solution may combine all our offerings – software, strategy, implementation, training, system support and an ongoing collaborative partnership, or it may encompass on one or two. We’ll partner with you to craft the mix best suited for your business.</p>
  </div>
</section>
<section class="band  band--tint">
  <div class="row">
    <div class="medium-4  column">
      <span class="feature-icon  feature-icon--large">
        <span class="icon">
          <svg class="icon__item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 84.99 50.34"><path d="M43.09,1.48a1.93,1.93,0,0,0-1.21,0C34.69,3.76,26.13,9.63,26.13,24.65c0,10.59,5.4,18.38,15.6,22.54a2,2,0,0,0,.76.15,1.93,1.93,0,0,0,.75-0.15C53.45,43,58.84,35.24,58.84,24.65,58.84,9.63,50.27,3.76,43.09,1.48Zm4,24.69H44.49v2.17a2,2,0,1,1-4,0V26.17H37.87a2,2,0,0,1,0-4h2.62V19.09a2,2,0,0,1,4,0v3.08h2.63A2,2,0,0,1,47.12,26.17Z"/><path d="M59.34,50.34a47,47,0,0,1-17.61-3.14,2,2,0,0,1,0-3.7c8.7-3.55,13.11-9.89,13.11-18.84,0-10.12-4.36-16.63-13-19.36a2,2,0,0,1,0-3.81A33.1,33.1,0,0,1,51.61,0c18,0,30.33,7.1,32.9,19a21,21,0,0,1-7,20.46,15.88,15.88,0,0,0,3.17.32h0q0.68,0,1.37-.06a2,2,0,0,1,1.74,3.22C80.45,47.29,70.39,50.34,59.34,50.34ZM47.71,45a47.13,47.13,0,0,0,11.63,1.38,45.12,45.12,0,0,0,17.08-3A19.86,19.86,0,0,1,72,41.79a2,2,0,0,1,0-3.62c6.38-2.89,10.12-10.94,8.53-18.32C79.58,15.08,74.69,4,51.61,4c-0.67,0-1.62,0-2.74.13,5.32,3.36,10,9.46,10,20.52C58.84,33.57,55,40.5,47.71,45Z"/><path d="M25.58,50.34a57.74,57.74,0,0,1-6.94-.42c-8.36-1-14.89-3.63-17.48-7a2,2,0,0,1,1.74-3.21,16.23,16.23,0,0,0,4.55-.27A21.08,21.08,0,0,1,.36,19.51C1.38,14.08,6.3,1.32,29.76.09a2,2,0,0,1,.21,4C9.34,5.17,5.14,15.75,4.29,20.25c-1.39,7.35,2.31,15.06,8.6,17.91a2,2,0,0,1,0,3.62A19.81,19.81,0,0,1,8.6,43.3c7.4,3.15,21.88,4.8,33.13.19a2,2,0,1,1,1.52,3.7A47.47,47.47,0,0,1,25.58,50.34Z"/></svg>
        </span>
      </span>
    </div>
    <div class="medium-8  column">
      <h2 id="services">Advanced Loyalty Strategy Services</h2>
      <p><strong>House Advantage</strong> is your “always-on” partner for excellence implementing, managing, and optimizing your loyalty program. The breadth of our expertise, allows us to deploy and configure the HALo solution to meet specific requirements and goals. Find out how <strong>House Advantage</strong> can address your technical and business needs for loyalty solutions.</p>
      <a href="contact" class="button  hvr-sweep-to-right  hvr-sweep-to-right--gold">Contact Us</a>
    </div>
  </div>
</section>

<section class="band">
  <div class="row  column">
    <div class="row">
      <div class="medium-4  medium-push-8  column">
        <span class="feature-icon  feature-icon--large">
          <span class="icon">
            <svg class="icon__item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49.67 50.34"><path d="M20.83,1.66a23.85,23.85,0,0,0,0,47v-47Z"/><path d="M28.83,1.66v47A23.85,23.85,0,0,0,28.83,1.66Z"/></svg>
          </span>
        </span>
      </div>
      <div class="medium-8  medium-pull-4  column">
        <h2 id="products">HALo Loyalty Software Solutions</h2>
        <p>HALo is a suite of centrally managed loyalty solutions that enable delivery of highly tailored programs and incentives across multiple systems. HALo is a proven solution with huge transactional scale typically seen only in global financial networks. Orchestrating those programs and their vast stores of data is HALo Core, the central component of the HALo Loyalty Management Solution. The following management tools and user interfaces extend the power of the HALo platform.</p>
      </div>
    </div>

    <h3>Core Loyalty Management</h3>
    <div class="nugget-group">
      <div class="row">
        <div class="medium-6  column">
          <div class="media-object">
            <div class="media-object-section">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-halo-core.png">
            </div>
            <div class="media-object-section">
              <h3 class="delta"><a href="halo-core">HALo Core</a></h3>
              <p>Deploy the fundamental tools necessary to configure and manage the enterprise loyalty program. Define program characteristics such as customer tiers, a variety of loyalty currencies which can be earned or gifted, and the operations which participate in the program.</p>
            </div>
          </div>
        </div>
        <div class="medium-6  column">
          <div class="media-object">
            <div class="media-object-section">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-halo-offers.png">
            </div>
            <div class="media-object-section">
              <h3 class="delta"><a href="halo-offers">HALo Offers</a></h3>
              <p>HALo Offers allows marketing teams to publish targeted offers directly into HALo allowing customers to view and redeem their offers wherever and whenever they need them.</p>
            </div>
          </div>
        </div>
        <div class="medium-6  column">
          <div class="media-object">
            <div class="media-object-section">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-halo-event-management.png">
            </div>
            <div class="media-object-section">
              <h3 class="delta"><a href="halo-event-management">HALo Event Management</a></h3>
              <p>HALo Event Management allows local promotions and events teams to schedule events, and add customers to those events either through lists or criteria.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <h3>HALo Mobile Solutions</h3>
    <div class="nugget-group">
      <div class="row">
        <div class="medium-6  column">
          <div class="media-object">
            <div class="media-object-section">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-halo-mobile.png">
            </div>
            <div class="media-object-section">
              <h3 class="delta"><a href="halo-mobile">HALo Mobile</a></h3>
              <p>HALo Mobile provides mobile access to all your internal patron management functions – securely, enterprise-wide – on both iOS and Android. With HALo Mobile Enrollment, patrons easily enroll into loyalty programs simply by scanning a drivers’ license, minimizing data entry.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <h3>Promotions and Self-service</h3>
    <div class="nugget-group">
      <div class="row">
        <div class="medium-6  column" data-equalizer-watch>
          <div class="media-object">
            <div class="media-object-section">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-halo-kiosk.png">
            </div>
            <div class="media-object-section">
              <h3 class="delta"><a href="halo-kiosk">HALo Kiosk</a></h3>
              <p>HALo Kiosk allows businesses to deploy remote or onsite secure customer touchpoints where customers can view and manage their personal profiles, promotions, offers, events and rewards, as well as print contest entries, award vouchers and more.</p>
            </div>
          </div>
        </div>
        <div class="medium-6  column" data-equalizer-watch>
          <div class="media-object">
            <div class="media-object-section">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-halo-promotions.png">
            </div>
            <div class="media-object-section">
              <h3 class="delta"><a href="halo-promotions">HALo Promotions</a></h3>
              <p>HALo Promotions allows property level Promotions and Events teams to directly manage their promotions calendar. Manage Achievers, or “Spend X, Get Y” style promotions.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="[ band  band--tint ]">
  <div class="row  column">
    <div class="row">
      <div class="medium-4  medium-push-8  column">
        <span class="feature-icon  feature-icon--large">
          <span class="icon">
            <svg class="icon__item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118 118"><circle cx="60.69" cy="47" r="2.74"/><path d="M89.91,82.24L67.29,39.06V24.31h0.06a4.29,4.29,0,1,0,0-8.58H50.64a4.29,4.29,0,1,0,0,8.58h0.06V39.06L28.09,82.25A18.19,18.19,0,0,0,26,89.85a12.32,12.32,0,0,0,1.79,6.38v0l0,0a12.41,12.41,0,0,0,10.6,6H79.58A12.44,12.44,0,0,0,92,89.84,18.28,18.28,0,0,0,89.91,82.24ZM52.56,57.13a2.74,2.74,0,0,0-2.74,2.74h-7L53.37,39.72V21.64H50.64a1.63,1.63,0,1,1,0-3.25H67.35a1.63,1.63,0,1,1,0,3.25H64.63V39.72L75.18,59.87H55.29A2.74,2.74,0,0,0,52.56,57.13ZM63.43,92.92a7.43,7.43,0,1,1,7.43-7.43A7.43,7.43,0,0,1,63.43,92.92ZM73.85,75a3.62,3.62,0,1,1,3.62-3.62A3.62,3.62,0,0,1,73.85,75Z"/><path d="M68.9,85.48A5.47,5.47,0,1,1,63.43,80,5.47,5.47,0,0,1,68.9,85.48Z"/><circle cx="73.85" cy="71.4" r="1.92"/></svg>
          </span>
        </span>
      </div>
      <div class="medium-8  medium-pull-4  column">
        <h2 id="integrations">System Integrations</h2>
        <p>HALo is a suite of centrally managed loyalty solutions that enable delivery of highly tailored programs and incentives across multiple systems. HALo is a proven solution with huge transactional scale typically seen only in global financial networks. Orchestrating those programs and their vast stores of data is HALo Core, the central component of the HALo Loyalty Management Solution. The following management tools and user interfaces extend the power of the HALo platform.</p>
        <p>HALo integrates with all your existing transactional systems –  including gaming, hotel, dining, retail, spa and entertainment point of sale – using third-party certified gateways. No need for a high-cost rip-and-replace scenario or the limitations of a single management system. The House Advantage team can implement cutting-edge HALo solutions on your existing infrastructure.</p>
        <p>HALo system interface and integration technologies:</p>
        <ul>
          <li>Provide third-party systems with a simple, point-to-point API solution to communicate with HALo CORE.</li>
          <li>Add secure patron portals to your existing websites, providing access to loyalty data, offers and the patron profiles.</li>
          <li>Enable companies with information-bus platform investments, such as TIBCO, MULE, BizTalk to integrate through HALo Mesh.</li>
          <li>Can be deployed as a cloud-based solution to benefits from solutions such as Microsoft Azure and Amazon EC2.</li>
        </ul>
        <p>The HALo system interface solutions include the following tools:</p>
      </div>
    </div>
    <div class="nugget-group">
      <div class="row  small-up-1  medium-up-2  large-up-3">
        <div class="column" data-equalizer-watch>
          <div class="media-object">
            <div class="media-object-section">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-halo-web.png">
            </div>
            <div class="media-object-section">
              <h3 class="delta"><a href="halo-web">HALo Web</a></h3>
              <p>HALo Web allows you to add secure patron loyalty program portals to your existing web properties.</p>
            </div>
          </div>
        </div>
        <div class="column" data-equalizer-watch>
          <div class="media-object">
            <div class="media-object-section">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-halo-open-gateway.png">
            </div>
            <div class="media-object-section">
              <h3 class="delta"><a href="halo-open-gateway">HALo Open Gateway</a></h3>
              <p>HALo Open Gateway provides a simplified API for third-party access to patron information and transactional data.</p>
            </div>
          </div>
        </div>
        <div class="column" data-equalizer-watch>
          <div class="media-object">
            <div class="media-object-section">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-halo-mesh.png">
            </div>
            <div class="media-object-section">
              <h3 class="delta"><a href="halo-mesh">HALo Mesh</a></h3>
              <p>HALo Mesh enables information bus platforms such as TIBCO and MULE to directly integrate with HALo Core.</p>
            </div>
          </div>
        </div>
        <div class="column" data-equalizer-watch>
          <div class="media-object">
            <div class="media-object-section">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-halo-crmx-gateway.png">
            </div>
            <div class="media-object-section">
              <h3 class="delta"><a href="halo-crmx-gateway">HALo CRMx Gateway</a></h3>
              <p>HALo CRMx Gateway allows HALo to issue awards in response to triggered promotions or redeemed offers (for use with casino loyalty solutions).</p>
            </div>
          </div>
        </div>
        <div class="column" data-equalizer-watch>
          <div class="media-object">
            <div class="media-object-section">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-has2s-gateway.png">
            </div>
            <div class="media-object-section">
              <h3 class="delta"><a href="has2s-gateway">HAS2S Gateway</a></h3>
              <p>The HAS2S Gateway is the primary integration point for ACSC systems without the Bally Universal Gateway (for use with casino loyalty solutions).</p>
            </div>
          </div>
        </div>
        <div class="column" data-equalizer-watch>
          <div class="media-object">
            <div class="media-object-section">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-halo-cloud.png">
            </div>
            <div class="media-object-section">
              <h3 class="delta"><a href="halo-cloud">HALo Cloud</a></h3>
              <p>HALo Cloud enables deployment of HALo in a cloud-based environment such as Microsoft Azure or Amazon EC2.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php get_footer();
