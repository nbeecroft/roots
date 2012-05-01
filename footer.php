
  </div><!-- /#wrap -->

  <?php roots_footer_before(); ?>
   <div id="footer-bg"> 
    <footer id="content-info" class="<?php echo WRAP_CLASSES; ?>" role="contentinfo">

   <?php roots_footer_inside(); ?>
    <?php dynamic_sidebar('roots-footer'); ?>
    <p class="copy align-right"><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small></p>
    </footer>
   </div>
  <?php roots_footer_after(); ?>
  <?php wp_footer(); ?>
  <?php roots_footer(); ?>
</body>
</html>
