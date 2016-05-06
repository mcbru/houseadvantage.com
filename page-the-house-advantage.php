<?php
/**
 *
 * The template for displaying the The House Advantage page
 *
 */

 get_header(); ?>
 <?php get_template_part( 'template-parts/featured-image' ); ?>
<header class="hero" role="banner">
  <div class="row  column">
    <?php if ( get_field('hero_head') ) : ?>
      <h1><?php the_field('hero_head'); ?></h1>
    <?php endif; ?>
    <?php if ( get_field('hero_subhead') ) : ?>
      <p><?php the_field('hero_subhead'); ?></p>
    <?php endif; ?>
  </div>
  <div class="hero__image  hero__image--advantage">
  </div>
</header>

<div id="stat-animate" class="[ band  band--special  band--special-dark ]">
  <div class="row  column  text-center" data-equalizer>
    <h2>The HALo Platform</h2>
    <p class="lede">Our suite of loyalty software solutions, HALo, is a proven loyalty management platform with over 120 installations across 70 markets worldwide. It supports over 100 million patron profiles. Today, the ever-evolving HALo platform:</p>
    <div class="medium-6  large-3  column" data-equalizer-watch>
      <span class="feature-icon  feature-icon--stat">
        <span class="icon">
          <svg class="icon__item--purple" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118 118"><path d="M99.54,83.87A43.76,43.76,0,0,1,93.1,94.55a6.39,6.39,0,0,0-3.41-1.2c-2.1-.59-3.12-2-4.19-2.37-1.34-.45-2.7,0-4.06,0a1.27,1.27,0,0,1-1.24-.48c-0.25-.5-5.7-4.19-5.86-5.51s-1-2.13-1.64-3.16V75.62c0-.26.77-0.11,1.41-1.85a8.52,8.52,0,0,0,.59-1.21,2.54,2.54,0,0,0,.21-1.6,0.91,0.91,0,0,0,.67.38c0.47,0,1.25-.51,2.26-2.71,0.63-1.61.47-2.28,0.82-2.91,0,0,1.85-3,1.31-5.38S78.29,58.58,78,58.58h0a31,31,0,0,1-.4-3.32c0-1.27-.24-4.11-0.28-5.69A18.3,18.3,0,0,0,75.09,43a25.27,25.27,0,0,0-2.89-3.28c-0.91-.63-0.83-1.54-2.06-2.33a16.71,16.71,0,0,0-2.37-1.6,10.24,10.24,0,0,1-2-1.12c-1-.63-0.36-1.63-1.9-1.82-0.88-.11-1.27-0.21-1.66-0.21-0.84,0-1.6.45-2.45,0.45-1,0-2-.22-3-0.22a6.92,6.92,0,0,0-3.45,1c-0.87.51-1.66,1.5-3.24,2.49a7.41,7.41,0,0,0-2.53,2.06c-1.11,1.23-1.58,1.62-2.65,2.81a12.22,12.22,0,0,0-3,6.49A10.86,10.86,0,0,0,41.69,51a14.71,14.71,0,0,1,.26,2.72c0,0.91-.08,5.22-0.08,5.22a1.85,1.85,0,0,0-.46-0.06c-0.65,0-1.72.34-1.24,2.71,0.26,1.23.79,2.93,1,3.64a8.93,8.93,0,0,1,.32,2.06,3,3,0,0,0,2.89,3,25.07,25.07,0,0,0,1,3.27,15,15,0,0,0,2.06,3.6c0.48,2.38,0,4.84,0,7.24a3.37,3.37,0,0,0-1,0,1.24,1.24,0,0,0-1.09.78,27.31,27.31,0,0,1-3,5.06c-0.71.91-9.33,1.67-13.33,3.29a33.67,33.67,0,0,0-3.65,1.78A44,44,0,1,1,99.54,83.87Z"/></svg>
        </span>
      </span>
      <span id="number-profiles" class="stat">0</span>
      <p>Manages over 100 million patron profiles on behalf of their customers.</p>
    </div>
    <div class="medium-6  large-3  column" data-equalizer-watch>
      <span class="feature-icon  feature-icon--stat">
        <span class="icon">
          <svg class="icon__item--purple" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118 118"><path d="M73,41.09a6.43,6.43,0,0,0-2.59-2.77l-0.12-.07h0l-0.14-.09,0.05,0-0.93-.46h0l-0.17-.08h0a22.55,22.55,0,0,0-6.72-1.84l-0.17,0-1.05-.12a35.23,35.23,0,0,0-6.3,0l-1.05.12A22.34,22.34,0,0,0,47,37.63h0l-0.12.06-0.05,0-0.05,0-0.87.44,0.05,0-0.27.17a6.33,6.33,0,0,0-2.5,2.7,3.73,3.73,0,0,0-.22.65h0l0,0.39v0h0v0l-0.05.45h0a4.45,4.45,0,0,0,1.51,3.1H44.35L45,46.25l0,0h0l0.17,0.13h0c0.26,0.19.55,0.38,0.89,0.59a19,19,0,0,0,5.68,2c0.37,0.08.76,0.15,1.14,0.21a32.45,32.45,0,0,0,5.16.4A32.84,32.84,0,0,0,63,49.27l1.16-.2a18.75,18.75,0,0,0,6-2.12,10.15,10.15,0,0,0,1.06-.73,4.75,4.75,0,0,0,2.08-3.66,3,3,0,0,0,0-.39A3.76,3.76,0,0,0,73,41.09Zm-3.46,4a10.07,10.07,0,0,1-1.12.63,19.67,19.67,0,0,1-5.19,1.57c-0.37.07-.74,0.12-1.13,0.17a31.14,31.14,0,0,1-8.23,0c-0.38-.05-0.76-0.11-1.13-0.18a19.67,19.67,0,0,1-4.89-1.49,9.56,9.56,0,0,1-1-.56l-0.2-.13c-0.87-.58-1.87-1.47-1.87-2.56,0,0,0-.06,0-0.09l0.06-.38A2.14,2.14,0,0,1,45,41.53a5.66,5.66,0,0,1,2.28-2c0.36-.19.75-0.38,1.15-0.55l0.05,0a22.2,22.2,0,0,1,5.59-1.41h0l0.63-.08,0.7-.07a32.27,32.27,0,0,1,5.11,0l1,0.1h0a23.21,23.21,0,0,1,5.9,1.39l0.12,0h0a11.76,11.76,0,0,1,1.19.55,5.76,5.76,0,0,1,2.37,2,2.08,2.08,0,0,1,.27.79,1.4,1.4,0,0,1,0,.22C71.44,43.67,70.41,44.57,69.55,45.14Z"/><path d="M99.89,54.31a8.35,8.35,0,0,0-.48-1.77,11.08,11.08,0,0,0-1.67-2.85V42.56a8,8,0,0,0-.11-1.32,8.35,8.35,0,0,0-.48-1.77c-1.08-2.81-3.63-5.38-7.3-7.55-0.67-.39-1.37-0.78-2.11-1.14A59.79,59.79,0,0,0,68.5,25.57c-0.64-.07-1.29-0.14-1.95-0.2C63.84,25.12,61,25,58.1,25s-6,.14-8.83.42c-0.66.06-1.3,0.13-1.94,0.21h0a59.09,59.09,0,0,0-19,5.24c-0.74.37-1.43,0.75-2.1,1.14-3.58,2.14-6.06,4.67-7.14,7.43a8.38,8.38,0,0,0-.48,1.77,7.44,7.44,0,0,0-.12,1.34v8.11a9.55,9.55,0,0,0,2.25,5.93h0v4.26a11.51,11.51,0,0,0-2.11,3.36A8.38,8.38,0,0,0,18.12,66,7.37,7.37,0,0,0,18,67.34v8.11C18,81.63,24.87,87,35.48,90.1c0.64,0.19,1.28.37,1.95,0.54h0q2.34,0.61,4.89,1.06L44.13,92a87.76,87.76,0,0,0,13.52,1,88.37,88.37,0,0,0,12.78-.9C71,92,71.53,92,72.07,91.85q2.84-.47,5.43-1.13c0.67-.17,1.32-0.34,2-0.53h0A43,43,0,0,0,89.5,86c0.36-.22.7-0.43,1-0.66,4.28-2.8,6.76-6.21,6.76-9.93V70.23a9.83,9.83,0,0,0,2.7-6.5V55.62A8,8,0,0,0,99.89,54.31Zm-80,11.8a6.9,6.9,0,0,1,.59-1.77c0.06-.12.13-0.24,0.2-0.35s0-.17,0-0.25a8.42,8.42,0,0,0,.37,2.43Zm24.2,24c-0.6-.1-1.21-0.21-1.8-0.32-1.18-.22-2.33-0.47-3.45-0.75-0.68-.15-1.32-0.33-2-0.51h0a43.26,43.26,0,0,1-10.11-4.1c-0.64-.38-1.24-0.77-1.8-1.17V77.42l0.79,0.5,1,0.57a51.42,51.42,0,0,0,14.8,5l0.74,0.13,1.37,0.23,0.43,0.07v6.24h0ZM27.24,59.67c-0.64-.38-1.24-0.77-1.8-1.17V52.64l0.79,0.5,1,0.57a51.42,51.42,0,0,0,14.8,5l0.74,0.13L44.15,59l0.43,0.07v6.24c-0.6-.1-1.21-0.21-1.8-0.32-1.18-.22-2.33-0.47-3.45-0.75-0.68-.15-1.32-0.33-2-0.51h0A43.19,43.19,0,0,1,27.24,59.67Zm1.24,6.53,1,0.57a51.42,51.42,0,0,0,14.8,5L45,71.88l1.37,0.23,0.43,0.07v6.24c-0.6-.1-1.21-0.21-1.8-0.32-1.18-.22-2.33-0.47-3.45-0.75-0.68-.15-1.32-0.33-2-0.51h0a43.26,43.26,0,0,1-10.11-4.1c-0.64-.38-1.24-0.77-1.8-1.17V65.7ZM46.94,80.31L45.2,82.2c-0.72-.11-1.43-0.23-2.13-0.35h0a53.65,53.65,0,0,1-14.79-4.69c-0.78-.4-1.5-0.81-2.17-1.23l3.41-1a44.34,44.34,0,0,0,8.66,3.49c0.64,0.19,1.28.37,1.95,0.54h0Q42.48,79.53,45,80l1.8,0.31h0.1Zm1-9.83c-0.72-.11-1.43-0.23-2.13-0.35h0A53.65,53.65,0,0,1,31,65.44c-0.78-.4-1.5-0.81-2.17-1.23l2.13-.65a50.18,50.18,0,0,0,5,1.75c0.64,0.19,1.28.37,1.95,0.54h0q2.34,0.61,4.89,1.06l1.8,0.31c1.83,0.29,3.74.5,5.7,0.67ZM68.48,80.93c1.58-.14,3.14-0.31,4.65-0.53,0.55-.08,1.1-0.16,1.64-0.26q2.84-.47,5.43-1.13c0.67-.17,1.32-0.34,2-0.53h0a48,48,0,0,0,7.16-2.65h0c-0.68.42-1.4,0.84-2.16,1.23a53.64,53.64,0,0,1-15.34,4.84c-0.7.13-1.42,0.24-2.14,0.34Zm2.39-13.6c0.55-.08,1.1-0.16,1.64-0.26q2.84-.47,5.43-1.13c0.67-.17,1.32-0.34,2-0.53h0a47.74,47.74,0,0,0,7.35-2.74h0L92,64.12c-0.68.42-1.4,0.84-2.16,1.23a53.64,53.64,0,0,1-15.34,4.84c-0.7.13-1.42,0.24-2.14,0.34l-2.8-3ZM70.71,65.5V59.25l0.95-.14L72.52,59l1.26-.22h0a51.55,51.55,0,0,0,15.4-5.16L90.12,53,91,52.49v5.85c-0.56.41-1.16,0.81-1.8,1.2a43.24,43.24,0,0,1-10.7,4.33c-0.65.18-1.32,0.35-2,.5-1.28.32-2.61,0.59-4,.83C71.92,65.31,71.33,65.41,70.71,65.5ZM90.54,83.11c-0.56.41-1.16,0.81-1.8,1.2A43.24,43.24,0,0,1,78,88.65c-0.65.18-1.32,0.35-2,.5-1.28.32-2.61,0.59-4,.83-0.59.11-1.19,0.21-1.8,0.3V84l0.95-.14,0.86-.14,1.26-.22h0a51.55,51.55,0,0,0,15.4-5.16l0.94-.54,0.86-.56v5.85Zm2.7-11.71c-0.56.41-1.16,0.81-1.8,1.2a43.24,43.24,0,0,1-10.7,4.33c-0.65.18-1.32,0.35-2,.5-1.28.32-2.61,0.59-4,.83-0.59.11-1.19,0.21-1.8,0.3V72.32l0.95-.14L74.77,72,76,71.81h0a51.55,51.55,0,0,0,15.4-5.16l0.94-.54,0.86-.56V71.4h0ZM85.66,41.92a5,5,0,0,1,0,.64c0,2.26-1.29,4.38-3.57,6.18l7.66,2.32c-0.68.42-1.4,0.84-2.16,1.23a53.64,53.64,0,0,1-15.34,4.84c-0.7.13-1.42,0.24-2.14,0.34l-2.94-3.19a60.68,60.68,0,0,1-9.11.67,59.89,59.89,0,0,1-9.51-.73l-2.94,3.2c-0.72-.11-1.43-0.23-2.13-0.35h0a53.65,53.65,0,0,1-14.79-4.69c-0.78-.4-1.5-0.81-2.17-1.23l7.63-2.31c-2.35-1.83-3.69-4-3.69-6.28a5.45,5.45,0,0,1,0-.67l-10.16-.57A6.9,6.9,0,0,1,21,39.56c1.19-2.47,3.83-4.76,7.51-6.69h0c0.71-.38,1.46-0.74,2.25-1.09l6.68,2.49a40.35,40.35,0,0,1,12.74-3.6L48.3,27.35c0.64-.07,1.29-0.14,1.95-0.2h0c2.54-.23,5.16-0.36,7.85-0.36s5.05,0.11,7.48.32c0.66,0.05,1.31.12,2,.19l-1.87,3.32a41,41,0,0,1,12.95,3.56l6.66-2.49q1.19,0.53,2.27,1.08c3.78,2,6.48,4.28,7.69,6.79a7.3,7.3,0,0,1,.59,1.77ZM96.84,54.48a9.24,9.24,0,0,0,.66-1.8,7.29,7.29,0,0,1,.58,1.73Z"/></svg>
        </span>
      </span>
      <span id="number-games" class="stat">0</span>
      <p>Manages more than 100,000 slot and table games, processing every gaming rating, capturing patron spend, and calculating, publishing and redeeming earned rewards in real time.</p>
    </div>
    <div class="medium-6  large-3  column" data-equalizer-watch>
      <span class="feature-icon  feature-icon--stat">
        <span class="icon">
          <svg class="icon__item--purple" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118 118"><path d="M63.84,79.41L106,58.92V73.39L64.17,94,12,53.78V41.31ZM31.21,52.25L64,76.14l40.7-19.35L71.91,35.64Zm-1.93-1.4,18.81-7.61s-3.4-10.54-14.61-10.54L14.13,39.51Zm20.88-8.47,20.08-8.21S68.17,23.3,56.63,24L36.55,31.57A14.65,14.65,0,0,1,50.16,42.38Z"/></svg>
        </span>
      </span>
      <span id="number-hotels" class="stat">0</span>
      <p>Manages nearly 50,000 hotels rooms, tracking and rewarding patron spend on hotels, spas, and retail outlets.</p>
    </div>
    <div class="medium-6  large-3  column" data-equalizer-watch>
      <span class="feature-icon  feature-icon--stat">
        <span class="icon">
          <svg class="icon__item--purple" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118 118"><path d="M29,26.78V94.17a2.54,2.54,0,0,0,2.36,2.66h3.84a2.54,2.54,0,0,0,2.36-2.66,2.54,2.54,0,0,0,2.36,2.66h3.84a2.54,2.54,0,0,0,2.36-2.66,2.54,2.54,0,0,0,2.36,2.66h3.84a2.54,2.54,0,0,0,2.36-2.66,2.54,2.54,0,0,0,2.36,2.66h3.84a2.54,2.54,0,0,0,2.36-2.66,2.54,2.54,0,0,0,2.36,2.66h3.84a2.54,2.54,0,0,0,2.36-2.66,2.54,2.54,0,0,0,2.36,2.66h3.84a2.54,2.54,0,0,0,2.36-2.66,2.54,2.54,0,0,0,2.36,2.66h3.84A2.54,2.54,0,0,0,89,94.17V26.78H29ZM87.33,78.11a4.84,4.84,0,0,1-4.83,4.83H35.6a4.84,4.84,0,0,1-4.83-4.83V28.75H87.33V78.11Z"/><path d="M35.6,81H82.5a2.86,2.86,0,0,0,2.86-2.86V58.31H32.65v19.8A3,3,0,0,0,35.6,81Z"/><rect x="40.14" y="21.4" width="3.15" height="56.65" transform="translate(-10 10.5) rotate(-12.83)"/><path d="M36.59,22.35L48.9,76.64l-2.07.49L34.52,22.84l2.07-.49m0.79-1.18-1,.2-2.07.49-1,.2,0.2,1L45.85,77.33l0.2,1,1-.2,2.07-.49,1-.2-0.2-1L37.57,22.15l-0.2-1h0Z"/></svg>
        </span>
      </span>
      <span id="number-food" class="stat">0</span>
      <p>Integrates over 300 food and beverage operations, allowing patrons to earn and redeem rewards directly through point of sale systems.</p>
    </div>
    <p>When your loyalty program is critical for success, trust the expertise and leadership of House Advantage.</p>
  </div>
</div>



<div class="band  band--special  text-center">
  <div class="row  column">
    <h2>Don’t take our word for it.</h2>
    <p class="lead">Here’s what our customers say about House Advantage.</p>
  </div>
  <div class="row">
    <div class="column">
      <div class="orbit" role="region" aria-label="Client Testimonials" data-orbit data-options="timerDelay:12000; animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
        <ul class="orbit-container">
          <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
          <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
          <li class="is-active orbit-slide">
            <blockquote>
              After an extensive review of loyalty consulting and solution companies, it was clear that House Advantage offered the most comprehensive set of loyalty solution capabilities.  What also separated House Advantage from the rest is their operational experience. They know our business!
              <cite>Senior International Loyalty Marketing Executive</cite>
            </blockquote>
          </li>
          <li class="orbit-slide">
            <blockquote>
              Our partnership with House Advantage gave us the tools to transform our loyalty marketing programs, increase customer engagement and drive new revenue opportunities.
              <cite>CEO, top US destination resort operator</cite>
            </blockquote>
          </li>
          <li class="orbit-slide">
            <blockquote>
              House Advantage handles HALo deployment and support, which allows my IT teams to focus on other initiatives. Partnering with House Advantage for their deep expertise in customer loyalty and hands-on approach has been critical to our success.
              <cite>CIO, international hotel group</cite>
            </blockquote>
          </li>
        </ul>
        <!-- <nav class="orbit&#45;bullets"> -->
        <!--   <button class="is&#45;active" data&#45;slide="0"><span class="show&#45;for&#45;sr">First slide details.</span><span class="show&#45;for&#45;sr">Current Slide</span></button> -->
        <!--   <button data&#45;slide="1"><span class="show&#45;for&#45;sr">Second slide details.</span></button> -->
        <!--   <button data&#45;slide="2"><span class="show&#45;for&#45;sr">Third slide details.</span></button> -->
        <!--   <button data&#45;slide="3"><span class="show&#45;for&#45;sr">Fourth slide details.</span></button> -->
        <!-- </nav> -->
      </div>
    </div>
  </div>

  <!-- <div class="row"> -->
  <!--   <div class="medium&#45;6  columns" data&#45;equalizer&#45;watch> -->
  <!--     <blockquote> -->
  <!--       After an extensive review of loyalty consulting and solution companies, it was clear that House Advantage offered the most comprehensive set of loyalty solution capabilities.  What also separated House Advantage from the rest is their operational experience. They know our business! -->
  <!--       <cite>Senior International Loyalty Marketing Executive</cite> -->
  <!--     </blockquote> -->
  <!--   </div> -->
  <!--   <div class="medium&#45;6  columns" data&#45;equalizer&#45;watch> -->
  <!--     <blockquote> -->
  <!--       Our partnership with House Advantage gave us the tools to transform our loyalty marketing programs, increase customer engagement and drive new revenue opportunities. -->
  <!--       <cite>CEO, top US destination resort operator</cite> -->
  <!--     </blockquote> -->
  <!--   </div> -->
  <!-- </div> -->
  <!-- <div class="row"> -->
  <!--   <div class="medium&#45;6  columns" data&#45;equalizer&#45;watch> -->
  <!--     <blockquote> -->
  <!--       House Advantage handles HALo deployment and support, which allows my IT teams to focus on other initiatives. Partnering with House Advantage for their deep expertise in customer loyalty and hands&#45;on approach has been critical to our success. -->
  <!--       <cite>CIO, international hotel group</cite> -->
  <!--     </blockquote> -->
  <!--   </div> -->
  <!--   <div class="medium&#45;6  columns" data&#45;equalizer&#45;watch> -->
  <!--     <blockquote> -->
  <!--       Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. -->
  <!--       <cite>Venenatis Egestas</cite> -->
  <!--     </blockquote> -->
  <!--   </div> -->
  <!-- </div> -->
</div>
 <?php /*
 <?php while ( have_posts() ) : the_post(); ?>
   <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
       <header>
           <h1 class="entry-title"><?php the_title(); ?></h1>
       </header>
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
   </article>
 <?php endwhile;?>

 <?php get_sidebar(); ?>
    */ ?>

</div>

 <?php get_footer();
