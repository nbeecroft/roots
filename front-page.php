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
	    <div class="child-categories row">
	      <div class="span4">
		<h2><a href="<?php echo get_category_link(18); ?>"><?php echo get_cat_name(18);?></a></h2>
	        <ul id="category-list-business"><?php echo my_list_categories(array('child_of'=>18,'hide_empty'=>0,'title_li'=>''));?>
	        </ul>
	       </div>
	      <div class="span4">
	        <h2><a href="<?php echo get_category_link(20); ?>"><?php echo get_cat_name(20);?></a></h2>
	        <ul id="category-list-pleasure"><?php echo my_list_categories(array('child_of'=>20,'hide_empty'=>0,'title_li'=>''));?>
	        </ul>
	      </div>
	      <div class="span4">
		<h2>My Projects</h2>
		<p>Quisque aliquam varius nibh nec pellentesque. Vivamus erat sapien, aliquet a fermentum vel, sollicitudin ut ante. Aliquam erat volutpat. Vivamus quis neque leo. Vivamus tempus, ipsum vel congue commodo, nunc ligula vulputate sem, vitae faucibus massa massa vel risus. Etiam ut molestie risus. Donec sed dolor libero.</p>
	      </div>
	    </div>
	   </section>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?> 
