<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo FULLWIDTH_CLASSES; ?>" role="main">
      	<h1 class="banner-text">Hi, I'm Nick. What brings you here?</h1>
	   <section>
	     <div class="row">
		<h2 id="business" class="well span2 offset3"><a href="<?php echo get_category_link(18); ?>">Business</a></h2>
		<h2 id="pleasure" class="well span2 offset1"><a href="<?php echo get_category_link(20); ?>">Pleasure</a></h2>
	     </div>
	     <div class="child-categories row">
	       <ul id="category-list-business" class="span5 offset1">
		 <?php echo my_list_categories(array('child_of'=>18,'hide_empty'=>0,'title_li'=>''));?>
		</ul>
	     
	       <ul id="category-list-pleasure" class="span5">
		 <?php echo my_list_categories(array('child_of'=>20,'hide_empty'=>0,'title_li'=>''));?>
	       </ul>
	     </div>
	   </section>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
        </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?> 
