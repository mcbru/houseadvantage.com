<?php
/*
Template Name: About Us
*/
get_header(); ?>

<div id="front-hero" role="banner">
  <div class="marketing">
    <h1>House Advantage is a loyalty strategy company with deep operational and strategic expertise in managing enterprise-level loyalty marketing programs.</h1>
    <?php /*
    <h4 class="subheader"><?php bloginfo( 'description' ); ?></h4>
     */ ?>
    <a role="button" class="large  button  button--hero" href="solutions"><i class="fa  fa-lightbulb-o"></i>see our solutions</a>

    <!-- <div id="watch"> -->
    <!--   <section id="stargazers"> -->
    <!--     <a href="https://github.com/olefredrik/foundationpress">1.5k stargazers</a> -->
    <!--   </section> -->
    <!--   <section id="twitter"> -->
    <!--     <a href="https://twitter.com/olefredrik">@olefredrik</a> -->
    <!--   </section> -->
    <!-- </div> -->
  </div>

</div>

<?php do_action( 'foundationpress_before_content' ); ?>
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
<?php do_action( 'foundationpress_after_content' ); ?>

<!-- <div class="section&#45;divider"> -->
<!--   <hr /> -->
<!-- </div> -->


<section class="[ band  band--special ]  text-center">
  <div class="row">
    <!-- <header> -->
      <h2>What We Do</h2>
      <p>In today’s highly dynamic resort, leisure and entertainment markets, operators like you are looking for meaningful ways to build stronger customer bonds and drive revenue profitably. Enhancing the customer experience through a comprehensive loyalty proposition is a proven way of ensuring you gain that competitive edge and deliver bottom line results.</p>
      <!-- <h4>Foundation is the professional choice for designers, developers and teams. <br /> WordPress is by far, <a href="http://trends.builtwith.com/cms">the world's most popular CMS</a> (currently powering 38% of the web).</h4> -->
    <!-- </header> -->

  <div class="small-12  medium-4  columns">
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

  <div class="small-12  medium-4  columns">
    <div class="pull-quote  pull-quote--vanilla">
      <p>Differentiate your loyalty program with the power and flexibility of HALo, an advanced loyalty solution that can help you boost customer engagement and gain competitive advantage in highly dynamic markets.</p>
    </div>
  </div>

  <div class="small-12  medium-4  columns">
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
      <div class="nugget__item  small-12  medium-4  columns">
        <h3>Advanced Loyalty Strategy Services</h3>
        <p>House Advantage offers deep-bench strength in loyalty marketing and technology consulting services to support your loyalty programs with the latest in best practices, IT support, and strategic perspectives.</p>
        <a role="button" class="hollow  large  button" href="#">learn more</a>
      </div>
      <div class="nugget__item  small-12  medium-4  columns">
        <h3>Loyalty Software Solutions</h3>
        <p>HALo is a suite of centrally managed loyalty solutions that integrate hotel, restaurant, point of sale, food and beverage, and entertain systems in service of a coherent, enterprise-wide customer experience.</p>
        <a role="button" class="hollow  large  button" href="#">learn more</a>
      </div>
      <div class="nugget__item  small-12  medium-4  columns">
        <h3>System Interface and Integration Technologies</h3>
        <p>House Advantage offers certified tools for point-to-point and information-bus integrations, with deep expertise deploying HALo on legacy infrastructures to preserve your existing technology investments.</p>
        <a role="button" class="hollow  large  button" href="#">learn more</a>
      </div>
    </div>
  </div>
</section>



<?php get_footer();
