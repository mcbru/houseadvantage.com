<?php
/**
 *
 * The template for displaying the Careers page
 *
 */

get_header(); ?>

<header class="hero  hero--biker" role="banner">
  <div class="row  column">
    <?php if ( get_field('hero_head') ) : ?>
      <h1 class="hero__text"><?php the_field('hero_head'); ?></h1>
    <?php endif; ?>
    <?php if ( get_field('hero_subhead') ) : ?>
      <p class="hero__text"><?php the_field('hero_subhead'); ?></p>
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

<section class="band">
  <div class="row">
    <p>Are you looking for a job with high impact? Work that’s relevant, stimulating and meaningful, where you can learn new, marketable skills and expand your professional growth across a variety of disciplines?</p>
    <p>House Advantage is a global company based in Las Vegas that develops leading edge loyalty program software that serves some of the world’s largest gaming and entertainment companies.  At House Advantage, you get to work closely with key marketing leaders who provide support and consultation on loyalty strategy, new product development, programs and direct patron campaigns.  We offer challenging, high-profile development opportunities for candidates looking to be part of something great.</p>
    <!-- <p>Inquire about joining the House Advantage team at <a href="mailto:talent@houseadv.com">talent@houseadv.com</a>.</p> -->
    <!-- <a href="mailto:talent@houseadv.com" class="button  hvr&#45;sweep&#45;to&#45;right">Inquire Today</a> -->
  </div>
</section>
<h2>Open Positions</h2>
<div class="[ band  band--small  band--tint ] ">
  <div class="row  column">
    <h3>Software Developer</h3>
    <p>The software engineer (developer) will be delivering software releases, which includes development of web applications, Windows thick client applications, Windows services, and Administrator clients for web and windows.</p>
    <h4>Requirements</h4>
    <ul>
      <li>5+ years using C#.NET to design, modify, and implement software</li>
      <li>Proficient with Microsoft SQL server architecture</li>
      <li>Proficient with Object Oriented programming</li>
      <li>Experience with Stored procedures, functions, and reports</li>
    </ul>
    <a href="mailto:brett.kline@houseadv.com" class="small  button  hvr-sweep-to-right">Submit Resumé</a>
  </div>
</div>
<div class="[ band  band--small ]">
  <div class="row  column">
    <h3>System Engineer</h3>
    <p>The Systems Engineer will need support the internal teams and external customers by troubleshooting stored procedures, mine data anomalies, run traces, interfaces and integration.  As the go-to contact, the system engineer will need to understand what the service layers are doing and why our HALo application behaves the way it does.</p>
    <h4>Requirements</h4>
    <ul>
      <li>Expert level in Microsoft SQL Server 2008 or greater</li>
      <li>Have a solid working knowledge of XML and messaging</li>
      <li>Highly familiar with complex database and OO concepts</li>
      <li>Experienced with client/server and IIS architectures</li>
      <li>Must have a casino marketing application background; or experience working in the slot/gaming industry</li>
    </ul>
    <a href="mailto:brett.kline@houseadv.com" class="small  button  hvr-sweep-to-right">Submit Resumé</a>
  </div>
</div>
<div class="[ band  band--small  band--tint ]">
  <div class="row  column">
    <h3>Product Manager</h3>
    <p>The Product Manager is the product expert, knowing the HALo software inside and out in order to best support the customer’s needs. This role will regularly be planning meetings and installations, explaining functionality, managing and being the point of contact for the customer, and is technical enough to troubleshoot the product for QA testing and if something goes wrong.</p>
    <h4>Requirements</h4>
    <ul>
      <li>Functional and practical knowledge of project management. 2 years of project management experience</li>
      <li>Demonstrated ability to train, document, troubleshoot, and describe promotions to customers</li>
      <li>Aptitude and experience with technical concepts involving VPN, CMS connections, certificates, and Microsoft SQL</li>
      <li>Must have a casino marketing application background; or experience working in the slot/gaming industry</li>
    </ul>
    <a href="mailto:brett.kline@houseadv.com" class="small  button  hvr-sweep-to-right">Submit Resumé</a>
  </div>
</div>


<?php get_footer();
