<?php
/**
 *
 * The template for displaying the Solutions page
 *
 */

get_header(); ?>

<header class="hero  hero--abstract-1" role="banner">
  <div class="row  column">
    <h1 class="hero__text">Pick a Winner</h1>
    <p class="hero__text">House Advantage loyalty marketing solutions provide the world’s largest and most innovative leading resort, leisure and entertainment companies with the tools to increase customer engagement, drive revenue, and gain competitive advantage in fast-moving, highly competitive markets.
    <br>
    <strong>At House Advantage, we deliver value.</strong>
    </p>
    <a role="button" class="large  button  button--hero" href="#"><i class="fa  fa-lightbulb-o"></i>CTA</a>

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
  <div class="row  column">
      <h2 id="products">Loyalty Software Solutions</h2>
      <p><strong>HALo</strong> is a suite of centrally managed loyalty solutions that enable delivery of tailored programs and incentives across multiple platforms to directly reach targeted customer segments and drive successful promotions in real time, without the need to standardize on single a system or platform. HALo is a proven solution with huge geographic and transactional scale, whose equivalents are only seen in the largest global financial networks.</p>
      <p><strong><a href="halo-core.html">HALo CORE</a></strong> is the heart of the solution, delivering the fundamental tools to elevate loyalty marketing from existing transactional and management systems. It enables a highly configurable, coherent, and centrally managed loyalty platform that allows customers to earn and redeem rewards across single or multiple properties. HALo CORE provides the tools to execute and manage promotions that engage customers in dynamic ways and create a universal loyalty experience.  HALo CORE is licensed across a geographically diverse set of markets via state and local regulatory bodies.</p>
      <p>Additional capabilities and products extend the power of the HALo loyalty technologies.</p>

  <div class="small-12  medium-4  column">
    <div class="nugget-group  text-left">
      <div class="nugget__item">
        <h3>Seamless Integration</h3>
        <p>Extend the value of your current systems by seamlessly integrating HALo loyalty solutions with existing management systems.</p>
      </div>

      <div class="nugget__item">
        <h3>Real-Time</h3>
        <p>Incorporate patron data in real-time across all existing transactional systems to provide a consistent, universal loyalty experience.</p>
      </div>

      <div class="nugget__item">
        <h3>Expand Value</h3>
        <p>Expand the value proposition of your program by engaging your members across all amenities and touch points, in real time.</p>
      </div>
    </div>
  </div>

  <div class="small-12  medium-4  column">
    <div class="pull-quote  pull-quote--vanilla">
      <p>Differentiate your loyalty program with the power and flexibility of HALo, an advanced loyalty solution that can help you boost customer engagement and gain competitive advantage in highly dynamic markets.</p>
    </div>
  </div>

  <div class="small-12  medium-4  column">
    <div class="nugget-group  text-left">
      <div class="nugget__item">
        <h3>On-Demand</h3>
        <p>Empower customers to redeem offers and rewards and manage their own experiences through a variety of self-service interfaces.</p>
      </div>

      <div class="nugget__item">
        <h3>Advanced Capabilities</h3>
        <p>Enable the creation and execution of promotions, events and campaigns through a suite of advanced loyalty marketing capabilities.</p>
      </div>

      <div>
        <h3>Large CTA Here</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
  </div>

    <!-- <div class="why&#45;foundation"> -->
    <!--   <a href="/kitchen&#45;sink">See what's in Foundation out of the box →</a> -->
    <!-- </div> -->

  </div>
</section>

<section class="[ band  band--special-dark ]  text-center">
  <div class="row">
    <div class="nugget-group">
      <div class="nugget__item  small-12  medium-4  column">
        <h3>Advanced Loyalty Strategy Services</h3>
        <p>House Advantage offers deep-bench strength in loyalty marketing and technology consulting services to support your loyalty programs with the latest in best practices, IT support, and strategic perspectives.</p>
        <a role="button" class="hollow  large  button" href="#">learn more</a>
      </div>
      <div class="nugget__item  small-12  medium-4  column">
        <h3>Loyalty Software Solutions</h3>
        <p>HALo is a suite of centrally managed loyalty solutions that integrate hotel, restaurant, point of sale, food and beverage, and entertain systems in service of a coherent, enterprise-wide customer experience.</p>
        <a role="button" class="hollow  large  button" href="#">learn more</a>
      </div>
      <div class="nugget__item  small-12  medium-4  column">
        <h3>System Interface and Integration Technologies</h3>
        <p>House Advantage offers certified tools for point-to-point and information-bus integrations, with deep expertise deploying HALo on legacy infrastructures to preserve your existing technology investments.</p>
        <a role="button" class="hollow  large  button" href="#">learn more</a>
      </div>
    </div>
  </div>
</section>



<?php get_footer();
