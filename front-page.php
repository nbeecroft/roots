<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo FULLWIDTH_CLASSES; ?>" role="main">
	   <section>
	     <div class="hero-unit">
		<h1>Hi!</h2>
		<p>Please bear with me while I finish the design for this site</p>
     	     </div>
	   </section>  
	   <section>
	    <div class="child-categories category-list row">
	      <div class="span3 hero-unit-small-blue">
		<h2><a href="<?php echo get_category_link(18); ?>"><?php echo get_cat_name(18);?></a></h2>
	        <ul><?php echo my_list_categories(array('child_of'=>18,'hide_empty'=>0,'title_li'=>''));?>
	        </ul>
	       </div>
	      <div class="span3 hero-unit-small-red">
	        <h2><a href="<?php echo get_category_link(20); ?>"><?php echo get_cat_name(20);?></a></h2>
	        <ul class="category-list"><?php echo my_list_categories(array('child_of'=>20,'hide_empty'=>0,'title_li'=>''));?>
	        </ul>
	      </div>
	      <div class="span3 hero-unit-small-green">
		<h2>My Projects</h2>
		<p></p>
	      </div>
	    </div>
	   </section>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?> 
