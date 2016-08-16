<?php
/**
 *
 * The template for displaying the Careers page
 *
 */

get_header(); ?>

<header class="hero" role="banner">
  <div class="row  column">
    <?php if ( get_field('hero_head') ) : ?>
      <h1><?php the_field('hero_head'); ?></h1>
    <?php endif; ?>
    <?php if ( get_field('hero_subhead') ) : ?>
      <p><?php the_field('hero_subhead'); ?></p>
    <?php endif; ?>
  </div>
  <div class="hero__image  hero__image--gray-4">
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

<section class="band  u-pb0">
  <div class="row  column">
    <p class="lede">Are you looking for a job with high impact? Work that’s relevant, stimulating and meaningful, where you can learn new, marketable skills and expand your professional growth across a variety of disciplines?</p>
    <p class="lede">House Advantage is a global company based in Las Vegas that develops leading edge loyalty program software that serves some of the world’s largest gaming and entertainment companies.  At House Advantage, you get to work closely with key marketing leaders who provide support and consultation on loyalty strategy, new product development, programs and direct patron campaigns.  We offer challenging, high-profile development opportunities for candidates looking to be part of something great.</p>
    <!-- <p>Inquire about joining the House Advantage team at <a href="mailto:talent@houseadv.com">talent@houseadv.com</a>.</p> -->
    <!-- <a href="mailto:talent@houseadv.com" class="button  hvr&#45;sweep&#45;to&#45;right">Inquire Today</a> -->
  </div>
</section>
<div class="[ band  band--small ] ">
  <div class="row  column">
    <h2>Open Positions</h2>
    <h3>Software Developer</h3>
    <p>The software engineer (developer) will be delivering software releases, which includes development of web applications, Windows thick client applications, Windows services, and Administrator clients for web and windows.</p>
    <h4>Requirements</h4>
    <ul>
      <li>5+ years using C# and .NET to design, modify, and implement software</li>
      <li>Proficient with Microsoft SQL server architecture</li>
      <li>Proficient with Object Oriented programming</li>
      <li>Experience with Stored procedures, functions, and reports</li>
    </ul>
    <a href="mailto:careers@houseadv.com" class="small  button  hvr-sweep-to-right  hvr-sweep-to-right--gold">Submit Resumé</a>
  </div>
</div>
<div class="[ band  band--small  band--tint ]">
  <div class="row  column">
    <h3>Accounting Clerk</h3>
    <h4>Requirements</h4>
    <ul>
      <li>Quick Books - 3–5 years Quick Books experience in AP, Invoicing, Payroll and light journal entires</li>
      <li>Small office and light transaction load but with fast pace and sense of urgency needed</li>
      <li>Willing to support in other areas when needed (internal reporting, compliance, expense reports, clerical everything).</li>
      <li>High level of skill in Excel and Microsoft Office required</li>
    </ul>
    <a href="mailto:careers@houseadv.com" class="small  button  hvr-sweep-to-right  hvr-sweep-to-right--gold">Submit Resumé</a>
  </div>
</div>
<div class="[ band  band--small ]">
  <div class="row  column">
    <h3>System Engineer</h3>
    <p>The Systems Engineer will support the internal teams and external customers by troubleshooting stored procedures, mine data anomalies, run traces, interfaces and integration.  As the go-to contact, the system engineer will need to understand what the service layers are doing and why our HALo application behaves the way it does.</p>
    <h4>Requirements</h4>
    <ul>
      <li>Expert level in Microsoft SQL Server 2008 or greater</li>
      <li>Have a solid working knowledge of XML and messaging</li>
      <li>Highly familiar with complex database and OO concepts</li>
      <li>Experienced with client/server and IIS architectures</li>
    </ul>
    <a href="mailto:careers@houseadv.com" class="small  button  hvr-sweep-to-right  hvr-sweep-to-right--gold">Submit Resumé</a>
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
    <a href="mailto:careers@houseadv.com" class="small  button  hvr-sweep-to-right  hvr-sweep-to-right--gold">Submit Resumé</a>
  </div>
</div>
<div class="[ band  band--small ]">
  <div class="row  column">
    <h3>IT Project Manager</h3>
    <p>The Project Manager is responsible for planning and executing projects to ensure completion on time and on budget. This will include gathering requirements from the business owners, writing clear and detailed functional specifications, scoping out the necessary work, writing RFPs, tracking the project development, communicating with the team, and effectively prioritizing and executing tasks.</p>
    <h4>Requirements</h4>
    <ul>
      <li>Solid understanding of SDLC</li>
      <li>Functional and hands-on knowledge of Agile project management. 3-5+ years experience in IT project management, including software development and delivery</li>
      <li>Exceptional communication skills and the ability to keep the team on track and motivated</li>
    </ul>
    <a href="mailto:careers@houseadv.com" class="small  button  hvr-sweep-to-right  hvr-sweep-to-right--gold">Submit Resumé</a>
  </div>
</div>
<div class="[ band  band--small  band--tint ]">
  <div class="row  column">
    <h3>IT Systems Applications Analyst</h3>
    <p>The IT Systems Applications Analyst is responsible for installing, maintaining, and troubleshooting various software applications and related hardware interfaces including PC’s, Mac’s, Network, VPN, Server, Wifi, and phone systems.</p>
    <h4>Requirements</h4>
    <ul>
      <li>3-5+ years hands-on technical experience with installing, configuring, troubleshooting and performing data migration for Mac and PC hardware and multiple software applications</li>
      <li>Knowledge of network connectivity, VPM, Wireless Networks, Cloud, VMWare, Virtual environments, physical and virtual servers</li>
      <li>Experience with SQL server/scripts, including database backups and restore</li>
    </ul>
    <a href="mailto:careers@houseadv.com" class="small  button  hvr-sweep-to-right  hvr-sweep-to-right--gold">Submit Resumé</a>
  </div>
</div>


<?php get_footer();
