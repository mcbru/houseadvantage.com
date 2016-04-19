<?php
/**
 *
 * The template for displaying the Solutions page
 *
 */

get_header(); ?>

<header class="hero  hero--pattern-1" role="banner">
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
    <h2 id="services">Advanced Loyalty Strategy Services</h2>
    <p>With a full range of training, professional, and consulting services, House Advantage is your strategic partner for ongoing excellence in loyalty marketing. We have over a century of combined experience implementing, managing, and optimizing loyalty solutions, with the expertise to deploy and customize your HALo solution to meet your specific requirements. House Advantage offers the latest in thought leadership, best practices, and strategic perspectives to support the success of your loyalty marketing and campaign activities. Find out how our customized professional services can address your technical, business, and strategic needs.</p>
    <a href="#" class="button  large  hvr-sweep-to-right">CTA</a>
  </div>
</section>

<section class="band">
  <div class="row  column">
      <h2 id="products">Loyalty Software Solutions</h2>
      <p><strong>HALo</strong> is a suite of centrally managed loyalty solutions that enable delivery of tailored programs and incentives across multiple platforms to directly reach targeted customer segments and drive successful promotions in real time, without the need to standardize on single a system or platform. HALo is a proven solution with huge geographic and transactional scale, whose equivalents are only seen in the largest global financial networks.</p>
      <p><strong><a href="halo-core">HALo CORE</a></strong> is the heart of the solution, delivering the fundamental tools to elevate loyalty marketing from existing transactional and management systems. It enables a highly configurable, coherent, and centrally managed loyalty platform that allows customers to earn and redeem rewards across single or multiple properties. HALo CORE provides the tools to execute and manage promotions that engage customers in dynamic ways and create a universal loyalty experience.  HALo CORE is licensed across a geographically diverse set of markets via state and local regulatory bodies.</p>
      <p>Additional capabilities and products extend the power of the HALo loyalty technologies.</p>
      <div class="nugget-group">
        <div class="row">
          <div class="medium-4  column  text-center" data-equalizer-watch>
            <img class="thumbnail" src="http://placehold.it/250x150">
            <h3>HALo Promotions</h3>
            <p class="nugget--text__medium">HALo Promotions automates the creation, execution and management of promotional campaigns.</p>
            <a href="halo-promotions" class="button  hvr-sweep-to-right">CTA</a>
          </div>
          <div class="medium-4  column  text-center" data-equalizer-watch>
            <img class="thumbnail" src="http://placehold.it/250x150">
            <h3>HALo Offers</h3>
            <p class="nugget--text__medium">Halo Offers allows marketing teams to publish targeted offers directly into HALo, allowing customers to view and redeem their offers wherever and whenever they need.</p>
            <a href="halo-offers" class="button  hvr-sweep-to-right">CTA</a>
          </div>
          <div class="medium-4  column  text-center" data-equalizer-watch>
            <img class="thumbnail" src="http://placehold.it/250x150">
            <h3>HALo Mobile</h3>
            <p class="nugget--text__medium">HALo Mobile provides mobile access to all player management functions – securely, enterprise-wide – on iOS and Android.</p>
            <a href="halo-mobile" class="button  hvr-sweep-to-right">CTA</a>
          </div>
        </div>
        <div class="row">
          <div class="medium-4  column  medium-offset-2  text-center" data-equalizer-watch>
            <img class="thumbnail" src="http://placehold.it/250x150">
            <h3>HALo Kiosk</h3>
            <p class="nugget--text__medium">HALo Kiosk empowers member self-service at kiosks, or via mobile apps and secure web portals.</p>
            <a href="halo-kiosk" class="button  hvr-sweep-to-right">CTA</a>
          </div>
          <div class="medium-4  column  text-center  end" data-equalizer-watch>
            <img class="thumbnail" src="http://placehold.it/250x150">
            <h3>HALo Event Management</h3>
            <p class="nugget--text__medium">HALo Event Management allows local promotions and events teams to schedule events, and add customers to these events, either through lists or criteria.</p>
            <a href="halo-event-management" class="button  hvr-sweep-to-right">CTA</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="band  band--tint">
    <div class="row  column">
      <h2 id="integrations">System Interface and Integration Technologies</h2>
      <p>HALo integrates with existing technology platforms -- from casino to hotel to point of sale -- using third-party certified gateways, without a rip-and-replace scenario or the need to consolidate on a single transactional or management system. The House Advantage team has deep integration expertise and can successfully implement cutting-edge HALo solutions on legacy infrastructures.</p>
      <p>The HALo solution includes the following integration tools:</p>
      <div class="nugget-group  nugget-group--justify">
        <div class="row">
          <div class="medium-4  column  text-center" data-equalizer-watch>
            <img class="thumbnail" src="http://placehold.it/250x150">
            <h3>HALo Open Gateway</h3>
            <p class="nugget--text__short">HALo Open Gateway provides a simplified API for third-party access to player information and transactional data.</p>
            <a href="halo-open-gateway" class="button  hvr-sweep-to-right">CTA</a>
          </div>
          <div class="medium-4  column  text-center" data-equalizer-watch>
            <img class="thumbnail" src="http://placehold.it/250x150">
            <h3>HALo CRMX Gateway</h3>
            <p class="nugget--text__short">HALo CRMX Gateway allows HALo to issue awards in response to triggered promotions or redeemed offers.</p>
            <a href="halo-crmx-gateway" class="button  hvr-sweep-to-right">CTA</a>
          </div>
          <div class="medium-4  column  text-center" data-equalizer-watch>
            <img class="thumbnail" src="http://placehold.it/250x150">
            <h3>HALo Mesh</h3>
            <p class="nugget--text__short">HALo Mesh enables information bus platforms such as TIBCO and MULE to directly integrate with HALo Core.</p>
            <a href="halo-mesh" class="button  hvr-sweep-to-right">CTA</a>
          </div>
        </div>
        <div class="row">
          <div class="medium-4  column  text-center" data-equalizer-watch>
            <img class="thumbnail" src="http://placehold.it/250x150">
            <h3>HAS2S Gateway</h3>
            <p class="nugget--text__short">The HAS2S Gateway is the primary integration point for ACSC systems without the Bally Universal Gateway.</p>
            <a href="has2s-gateway" class="button  hvr-sweep-to-right">CTA</a>
          </div>
          <div class="medium-4  column  text-center" data-equalizer-watch>
            <img class="thumbnail" src="http://placehold.it/250x150">
            <h3>HALo Cloud</h3>
            <p class="nugget--text__short">HALo Cloud enables deployed of HALo in a cloud-based environment such as Microsoft Azure or Amazon EC2.</p>
            <a href="halo-cloud" class="button  hvr-sweep-to-right">CTA</a>
          </div>
          <div class="medium-4  column  text-center" data-equalizer-watch>
            <img class="thumbnail" src="http://placehold.it/250x150">
            <h3>HALo Web</h3>
            <p class="nugget--text__short">HALo Web allows you to add secure customer loyalty program portals to your existing web properties.</p>
            <a href="halo-web" class="button  hvr-sweep-to-right">CTA</a>
          </div>
        </div>
      </div>
    </div>
  </section>




<?php get_footer();
