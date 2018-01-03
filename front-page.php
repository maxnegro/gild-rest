<?php get_header(); ?>

<main class="main" id="js-main-index">

  <section class="section">
    <div class="section-inner">
      <div class="section-title" id="js-section-title">
        <h2><span><?php the_title(); ?></span></h2>
      </div>
      <div class="section-content">
        <?php the_content(); ?>
      </div>
    </div>
  </section>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
