<?php
/**
 *
 * The template for displaying the Solutions page
 *
 */

get_header(); ?>

<header class="hero  hero--gray-2" role="banner">
  <div class="row  column  text-left">
    <?php if ( get_field('hero_head') ) : ?>
      <h1 class="hero__text"><?php the_field('hero_head'); ?></h1>
    <?php endif; ?>
    <?php if ( get_field('hero_subhead') ) : ?>
      <p class="hero__text"><?php the_field('hero_subhead'); ?></p>
      <!-- <a role="button" class="large  button" href="#">CTA</a> -->
    <?php endif; ?>
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
    <ul>
      <li>We offer the industry’s most advanced and comprehensive loyalty strategy platform.</li>
      <li>As your trusted partner, we stand with you in the setup, management and optimization of your loyalty programs.  </li>
      <li>We deploy a centralized, card-based program that integrates all your patron spending and behavioral data across multiple touch points.</li>
      <li>Our loyalty software solutions are able to consolidate data from disparate transactional and management systems across the enterprise, all in real-time.</li>
      <li>We provide deep system interface and integration expertise to deploy our solution on legacy infrastructures to leverage the value of existing systems.</li>
    </ul>
    <p>House Advantage works with you to customize a loyalty solution that addresses your unique requirements, opportunities and programs. Depending on your loyalty program needs, your personalized solution may combine elements of each of the above capabilities, or it may focus on one or two. In any case, we’ll partner with you to define and craft the exact mix best suited for your business.</p>
    <h2 id="services">Advanced Loyalty Strategy Services</h2>
    <p>With a full range of training, strategy, and consulting services, House Advantage is your “always-on” partner for excellence in all aspects of loyalty and customer engagement. The breadth of our expertise implementing, managing, and optimizing loyalty solutions, allows us to deploy and customize each HALo solution to meet specific requirements and goals. House Advantage offers the latest in thought leadership, best practices, and strategic perspectives to support the success of your loyalty program and marketing activities. Find out how our strategy and consulting services can address your technical and business needs.</p>
    <a href="#" class="button  large  hvr-sweep-to-right">CTA</a>
  </div>
</section>

<section class="band  band--tint">
  <div class="row  column">
      <h2 id="products">HALo Loyalty Software Solutions</h2>
      <p><strong>HALo</strong> is a suite of centrally managed loyalty solutions that enable delivery of tailored programs and incentives across multiple systems to directly reach targeted patron segments and drive successful programs in real time, without the need to standardize on a single system or platform. HALo is a proven solution with huge geographic and transactional scale, whose equivalents are seen only in the largest global financial networks.</p>
      <p>The following management tools and user interfaces extend the power of the HALo loyalty platform.</p>
      <h3>Program Management Tools</h3>
      <div class="nugget-group">
        <div class="row">
          <div class="medium-3  column">
            <img class="thumbnail" src="http://placehold.it/250x150">
          </div>
          <div class="medium-9  column">
            <h4>HALo Core</h4>
            <p class="nugget--text__medium">HALo Core is the heart of the solution, delivering the fundamental tools to elevate loyalty programs from existing transactional and management systems. It enables a highly configurable, coherent, and centrally managed loyalty platform that provides the ability to configure the earning and redeeming of loyalty currency across single or multiple locations. HALo CORE provides the tools to execute and manage a loyalty program that will engage patrons in dynamic ways – creating a universal loyalty experience.</p>
            <!-- <a href="halo&#45;promotions" class="button  hvr&#45;sweep&#45;to&#45;right">CTA</a> -->
          </div>
        </div>
        <div class="row">
          <div class="medium-4  column" data-equalizer-watch>
            <img class="thumbnail" src="http://placehold.it/250x150">
            <h4>HALo Promotions</h4>
            <p class="nugget--text__medium">HALo Promotions automates the creation, execution and management of promotional campaigns.</p>
            <a href="halo-promotions" class="button  hvr-sweep-to-right">CTA</a>
          </div>
          <div class="medium-4  column" data-equalizer-watch>
            <img class="thumbnail" src="http://placehold.it/250x150">
            <h4>HALo Offers</h4>
            <p class="nugget--text__medium">HALo Offers allows marketing teams to create and publish targeted offers directly into HALo, allowing patrons to view and redeem their offers wherever and whenever they need.</p>
            <a href="halo-offers" class="button  hvr-sweep-to-right">CTA</a>
          </div>
          <div class="medium-4  column" data-equalizer-watch>
            <img class="thumbnail" src="http://placehold.it/250x150">
            <h4>HALo Event Management</h4>
            <p class="nugget--text__medium">HALo Event Management allows local promotions and events teams to schedule events, and add patrons to these events through a predefined criteria.</p>
            <a href="halo-event-management" class="button  hvr-sweep-to-right">CTA</a>
          </div>
        </div>
      </div>
      <h3>User Interfaces</h3>
      <div class="nugget-group">
        <div class="row">
          <div class="medium-6  column" data-equalizer-watch>
            <img class="thumbnail" src="http://placehold.it/250x150">
            <h4>HALo Mobile</h4>
            <p class="nugget--text__medium">HALo Mobile provides mobile access to all internal patron management functions – securely, enterprise-wide – on iOS and Android. House Advantage also offers <strong>Mobile Enrollment</strong> capabilities to allow easy enrollment of patrons into loyalty programs by scanning drivers’ licenses to streamline the data entry process.</p>
            <a href="halo-mobile" class="button  hvr-sweep-to-right">CTA</a>
          </div>
          <div class="medium-6  column" data-equalizer-watch>
            <img class="thumbnail" src="http://placehold.it/250x150">
            <h4>HALo Kiosk</h4>
            <p class="nugget--text__medium">HALo Kiosk empowers loyalty program member self-service at kiosks, or via mobile apps and secure web portals.</p>
            <a href="halo-kiosk" class="button  hvr-sweep-to-right">CTA</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="band">
    <div class="row  column">
      <h2 id="integrations">System Interface and Integration Technologies</h2>
      <p>HALo integrates with existing technology platforms – everything from gaming to hotel and dining to retail point of sale. We do this using third-party certified gateways, thus eliminating a high cost rip-and-replace scenario and the need to consolidate on a single transactional or management system. The House Advantage team has deep integration expertise and can successfully implement cutting-edge HALo solutions on legacy infrastructures.</p>
      <p>HALo system interface and integration technologies:</p>
      <ul>
        <li>Provide third party systems with an easy to implement point-to-point API solution to communicate with HALo CORE.</li>
        <li>Add secure patron portals to your existing websites, providing access to loyalty program data, programs, offers, and the patron profile.</li>
        <li>Enable companies with significant information-bus platform investments, such as TIBCO, MULE, BizTalk and others, to directly integrate with HALo CORE through HALo Mesh.</li>
        <li>Allow HALo to be deployed as a cloud-based solution for all the benefits associated with solutions such as Microsoft Azure and Amazon EC2.</li>
      </ul>
      <p>The HALo integration solutions include the following tools:</p>
      <div class="nugget-group">
        <div class="row">
          <div class="medium-4  column" data-equalizer-watch>
            <img class="thumbnail" src="http://placehold.it/250x150">
            <h3>HALo Web</h3>
            <p class="nugget--text__short">HALo Web allows you to add secure patron loyalty program portals to your existing web properties.</p>
            <a href="halo-web" class="button  hvr-sweep-to-right">CTA</a>
          </div>
          <div class="medium-4  column" data-equalizer-watch>
            <img class="thumbnail" src="http://placehold.it/250x150">
            <h3>HALo Open Gateway</h3>
            <p class="nugget--text__short">HALo Open Gateway provides a simplified API for third-party access to patron information and transactional data.</p>
            <a href="halo-open-gateway" class="button  hvr-sweep-to-right">CTA</a>
          </div>
          <div class="medium-4  column" data-equalizer-watch>
            <img class="thumbnail" src="http://placehold.it/250x150">
            <h3>HALo Mesh</h3>
            <p class="nugget--text__short">HALo Mesh enables information bus platforms such as TIBCO and MULE to directly integrate with HALo Core.</p>
            <a href="halo-mesh" class="button  hvr-sweep-to-right">CTA</a>
          </div>
        </div>
        <div class="row">
          <div class="medium-4  column" data-equalizer-watch>
            <img class="thumbnail" src="http://placehold.it/250x150">
            <h3>HALo CRMX Gateway</h3>
            <p class="nugget--text__short">HALo CRMX Gateway allows HALo to issue awards in response to triggered promotions or redeemed offers (for use with casino loyalty solutions).</p>
            <a href="halo-crmx-gateway" class="button  hvr-sweep-to-right">CTA</a>
          </div>
          <div class="medium-4  column" data-equalizer-watch>
            <img class="thumbnail" src="http://placehold.it/250x150">
            <h3>HAS2S Gateway</h3>
            <p class="nugget--text__short">The HAS2S Gateway is the primary integration point for ACSC systems without the Bally Universal Gateway (for use with casino loyalty solutions).</p>
            <a href="has2s-gateway" class="button  hvr-sweep-to-right">CTA</a>
          </div>
          <div class="medium-4  column" data-equalizer-watch>
            <img class="thumbnail" src="http://placehold.it/250x150">
            <h3>HALo Cloud</h3>
            <p class="nugget--text__short">HALo Cloud enables deployed of HALo in a cloud-based environment such as Microsoft Azure or Amazon EC2.</p>
            <a href="halo-cloud" class="button  hvr-sweep-to-right">CTA</a>
          </div>
        </div>
      </div>
    </div>
  </section>




<?php get_footer();
