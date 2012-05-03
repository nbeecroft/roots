<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo FULLWIDTH_CLASSES; ?>" role="main">
	   <section>
	     <div class="hero-unit">
		<h2><a href="<?php echo get_category_link(18); ?>"><?php echo get_cat_name(18);?></a></h2>
		<h2><a href="<?php echo get_category_link(20); ?>"><?php echo get_cat_name(20);?></a></h2>
	     </div>
	     <div class="child-categories row">
	       <ul id="category-list-business" class="span1 offset1">
		 <?php echo my_list_categories(array('child_of'=>18,'hide_empty'=>0,'title_li'=>''));?>
		</ul>
	       <ul id="category-list-pleasure" class="span1 offset1">
		 <?php echo my_list_categories(array('child_of'=>20,'hide_empty'=>0,'title_li'=>''));?>
	       </ul>
	     </div>
	   </section>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?> 
