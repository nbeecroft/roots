
  </div><!-- /#wrap -->
  <div class="push"></div>
 </div><!--/.sticky-wrapper-->
  <?php roots_footer_before(); ?>
  <footer id="content-info" class="<?php echo WRAP_CLASSES; ?>" role="contentinfo">
    <?php roots_footer_inside(); ?>
<<<<<<< HEAD
    <?php dynamic_sidebar('roots-footer'); ?>
    <p class="copy alignright"><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small></p>
=======
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <p class="copy"><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small></p>
>>>>>>> upstream/master
  </footer>
  <?php roots_footer_after(); ?>

  <?php wp_footer(); ?>
  <?php roots_footer(); ?>

</body>
</html>
