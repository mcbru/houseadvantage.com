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
  <div class="hero__image  hero__image--red-1">
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
          <!-- <a role="button" class="large  button  hvr&#45;sweep&#45;to&#45;right  hvr&#45;sweep&#45;to&#45;right&#45;&#45;gold" href="solutions#services">learn more</a> -->
        </div>

        <div class="nugget__item  column">
          <span class="feature-icon  feature-icon--circle">
            <span class="icon  icon-2">
              <svg class="icon__item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118 118"><path d="M43.67,42.15a1.41,1.41,0,0,0,2,.16,1.65,1.65,0,0,0,.53-1.24,7,7,0,1,1,7,7A1.65,1.65,0,0,0,52,48.6a1.41,1.41,0,0,0,.16,2l7,7,7-7a3.56,3.56,0,0,1,5.09-.16,3.82,3.82,0,0,1,1.16,2.69v0.05a4.85,4.85,0,1,0,4.82-4.82H77.19a3.81,3.81,0,0,1-2.69-1.16,3.56,3.56,0,0,1,.16-5.09l7.06-7.06L65.19,18.57a8.75,8.75,0,0,0-12.38,0L36.45,34.92Z"/><path d="M76.18,43.68a1.41,1.41,0,0,0-.16,2,1.65,1.65,0,0,0,1.24.53,7,7,0,1,1-7,7A1.65,1.65,0,0,0,69.73,52a1.41,1.41,0,0,0-2,.16l-7,7,3.95,3.95a3.56,3.56,0,0,1,.16,5.09,3.81,3.81,0,0,1-2.69,1.16H62.05a4.84,4.84,0,1,0,4.82,4.82V74.13A3.82,3.82,0,0,1,68,71.44a3.56,3.56,0,0,1,5.09.16l10,10L99.44,65.19a8.75,8.75,0,0,0,0-12.38L83.24,36.62Z"/><path d="M42.36,74.44a1.41,1.41,0,0,0,.16-2,1.65,1.65,0,0,0-1.24-.53,7,7,0,1,1,7-7,1.65,1.65,0,0,0,.53,1.24,1.41,1.41,0,0,0,2-.16l6.79-6.79-7-7a3.56,3.56,0,0,1-.16-5.09,3.81,3.81,0,0,1,2.69-1.16h0.05a4.84,4.84,0,1,0-4.82-4.82v0.06a3.81,3.81,0,0,1-1.16,2.69,3.57,3.57,0,0,1-5.09-.16l-7.22-7.22L18.56,52.81a8.75,8.75,0,0,0,0,12.38L35.09,81.71Z"/><path d="M71.6,73.13a1.41,1.41,0,0,0-2-.16A1.65,1.65,0,0,0,69,74.21a7,7,0,1,1-7-7,1.65,1.65,0,0,0,1.24-.53,1.41,1.41,0,0,0-.16-2l-3.95-3.95-6.79,6.79a3.56,3.56,0,0,1-5.09.16,3.81,3.81,0,0,1-1.16-2.69V64.89a4.85,4.85,0,1,0-4.82,4.82h0.06A3.82,3.82,0,0,1,44,70.87,3.57,3.57,0,0,1,43.89,76l-7.28,7.28L52.81,99.44a8.76,8.76,0,0,0,12.38,0L81.55,83.08Z"/></svg>
            </span>
          </span>
          <h3 class="delta  min-height-small">Product Suite</h3>
          <p data-equalizer-watch>HALo is a suite of centrally managed loyalty solutions. It has the power to integrate your loyalty program across hotel, restaurant, point of sale, food and beverage, spa and entertainment systems in service of a coherent, enterprise-wide customer experience.</p>
          <!-- <a role="button" class="large  button  hvr&#45;sweep&#45;to&#45;right  hvr&#45;sweep&#45;to&#45;right&#45;&#45;gold" href="solutions#products">learn more</a> -->
        </div>

        <div class="nugget__item  column">
          <span class="feature-icon  feature-icon--circle">
            <span class="icon  icon-3">
              <svg class="icon__item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118 118"><circle cx="60.69" cy="47" r="2.74"/><path d="M89.91,82.24L67.29,39.06V24.31h0.06a4.29,4.29,0,1,0,0-8.58H50.64a4.29,4.29,0,1,0,0,8.58h0.06V39.06L28.09,82.25A18.19,18.19,0,0,0,26,89.85a12.32,12.32,0,0,0,1.79,6.38v0l0,0a12.41,12.41,0,0,0,10.6,6H79.58A12.44,12.44,0,0,0,92,89.84,18.28,18.28,0,0,0,89.91,82.24ZM52.56,57.13a2.74,2.74,0,0,0-2.74,2.74h-7L53.37,39.72V21.64H50.64a1.63,1.63,0,1,1,0-3.25H67.35a1.63,1.63,0,1,1,0,3.25H64.63V39.72L75.18,59.87H55.29A2.74,2.74,0,0,0,52.56,57.13ZM63.43,92.92a7.43,7.43,0,1,1,7.43-7.43A7.43,7.43,0,0,1,63.43,92.92ZM73.85,75a3.62,3.62,0,1,1,3.62-3.62A3.62,3.62,0,0,1,73.85,75Z"/><path d="M68.9,85.48A5.47,5.47,0,1,1,63.43,80,5.47,5.47,0,0,1,68.9,85.48Z"/><circle cx="73.85" cy="71.4" r="1.92"/></svg>
            </span>
          </span>
          <h3 class="delta  min-height-small">Integrated Solutions</h3>
          <p data-equalizer-watch>House Advantage offers certified tools for point-to-point and information-bus integrations, with deep expertise deploying HALo on legacy infrastructures to preserve your existing technology investments.</p>
          <!-- <a role="button" class="large  button  hvr&#45;sweep&#45;to&#45;right  hvr&#45;sweep&#45;to&#45;right&#45;&#45;gold" href="solutions#integrations">learn more</a> -->
        </div>
      </div>
  </div>
</section>

<section class="[ band  band--special  band--large ]">
  <div class="row column">
    <h2>House Advantage delivers demonstrable value.</h2>
    <p>House Advantage works with you to configure a loyalty solution that addresses your exact requirements. Depending on your needs, this tailored solution may combine all our offerings – software, strategy, implementation, training, system support and an ongoing collaborative partnership – or just one or two. We’ll partner with you to craft the mix that best suits your business.</p>
    <ul class="marker-diamond">
      <li>House Advantage offers the most advanced and comprehensive <strong>loyalty strategy platform</strong>.</li>
      <li>Our centralized platform integrates all patron spending and behavioral data across multiple touchpoints.</li>
      <li>Our <strong>loyalty software</strong> consolidates data in real time from disparate transactional and management systems.</li>
      <li>We stand with you through development, management and optimization of your loyalty program.  </li>
      <li>Deep <strong>system interface and integration expertise</strong> lets us deploy on legacy infrastructures to maximize value of existing systems.</li>
    </ul>
  </div>
</section>
<section class="band  band--tint">
  <div class="row">
    <div class="medium-4  medium-push-8  column">
      <span class="feature-icon  feature-icon--large">
        <span class="icon">
          <svg class="icon__item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 84.99 50.34"><path d="M43.09,1.48a1.93,1.93,0,0,0-1.21,0C34.69,3.76,26.13,9.63,26.13,24.65c0,10.59,5.4,18.38,15.6,22.54a2,2,0,0,0,.76.15,1.93,1.93,0,0,0,.75-0.15C53.45,43,58.84,35.24,58.84,24.65,58.84,9.63,50.27,3.76,43.09,1.48Zm4,24.69H44.49v2.17a2,2,0,1,1-4,0V26.17H37.87a2,2,0,0,1,0-4h2.62V19.09a2,2,0,0,1,4,0v3.08h2.63A2,2,0,0,1,47.12,26.17Z"/><path d="M59.34,50.34a47,47,0,0,1-17.61-3.14,2,2,0,0,1,0-3.7c8.7-3.55,13.11-9.89,13.11-18.84,0-10.12-4.36-16.63-13-19.36a2,2,0,0,1,0-3.81A33.1,33.1,0,0,1,51.61,0c18,0,30.33,7.1,32.9,19a21,21,0,0,1-7,20.46,15.88,15.88,0,0,0,3.17.32h0q0.68,0,1.37-.06a2,2,0,0,1,1.74,3.22C80.45,47.29,70.39,50.34,59.34,50.34ZM47.71,45a47.13,47.13,0,0,0,11.63,1.38,45.12,45.12,0,0,0,17.08-3A19.86,19.86,0,0,1,72,41.79a2,2,0,0,1,0-3.62c6.38-2.89,10.12-10.94,8.53-18.32C79.58,15.08,74.69,4,51.61,4c-0.67,0-1.62,0-2.74.13,5.32,3.36,10,9.46,10,20.52C58.84,33.57,55,40.5,47.71,45Z"/><path d="M25.58,50.34a57.74,57.74,0,0,1-6.94-.42c-8.36-1-14.89-3.63-17.48-7a2,2,0,0,1,1.74-3.21,16.23,16.23,0,0,0,4.55-.27A21.08,21.08,0,0,1,.36,19.51C1.38,14.08,6.3,1.32,29.76.09a2,2,0,0,1,.21,4C9.34,5.17,5.14,15.75,4.29,20.25c-1.39,7.35,2.31,15.06,8.6,17.91a2,2,0,0,1,0,3.62A19.81,19.81,0,0,1,8.6,43.3c7.4,3.15,21.88,4.8,33.13.19a2,2,0,1,1,1.52,3.7A47.47,47.47,0,0,1,25.58,50.34Z"/></svg>
        </span>
      </span>
    </div>
    <div class="medium-8  medium-pull-4  column">
      <h2 id="services">Advanced Loyalty Strategy Services</h2>
      <p><strong>House Advantage</strong> is your “always-on” partner for excellence implementing, managing, and optimizing your loyalty program. The breadth of our expertise allows us to deploy and configure the HALo solution to meet specific requirements and goals. Find out how <strong>House Advantage</strong> can address your technical and business needs for loyalty solutions.</p>
      <a href="contact" class="button  hvr-sweep-to-right  hvr-sweep-to-right--gold">Contact Us</a>
    </div>
  </div>
</section>

<section class="band">
  <div class="row  column">
    <div class="row">
      <div class="medium-4  column">
        <span class="feature-icon  feature-icon--large">
          <span class="icon">
            <svg class="icon__item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49.67 50.34"><path d="M20.83,1.66a23.85,23.85,0,0,0,0,47v-47Z"/><path d="M28.83,1.66v47A23.85,23.85,0,0,0,28.83,1.66Z"/></svg>
          </span>
        </span>
      </div>
      <div class="medium-8  column">
        <h2 id="products">HALo Loyalty Software Solutions</h2>
        <p>HALo is a suite of centrally managed loyalty solutions that enable delivery of highly tailored programs and incentives across multiple systems. HALo is a proven solution with huge transactional scale typically seen only in global financial networks. Orchestrating those programs and their vast stores of data is HALo Core, the central component of the HALo Loyalty Management Solution. The unique HALo architecture supports true “big data” processing with the speed to satisfy the demands of real-time transactional processing at massive scale. HALo stands alone in the loyalty software market, built from the ground up to deliver the capacity and performance to meet any system requirements. HALo can be launched in the cloud for rapid deployment opportunities, while reducing infrastructure costs. The following management tools and user interfaces further extend the power of the HALo platform.</p>
      </div>
    </div>

    <div class="[ band  band--small ]">
      <h3>Core Loyalty Management</h3>
      <div class="nugget-group">
        <div class="row  column">
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
      </div>
      <div class="nugget-group">
        <div class="row  small-up-1  medium-up-2">
          <div class="column" data-equalizer-watch>
            <div class="media-object">
              <div class="media-object-section">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-halo-core.png">
              </div>
              <div class="media-object-section">
                <h3 class="delta  red">HALo Core Advanced Marketing Solutions</h3>
                <p>The Advanced Marketing Solutions suite extends the functionality of HALo Core to give marketing teams powerful tools to manage earnings, trigger-based offers and messaging via direct mail, email and SMS, as well as a variety of system-managed loyalty capabilities.</p>
              </div>
            </div>
          </div>
          <div class="column" data-equalizer-watch>
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
          <div class="column" data-equalizer-watch>
            <div class="media-object">
              <div class="media-object-section">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-halo-promotions.png">
              </div>
              <div class="media-object-section">
                <h3 class="delta"><a href="halo-promotions">HALo Promotions</a></h3>
                <p>HALo Promotions allows property level promotions and events teams to directly manage their promotions calendar. Manage Achievers, or “Spend X, Get Y” style promotions.</p>
              </div>
            </div>
          </div>
          <div class="column" data-equalizer-watch>
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
          <div class="column" data-equalizer-watch>
            <div class="media-object">
              <div class="media-object-section">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-halo-awards.png">
              </div>
              <div class="media-object-section">
                <h3 class="delta  red">HALo Awards</h3>
                <p>HALo Awards provides awards management for patrons who satisfy user-configurable redemption criteria. It allows management of award inventory by location, limits award availability by on-site and drop-shippable inventory, and caps award availability based on event budget.</p>
              </div>
            </div>
          </div>
          <div class="column" data-equalizer-watch>
            <div class="media-object">
              <div class="media-object-section">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-halo-lounge.png">
              </div>
              <div class="media-object-section">
                <h3 class="delta  red">HALo Lounge</h3>
                <p>HALo Lounge allows users to define locations within an enterprise or integrated resort which may be accessed either by patrons who qualify based on their status or by redeeming a HALo Core managed currency, such as points, comp value or credits. Employees may manage access via PC, laptop or tablet, granting access to patrons through prequalification or redemption.</p>
              </div>
            </div>
          </div>
          <div class="column" data-equalizer-watch>
            <div class="media-object">
              <div class="media-object-section">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-halo-docstore.png">
              </div>
              <div class="media-object-section">
                <h3 class="delta  red">HALo DocStore</h3>
                <p>HALo DocStore allows users to associate patron photos, signatures and scanned document images to patron profiles, along with other documents such as images, PDFs and spreadsheets in support of patron enrollment, documentation for reimbursements and program management.</p>
              </div>
            </div>
          </div>
          <div class="column" data-equalizer-watch>
            <div class="media-object">
              <div class="media-object-section">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-halo-retail-connect.png">
              </div>
              <div class="media-object-section">
                <h3 class="delta  red">HALo Retail Connect</h3>
                <p>HALo Retail Connect provides a point-of-sale interface for patron lookup, balance lookup, and offer lookup and redemption, as well as giving employees access to comp buckets and discretionary comp lookup and redemption. In addition, it offers the integrated resort a POS tool to issue trigger awards based on retail transactions for food and beverage, hotel, spa, or events and shows.</p>
              </div>
            </div>
          </div>
          <div class="column" data-equalizer-watch>
            <div class="media-object">
              <div class="media-object-section">
                <!-- <img src="http://placehold.it/60x60" alt="" /> -->
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-halo-expedition.png">
              </div>
              <div class="media-object-section">
                <h3 class="delta  red">HALo Expedition</h3>
                <p>HALo Expedition is a game engine primarily focused primarily on high-frequency patrons, with components for destination players. Patrons progress across a board, and win awards when they land on a board space, as well as an additional award for traversing the entire board.</p>
              </div>
            </div>
          </div>
          <div class="column" data-equalizer-watch>
            <div class="media-object">
              <div class="media-object-section">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-halo-sportpix.png">
              </div>
              <div class="media-object-section">
                <h3 class="delta  red">HALo SportPix</h3>
                <p>The HALo SportPix module works with the Promotion Manager System. With a SportPix promotion, a property can set up a sporting event or season, using the Kiosk system to allow patrons to directly and interactively participate in the SportPIX promotions.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="[ band  band--small ]">
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
                <p>HALo Mobile provides mobile access to all your internal patron management functions – securely, enterprise-wide – on both iOS and Android.</p>
              </div>
            </div>
          </div>
          <div class="medium-6  column">
            <div class="media-object">
              <div class="media-object-section">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-halo-mobile.png">
              </div>
              <div class="media-object-section">
                <h3 class="delta  red">HALo Mobile Enrollment</h3>
                <p>With HALo Mobile Enrollment, patrons easily enroll into loyalty programs simply by scanning a drivers’ license, minimizing data entry.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <h3>Self-service</h3>
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
        <p>HALo integrates with all your existing transactional systems – including gaming, hotel, dining, retail, spa and entertainment point of sale – using third-party certified gateways. We extend the life of your existing technology investments. The HA team can implement cutting-edge HALo solutions on your existing infrastructure; no need for a high-cost rip-and-replace scenario or the limitations of a single management system.</p>
        <p>HALo system interface and integration technologies:</p>
        <ul class="marker-diamond">
          <li>Provide third-party systems with a simple, point-to-point API solution to communicate with HALo CORE.</li>
          <li>Add secure patron portals to your existing websites, providing access to loyalty data, offers and the patron profiles.</li>
          <li>Enable companies with information-bus platform investments, such as TIBCO, MULE, BizTalk to integrate through HALo Mesh.</li>
          <li>Allow you to launch HALo in the cloud for rapid deployment opportunities and reduced infrastructure costs.</li>
        </ul>
        <p>The HALo system interface solutions include the following tools:</p>
      </div>
    </div>
    <div class="[ band  band--small ]">
      <div class="nugget-group">
        <div class="row  small-up-1  medium-up-2">
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
  </div>
</section>



<?php get_footer();
