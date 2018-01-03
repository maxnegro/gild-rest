  <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

  <header class="post-header">
      <?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
	</header>

	<div class="post-content">

		<?php the_content(); ?>

    <?php
      wp_link_pages( array(
        'before' => '<div class="post-links">',
        'after'  => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
      ) );
		?>

	</div>

</article>
