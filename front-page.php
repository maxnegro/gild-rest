<?php get_header(); ?>

<main class="main" id="js-main-page-single">

  <section class="section">
    <div class="section-inner">
      <div class="section-title" id="js-section-title">
        <h2><span><?php esc_html_e( 'Archives', 'gildrest' ); ?></span></h2>
      </div>
      <div class="section-content">
        <?php if ( have_posts() ) : ?>
          <div class="articles">
            <?php while ( have_posts() ) : the_post(); ?>
              <?php get_template_part('template-parts/page/content'); ?>
            <?php endwhile; ?>
          </div>
        <?php else : ?>
            <?php get_template_part('template-parts/common/articles-none'); ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
