<div class="fixed-copy-right">
  <p>&copy; <?php esc_html(date('Y')); ?> <?php bloginfo('name'); ?></p>
</div>

<footer class="footer" id="footer">
  <div class="footer-inner">
    <div class="copy-right"><p>&copy; <?php esc_html(date('Y'));?> <?php bloginfo('name'); ?></p></div>
    <div class="powerd-by">
      <?php
      if (is_active_sidebar('sidebar-2')):
      ?>
          	<?php dynamic_sidebar( 'sidebar-2' ); ?>
      <?php
      endif;
      ?>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>
