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
    <ul>
      <li>We offer the most advanced and comprehensive <strong>loyalty strategy platform</strong>.</li>
      <li>As your trusted partner, we stand with you in the development, management and optimization of your loyalty program.  </li>
      <li>We deploy a centralized platform that integrates all your patron spending and behavioral data across multiple touch points.</li>
      <li>Our <strong>loyalty software solutions</strong> are able to consolidate data from disparate transactional and management systems across the enterprise, all in real-time.</li>
      <li>We provide deep <strong>system interface and integration expertise</strong> to deploy our solution on legacy infrastructures to leverage the value of existing systems.</li>
    </ul>
    <p><strong>House Advantage</strong> works with you hand-in-hand to configure a loyalty solution that addresses your unique requirements and programs. Depending on your needs, this personalized solution may combine all our offerings – software, strategy, implementation, training, system support and an ongoing collaborative partnership, or it may encompass on one or two. We’ll partner with you to craft the mix best suited for your business.</p>
    <h2 id="services">Advanced Loyalty Strategy Services</h2>
    <p><strong>House Advantage</strong> is your “always-on” partner for excellence implementing, managing, and optimizing your loyalty program. The breadth of our expertise, allows us to deploy and configure the HALo solution to meet specific requirements and goals. Find out how <strong>House Advantage</strong> can address your technical and business needs for loyalty solutions.</p>
    <a href="#" class="button  large  hvr-sweep-to-right">CTA</a>
  </div>
</section>

<section class="band  band--tint">
  <div class="row  column">
    <h2 id="products">HALo Loyalty Software Solutions</h2>
    <p>HALo is a suite of centrally managed loyalty solutions that enable delivery of highly tailored programs and incentives across multiple systems. HALo is a proven solution with huge transactional scale typically seen only in global financial networks. Orchestrating those programs and their vast stores of data is HALo Core, the central component of the HALo Loyalty Management Solution. The following management tools and user interfaces extend the power of the HALo platform.</p>

    <h2 id="products">Core Loyalty Management</h2>
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
  </div>
</section>

<section class="band">
  <div class="row  column">
    <h2>HALo Mobile Solutions</h2>
    <div class="nugget-group">
      <div class="row">
        <div class="column">
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
  </div>
</section>

<section class="band">
  <div class="row  column">
    <h2>Promotions and Self-service</h2>
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
    <h2 id="integrations">System Interface</h2>
    <p>HALo integrates with all your existing transactional systems –  including gaming, hotel, dining, retail, spa and entertainment point of sale – using third-party certified gateways. No need for a high-cost rip-and-replace scenario or the limitations of a single management system. The House Advantage team can implement cutting-edge HALo solutions on your existing infrastructure.</p>
    <p>HALo system interface and integration technologies:</p>
    <ul>
      <li>Provide third-party systems with a simple, point-to-point API solution to communicate with HALo CORE.</li>
      <li>Add secure patron portals to your existing websites, providing access to loyalty data, offers and the patron profiles.</li>
      <li>Enable companies with information-bus platform investments, such as TIBCO, MULE, BizTalk to integrate through HALo Mesh.</li>
      <li>Can be deployed as a cloud-based solution to benefits from solutions such as Microsoft Azure and Amazon EC2.</li>
    </ul>
    <p>The HALo system interface solutions include the following tools:</p>
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
